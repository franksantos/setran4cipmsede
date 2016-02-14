@extends('admin_template')
@section('page_header_title', 'Listagem de Auto de Infra&ccedil;&atilde;o de Tr&acirc;nsito')
@section('descricao_pagina_opcional', '')
@section('content')
<div class="box">   
    <div class="box-body">
        
            
        <a href="{{route('ait.create')}}" class="btn btn-primary">Novo</a>
        <a href="{{route('ait.import')}}" class="btn btn-primary">Carregar Arquivo Recebido</a>
        
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <td>N&uacute;mero AIT</td>
                    <td>Data</td>
                    <td>Situa&ccedil;&atilde;o</td>
                    <td>Cidade</td>
                    <!--<td>&nbsp;</td>
                    <td>&nbsp;</td>-->
                </tr>
            </thead>
            <tbody>
                @foreach($ait as $chave)
                <tr>
                    <td>{{$chave->numero_ait}}</td>
                    <td>{{$chave->data->format('d/m/Y')}}</td>
                    <td>{{$chave->situacao}}</td>
                    <td>{{$chave->cidade}}</td>
                    <!--<td><a href="" class="btn btn-info">Editar</a></td>
                    <td><a href="" class="btn btn-danger">Excluir</a> </td>-->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        
    </div>
    
</div>
@endsection