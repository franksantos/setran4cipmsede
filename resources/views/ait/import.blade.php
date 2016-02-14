@extends('admin_template')
@section('page_header_title', 'Importação de Auto de Infra&ccedil;&atilde;o de Tr&acirc;nsito')
@section('descricao_pagina_opcional', 'Envie o arquivo do Excel e salve todos os AIT´s')
@section('content')
        <!-- Conteúdo -->
<div class="box box-primary">

    <!-- mensagens de erro -->
    <div class="row" id="errors">
    </div>
    <form action="{{route('ait.importFromExcel')}}" method="POST" enctype="multipart/form-data" >
        {!! csrf_field() !!}
        <div class="box-body">
            <!-- CIDADES DA 4CIPM -->
            <div class="form-group">
                    <label>Escolha o arquivo do Excel para enviar&nbsp;&nbsp;</label>
                    <input type="file" name="file" id="file" class="input-lg" require/>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</div>
@endsection