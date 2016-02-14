<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Arr;

class ArrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('arr.index', ['arr' => Aitr::paginate(200)]);
    }

    /**
     * Import data for the database from Excel file
     *
     * @param
     * @return redirect for view success importing
     */
    public function importFromExcel(){
        //$arquivo = $_POST['file'];
        $file = Request::file('file');

        Excel::load($file, function($reader) {
            $aits = $reader->toArray();
            foreach($aits as $ait){
                //verifica, via select, pela placa se cada o ve�culo j� tem cadastro na base central
                /*
                 * se tiver placa cadastrada ent�o num faz nada
                 * sen�o caso n�o tenha j� o ve�culo cadastrado, ent�o cadastra o ve�culo na tabela ve�culos
                 * */
                //1� verifica, via select, pela placa se possui cadastro
                $getPlaca = $ait['placa'];
                $qtd_placa = DB::table('veiculos')->select('placa')->where('placa', '=', $getPlaca)->get();
                $total = count($qtd_placa);
                //print_r($qtd_placa);
                //echo $total;
                if($total>0){
                    echo "Encontrou uma placa no banco de dados<br>
                              Essa placa encontrada � igual a placa importada<br>
                              Existe a placa j� cadastrada";
                }else{
                    echo "N�O existe a placa cadastrada<br>";
                    echo  "A placa pode ser inserida que n�o vai dar redundancia de dados";
                }
            }
        });


        return 'importado com sucesso';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
