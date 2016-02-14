@extends('admin_template')
@section('page_header_title', 'Cadastro de Ve&iacute;culos')
@section('descricao_pagina_opcional', 'Preencha o cadastro para adicionar um ve&iacute;culo')
@section('content')
<!-- Conteúdo -->
<div class="box box-primary">
    
    <!-- mensagens de erro -->
    <div class="row" id="errors"> 
    <!-- exibe os erros de validações do formulário se tiver -->
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li><li>{{ $error }}</li></li>
            @endforeach
        </ul>
    @endif
    </div>

    <form action="{{route('veiculos.store')}}" method="POST">                 
        {!! csrf_field() !!}
        <div class="box-body">
            <!-- text input -->
            <div class="form-group">
            <!-- marcas -->
            <label>Marca&nbsp;&nbsp;</label>
            <select name="marca" id="marca" class="input-lg" required>
                <option>Selecione uma Marca</option>
                @foreach($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->nome}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <!-- modelos -->
                <label for="Modelos">Modelo&nbsp;&nbsp;</label>
                <select name="modelo" id="modelo" class="input-lg" required>
                    <option>Primeiro Selecione uma Marca</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tipo de Ve&iacute;culo&nbsp;&nbsp;</label>
                <select name="tipo_veiculo" id="tipo_veiculo" class="input-lg" required>
                    <option>Selecione um Tipo de Ve&iacute;culo</option>
                    <option value="Motocicleta">Motocicleta</option>
                    <option value="Automovel">Autom&oacute;vel</option>
                    <option value="Caminhao">Caminh&atilde;o</option>
                    <option value="Onibus">&Ocirc;nibus</option>
                    <option value="Microonibus">Micro&ocirc;nibus</option>
                    <option value="Motoneta">Motoneta</option>
                    <option value="Ciclomotor">Ciclomotor</option>
                    <option value="Triciclo">Triciclo</option>
                    <option value="Reboque">Reboque</option>
                    <option value="Semi-Reboque">Semi-Reboque</option>
                </select>
            </div>
            <div class="form-group">
                <label>Placa</label>
                <div class="form-inline">
                    <input type="text" name="pla_letras" id="pla_letras" style="text-transform: uppercase;" placeholder="ABC" maxlength="3" class="input-lg" required>
               	    <input type="text" name="pla_numeros" id="pla_numeros" placeholder="9999" maxlength="4" class="input-lg" required>
                </div>
                
            </div>
            <div class="form-group">
                <div class="form-inline">
                    <label>Cidade da Placa</label>
                    <input type="text" name="cid_placa" id="cid_placa" style="text-transform: uppercase;" class="form-control input-lg" placeholder="Exemplo: ARAGUATINS" class="input-lg" required />
                    <label>UF da Placa</label>
                    <select name="uf_placa" class="input-lg" required>
                      <option value="">Selecione</option>
    				  <option value="AC">AC</option>
    				  <option value="AL">AL</option>
    				  <option value="AP">AP</option>
    				  <option value="AM">AM</option>
    				  <option value="BA">BA</option>
    				  <option value="CE">CE</option>
    				  <option value="ES">ES</option>
    				  <option value="DF">DF</option>
    				  <option value="DF">GO</option>
    				  <option value="MA">MA</option>
    				  <option value="MT">MT</option>
    				  <option value="MS">MS</option>
    				  <option value="MG">MG</option>
    				  <option value="PA">PA</option>
    				  <option value="PB">PB</option>
    				  <option value="PR">PR</option>
    				  <option value="PE">PE</option>
    				  <option value="PI">PI</option>
    				  <option value="RJ">RJ</option>
    				  <option value="RN">RN</option>
    				  <option value="RS">RS</option>
    				  <option value="RO">RO</option>
    				  <option value="RR">RR</option>
    				  <option value="SC">SC</option>
    				  <option value="SP">SP</option>
    				  <option value="SE">SE</option>
    				  <option value="TO" selected="selected">TO</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Cor &nbsp;&nbsp;</label>
                <select name="cor" id="cor" class="input-lg" required>
                    <option>Selecione a cor do Ve&iacute;culo</option>
                    <option value="Preto">Preto</option>
                    <option value="Branco">Branco</option>
                    <option value="Prata">Prata</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Azul">Azul</option>
                    <option value="Vermelha">Vermelha</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Bege">Bege</option>
                    <option value="Verde">Verde</option>
                    <option value="Amarelo">Amarelo</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ano de Fabrica&ccedil;&atilde;o</label>
                <select name="anoFab" id="anoFab" class="input-lg" required>
    				<option value="2015">2015</option>
                    <option value="2014">2014</option>
    				<option value="2013">2013</option>
    				<option value="2012">2012</option>
    				<option value="2011">2011</option>
    				<option value="2010">2010</option>
    				<option value="2009">2009</option>
    				<option value="2008">2008</option>
    				<option value="2007">2007</option>
    				<option value="2006">2006</option>
    				<option value="2005">2005</option>
    				<option value="2004">2004</option>
    				<option value="2003">2003</option>
    				<option value="2002">2002</option>
    				<option value="2001">2001</option>
    				<option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1999">1998</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    
    			</select>
            </div>
            <div class="form-group">
                <label>Chassi</label>
                <input name="chassi" id="chassi" style="text-transform: uppercase;" class="input-lg" maxlength="17" />
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        
    </form>
</div>
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