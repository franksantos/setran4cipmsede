@extends('admin_template')
@section('page_header_title', 'Cadastro de Modelos')
@section('descricao_pagina_opcional', 'Preencha o cadastro para adicionar um novo Modelo de Ve&iacute;culo')
@section('content')
    <!-- Conteúdo -->
    <div class="row"> &nbsp;</div>
    <form action="{{route('modelos.store')}}" method="POST">                 
        {!! csrf_field() !!}
        <div class="form-group">
        <!-- marcas -->
        <label>Marca</label>
        <select name="marca" id="marca" class="form-control-static">
            <option>Selecione uma Marca</option>
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nome}}</option>
            @endforeach
        </select>
        </div>
        <!-- text input -->
        <div class="form-group">
        <label>Nome do Modelo</label>
        <input style="text-transform: uppercase;" type="text" name="nome" id="nome" class="form-control" placeholder="Informe o nome do modelo do ve&iacute;culo" required="required"/>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
    <script type="text/javascript">
    jQuery(document).ready(function(){
        $('#marca').change(function(){
            var idMarca = $('#marca').val();
			$.get("{{ url('marca/modelos/"+idMarca+"')}}", 
				{ option: $(this).val() }, 
				function(data) {
					var model = $('#modelo');
					model.empty();
 
					$.each(data, function(index, element) {
			            model.append("<option value='"+ element.id +"'>" + element.nome + "</option>");
			        });
				});
		});
        
    });
</script>
@endsection