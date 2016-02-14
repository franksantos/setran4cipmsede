<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AitRequest;
use App\Ait;
use App\Veiculos;
use App\Infracoes;

class AitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $novoAit = Ait::all();
        return view('ait.index', ['ait' => $novoAit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('ait.create', ['veiculos' => Veiculos::all(), 'infracoes' => Infracoes::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AitRequest $request)
    {
        //
        $ait = new Ait();
        //Tarefas, transformar a data para formato MySQL
        $dataUSA = implode("-",array_reverse(explode("/",$request->input('ait_data'))));
        $ait->veiculos_id    = $request->input('veiculo_id');
        $ait->infracao_id    = $request->input('infracao_id');
        $ait->numero_ait     = $request->input('ait_num');
        $ait->data           = $dataUSA;
        $ait->situacao       = Str::upper($request->input('ait_situacao'));
        $ait->motivo_cancel  = Str::upper($request->input('motivo_cancel'));
        $ait->obs            = Str::upper($request->input('obs'));
        $ait->cidade         = Str::upper($request->input('cidade'));
        $ait->save();
        return redirect(route('ait.index'));
    }

    /**
     * método para chamar a View da tela de envio do arquivo a ser importado
     *
     * @param
     * @return redirect for view success importing
     */
    public function import(){
        return View('ait.import');
    }

    /**
     * Import data for the database from Excel file
     *
     * @param
     * @return redirect for view success importing
     */
    public function importFromExcel(Ait $ait){
        //$arquivo = $_POST['file'];
        $file = Request::file('file');

        Excel::load($file, function($reader) {
            $aitsXls = $reader->toArray();
            foreach($aitsXls as $a){
                //exibe par teste
                //$ait->insert(['veiculo_id'=>$a['']]);
                dd($a['patio']);
            }
        });


            return 'importado com sucesso';
        }

    /**
     * Export data of the View for the Excel file
     *
     * @param
     * @return redirect for view success exporting
     */
    public function exportForExcel(){


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ait = Ait::find($id);
        return view('ait.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
