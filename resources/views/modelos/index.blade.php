@extends('admin_template')
@section('content')
<div class="box">   
    <div class="box-body">
        <div class="box-header with-border">
            <a href="{{route('modelos.create')}}" class="btn btn-primary">Novo</a>
        </div>
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Modelo</td>
                </tr>
            </thead>
            <tbody>
                @foreach($modelos as $listaModelos)
                <tr>
                    <td>{{$listaModelos->id}}</td>
                    <td>{{$listaModelos->nome}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        {!! $modelos->render()!!}
    </div>
    
</div>
@endsection