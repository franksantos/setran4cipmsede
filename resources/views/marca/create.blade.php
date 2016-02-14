@extends('admin_template')
@section('page_header_title', 'Cadastro de Marcas de Ve&iacute;culos')
@section('descricao_pagina_opcional', 'Preencha o cadastro para adicionar uma nova marca fabricante de ve&iacute;culo')
@section('content')
    <!-- Conteúdo -->
    <form action="{{route('marca.store')}}" method="POST">                 
        {!! csrf_field() !!}
        <!-- text input -->
        <div class="form-group">
        <label>Nome da Marca</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o nome da Marca" required="required"/>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    
@endsection