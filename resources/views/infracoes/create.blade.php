@extends('admin_template')
@section('page_header_title', 'Cadastro de Infra&ccedil;&atilde;o de Tr&acirc;nsito')
@section('descricao_pagina_opcional', 'Preencha o cadastro para adicionar uma Infra&ccedil;&atilde;o de Tr&acirc;nsito')
@section('content')
    <!-- Conteúdo -->
    <div class="row" id="errors"> 
    <!-- exibe os erros de validações do formulário se tiver -->
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>A descri&ccedil;&atilde;o da Infra&ccedil;&atilde;o n&atilde;o pode ser vazia.</li>
            @endforeach
        </ul>
    @endif
    
    </div>
    <form action="{{route('infracoes.store')}}" method="POST">                 
        {!! csrf_field() !!}
        <!-- text input -->
        <div class="form-group">
        <label>Descr&ccedil;&atilde;o da Infra&ccedil;&atilde;o</label>
        <input type="text" name="desc" id="desc" class="form-control" placeholder="Exemplo: Art. 162-I, Dirigir ve&iacute;culo sem possuir Carteira Nacional de Habilita&ccedil;&atilde;o ou Permiss&atilde;o para Dirigir" /> <!--required="required"-->
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection