@extends('admin_template')
@section('content')
<div class="box">   
    <div class="box-body">
        <div class="box-header with-border">
            <a href="{{route('marca.create')}}" class="btn btn-primary">Novo</a>
        </div>
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Marca</td>
                </tr>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                <tr>
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->nome}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        {!! $marcas->render()!!}
    </div>
    
</div>
@endsection