@extends('admin_template')
@section('page_header_title', 'Listagem de Ve&iacute;culos')
@section('descricao_pagina_opcional', 'Lista de todos os ve&iacute;culos cadastrados')
@section('content')
<div class="box">   
    <div class="box-body">
        <div class="box-header with-border">
            <a href="{{route('veiculos.create')}}" class="btn btn-primary">Novo Ve&iacute;culo</a>
        </div>
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <td>Cod</td>
                    <td>Tipo Ve&iacute;culo</td>
                    <td>Placa</td>
                    <td>Cor</td>
                </tr>
            </thead>
            <tbody>
                @foreach($veiculos as $veiculo)
                <tr>
                    <td>{{$veiculo->id}}</td>
                    <td>{{$veiculo->tipo_veiculo    }}</td>
                    <td>{{$veiculo->placa}}</td>
                    <td>{{$veiculo->cor}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        {!! $veiculos->render()!!}
    </div>
    
</div>
@endsection