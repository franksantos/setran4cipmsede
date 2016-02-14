@extends('admin_template')
@section('page_header_title', 'Cadastro de Auto de Infra&ccedil;&atilde;o de Tr&acirc;nsito')
@section('descricao_pagina_opcional', 'Preencha o cadastro para adicionar um novo AIT')
@section('content')
<!-- Conteúdo -->
<div class="box box-primary">
    
    <!-- mensagens de erro -->
    <div class="row" id="errors"> 
    <!-- exibe os erros de validações do formulário se tiver -->
    {{--@if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li><li>{{ $error }}</li></li>
            @endforeach
        </ul>
    @endif--}}
    </div>

    <form action="{{route('ait.store')}}" method="POST">                 
        {!! csrf_field() !!}
        <div class="box-body">
            <!-- CIDADES DA 4CIPM -->
            <div class="form-group">
            <label>Cidade&nbsp;&nbsp;</label>
            <select name="cidade" id="cidade" class="input-lg" required>
                <option>Selecione a cidade do Auto de Infra&ccedil;&atilde;o de Tr&acirc;nsito</option>
                <optgroup label="1o Pelot&atilde;o"> 
                    <option value="ARAGUATINS">ARAGUATINS</option>
                    <option value="SAO BENTO DO TOCANTINS">S&Atilde;O BENTO DO TOCANTINS</option>
                </optgroup>
                <optgroup label="2o Pelot&atilde;o"> 
                    <option value="AUGUSTINOPOLIS">AUGUSTIN&Oacute;POLIS</option>
                    <option value="PRAIA NORTE">PRAIA NORTE</option>
                    <option value="SAMPAIO">SAMPAIO</option>
                    <option value="CARRASCO BONITO">CARRASCO BONITO</option>
                    <option value="BURITI DO TOCANTINS">BURITI DO TOCANTINS</option>
                    <option value="SAO SEBASTIAO">S&Atilde;O SEBASTI&Atilde;O</option>
                    <option value="ESPERANTINA">ESPERANTINA</option>
                </optgroup>
                <optgroup label="3o Pelot&atilde;o">  
                    <option value="SAO MIGUEL DO TOCANTINS">S&Atilde;O MIGUEL DO TOCANTINS</option>
                    <option value="ITAGUATINS">ITAGUATINS</option>
                    <option value="SITIO NOVO">S&Iacute;TIO NOVO</option>
                    <option value="AXIXA DO TOCANTINS">AXIX&Aacute; DO TOCANTINS</option>
                </optgroup>
            </select>
            </div>
            <!-- text input -->
            <div class="form-group">
            <!-- veiculos -->
            <label>Placa do Ve&iacute;culo&nbsp;&nbsp;</label>
            <select name="veiculo_id" id="veiculo_id" class="input-lg" required>
                <option>Selecione um Ve&iacute;culo</option>
                @foreach($veiculos as $veiculo)
                    <option value="{{$veiculo->id}}">{{$veiculo->placa}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <label>N&uacute;mero do Auto de Infra&ccedil;&atilde;o de Tr&acirc;nsito</label>
                <div class="form-inline">
                    <input type="number" name="ait_num" id="ait_num" style="text-transform: uppercase;" placeholder="Ex: 192838" maxlength="7" class="input-lg" required>
                </div>         
            </div>
            <div class="form-group">
                <div class="form-inline">
                    <label>Data do AIT</label>
                    <input type="text" name="ait_data" id="ait_data" value="{{date('d/m/Y')}}" class="form-control input-lg" maxlength="10" placeholder="01/10/2015" class="input-lg" required />
                </div>
            </div>
            <div class="form-group">
                <label>Situa&ccedil;&atilde;o</label>
                <select name="ait_situacao" id="ait_situacao" class="input-lg">
                    <option value="SELECIONE">Selecione</option>
                    <option value="LAVRADO">LAVRADO</option>
                    <option value="CANCELADO">CANCELADO</option>
                </select>
            </div>
            <div class="form-group" id="amparo_legal">
                <!-- infrações -->
                <label for="Amparo Legal">Amparo Legal&nbsp;&nbsp;</label>
                <select name="infracao_id" id="infracao_id" class="input-lg" required>
                    <option>Selecione uma Infra&ccedil;&atilde;o</option>
                    @foreach($infracoes as $infracao)
                        <option value="{{$infracao->id}}">Art. {{$infracao->artigo}} - {{$infracao->codigo}} - {{$infracao->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" id="motivo_cancelamento">
                <label>Motivo do Cancelamento</label>
                <select name="motivo_cancel" id="motivo_cancel" class="input-lg" required>
    				<option value="ERRO DE PREENCHIMENTO">ERRO DE PREENCHIMENTO</option>
                    <option value="AUTO INSERVIVEL">AUTO INSERV&Iacute;VEL</option>
    				<option value="SEGUNDAS VIAS RASURADAS">2<sup>as</sup> VIAS RASURADAS</option>
    				<option value="OUTRO">OUTRO</option>
    			</select>
            </div>
            <!-- textarea ## motivo do Cancelamento personalizado -->
            <div class="form-group" id="descMotivoCancel">
                <label>Descreva o motivo do cancelamento</label>
                <textarea name="descMotivoCancel" class="form-control" rows="3" placeholder="..." class="input-lg" ></textarea>
            </div>
            
            <!-- textarea ## motivo do Cancelamento personalizado -->
            <div class="form-group">
                <label>Observa&ccedil;&atilde;o Opcional</label>
                <textarea name="obs" class="form-control" rows="3" placeholder="..." class="input-lg" ></textarea>
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
<script>
    /** Mostrando e ocultado o campos após selecionar LAVRADO ou CANCELADO */
            $("#amparo_legal").hide();
            $("#motivo_cancelamento").hide();
            $("#descMotivoCancel").hide();
            $('#ait_situacao').change(function(){
                var slc = $('#ait_situacao').val();
                if(slc=="SELECIONE"){
                    $("#amparo_legal").hide();
                    $("#motivo_cancelamento").hide('fade');
                    $("#descMotivoCancel").hide('fade');        
                }
                if(slc=="LAVRADO"){
                    $("#amparo_legal").show('slow');
                    $("#motivo_cancelamento").hide();
                    $("#descMotivoCancel").hide();    
                }
                if(slc=="CANCELADO"){
                    $("#motivo_cancelamento").show('slow');
                    $("#amparo_legal").hide();
                    $("#motivo_cancel").change(function(){
                        var slc_motivo_cancel = $("#motivo_cancel").val();
                        $("#descMotivoCancel").hide('slow');
                        if(slc_motivo_cancel == "OUTRO"){
                            $("#descMotivoCancel").show('slow');
                        }    
                    });
                             
                } 
                
            });
</script>
<script>
</script>
@endsection