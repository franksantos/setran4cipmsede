@extends('admin_template')
@section('content')
<div class="box">   
    <div class="box-body">
        <div class="box-header with-border">
            <a href="{{route('aitr.create')}}" class="btn btn-primary">Novo</a>
        </div>
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <td>N&uacute;mero AITR</td>
                    <td>Data</td>
                    <td>Situa&ccedil;&atilde;o</td>
                    <td>Local</td>
                </tr>
            </thead>
            <tbody>
                @foreach($aitr as $chave)
                <tr>
                    <td>{{$chave->numero_aitr}}</td>
                    <td>{{$chave->data}}</td>
                    <td>{{$chave->situacao}}</td>
                    <td>{{$chave->local}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        {!! $aitr->render()!!}
    </div>
    
</div>
@endsection