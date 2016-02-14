<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\VeiculoRequest;
use App\Veiculos;
use App\Marca;

class VeiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('veiculos.index', ['veiculos' => Veiculos::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('veiculos.create', ['marcas' => Marca::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeiculoRequest $request)
    {
        //
        $placa = $request->input('pla_letras')."-".$request->input('pla_numeros');
        $veiculo = new Veiculos();
        $veiculo->marcas_id      = $request->input('marca');
        $veiculo->modelos_id     = $request->input('modelo');
        $veiculo->tipo_veiculo   = Str::upper($request->input('tipo_veiculo'));
        $veiculo->cor            = Str::upper($request->input('cor'));
        $veiculo->ano_fabricacao = $request->input('anoFab');
        $veiculo->placa          = Str::upper($placa);
        $veiculo->uf_placa       = $request->input('uf_placa');  
        $veiculo->cid_placa      = Str::upper($request->input('cid_placa'));    
        $veiculo->chassi         = Str::upper($request->input('chassi'));
        $veiculo->save();
        return redirect(route('veiculos.index'));
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
