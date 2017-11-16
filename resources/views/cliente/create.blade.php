@extends('layouts.main')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}"><i class="fa fa-table"></i> Clientes</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-plus"></i> Novo</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('cliente.store') }}">
		{{ csrf_field() }}
    	<div class="card-header">
    		<i class="fa fa-plus"></i> Novo Cliente
    	</div>
    	<div class="card-body">
    		<div class="row">
    			<div class="col-md-4"> 
        			<div class="form-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        @if ($errors->has('nome'))
                        	<small class="form-text text-muted">{{ $errors->first('nome') }}</small>
                        @endif
                	</div>
            	</div>
            	<div class="col-md-6">
            		<div class="form-group">
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                        @if ($errors->has('sobrenome'))
                        	<small class="form-text text-muted">{{ $errors->first('sobrenome') }}</small>
                        @endif
                	</div>	
            	</div>
            	<div class="col-md-2">
            		<div class="text-center">
            			<div class="btn-group" data-toggle="buttons">
                          	<label class="btn btn-success active">
                            	<input type="radio" name="situacao" id="ativo" value="A" autocomplete="off" checked> Ativo
                          	</label>
                          	<label class="btn btn-danger">
                            	<input type="radio" name="situacao" id="inativo" value="I" autocomplete="off"> Inativo
                        	</label>
                        </div>		
            		</div>
            	</div>
    		</div>	
    		<div class="row">
    			<div class="col-md-3">
    				<div class="form-group">
                    	<input class="form-control" type="date" value="{{ date('d/m/Y') }}" id="nascimento" name="nascimento" placeholder="Nascimento">
                    	@if ($errors->has('nascimento'))
                        	<small class="form-text text-muted">{{ $errors->first('nascimento') }}</small>
                        @endif
                	</div>	
    			</div>
    			<div class="col-md-3">
    				<div class="form-group">
                    	<select class="form-control" id="genero" name="genero">
                    		<option value="O">Genêro</option>
                          	<option value="M">Masculino</option>
                        	<option value="F">Feminino</option>
                    	</select>
                	</div>	
    			</div>	
    			<div class="col-md-3">
    				<div class="form-group">
                    	<select class="form-control" id="tipo" name="tipo">
                          <option value="F">Pessoa Física</option>
                          <option value="J">Pessoa Jurídica</option>
                    	</select>
                	</div>	
    			</div>	
    			<div class="col-md-3">
    				<div class="form-group">
    					<input class="form-control cpf" data-mask="000.000.000-00" data-mask-selectonfocus="true" value="" id="cprf" min="00000000000" max="99999999999" placeholder="CPF/CNPJ">
    				</div>
    				@if ($errors->has('cprf'))
                    	<small class="form-text text-muted">{{ $errors->first('cprf') }}</small>
                    @endif
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-4">
                	<div class="input-group">
                  		<input class="form-control cep" id="cep" name="cep" placeholder="CEP">
                  		<span class="input-group-btn">
                			<button class="btn btn-info" type="button"><i class="fa fa-search"></i> Buscar CEP</button>
                  		</span>
                  		@if ($errors->has('cep'))
                        	<small class="form-text text-muted">{{ $errors->first('cep') }}</small>
                        @endif
                	</div>
              	</div>
              	<div class="col-md-7">
            		<div class="form-group">
                        <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
                        @if ($errors->has('logradouro'))
                        	<small class="form-text text-muted">{{ $errors->first('logradouro') }}</small>
                        @endif
                	</div>	
            	</div>	
            	<div class="col-md-1">
            		<div class="form-group">
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº">
                        @if ($errors->has('numero'))
                        	<small class="form-text text-muted">{{ $errors->first('numero') }}</small>
                        @endif
                	</div>	
            	</div>	
    		</div>
    		<div class="row">
    			<div class="col-md-5">
            		<div class="form-group">
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                        @if ($errors->has('bairro'))
                        	<small class="form-text text-muted">{{ $errors->first('bairro') }}</small>
                        @endif
                	</div>	
            	</div>
            	<div class="col-md-5">
            		<div class="form-group">
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        @if ($errors->has('cidade'))
                        	<small class="form-text text-muted">{{ $errors->first('cidade') }}</small>
                        @endif
                	</div>	
            	</div>	
            	<div class="col-md-2">
            		<div class="form-group">
                    	<select class="form-control" id="uf" name="uf">
                    		<option value="PR">UF</option>
                          	<option value="AC"></option>
                          	<option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                    	</select>
                	</div>
            	</div>
    		</div>
    		<div class="row">
    			<div class="col-md-5">
    				<table class="table table-bordered" id="tabela-contatos-cliente" width="100%" cellspacing="0">
    					<thead>
                        	<tr class="bg-info">
                        		<th colspan="3">
                        			<button type="button" id="btn-novo-contato" class="btn btn-success btn-sm" data-toggle="tooltip" title="Clique aqui para adicionar um novo contato com cliente"><i class="fa fa-plus"></i> Novo Contato</button>
                        		</th>
                        	</tr>            
                            <tr class="bg-info">
                                <th width="30%" class="text-center text-white">Tipo</th>
                                <th width="55%" class="text-center text-white">Contato</th>
                                <th width="5%" class="text-center text-white">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
    				</table>
    			</div>   
    			<div class="col-md-7">
    				<table class="table table-bordered" id="tabela-contatos-cliente" width="100%" cellspacing="0">
    					<thead>
                        	<tr class="bg-info">
                        		<th colspan="3">
                        			<button type="button" id="btn-novo-contato" class="btn btn-success btn-sm" data-toggle="tooltip" title="Clique aqui para adicionar um novo contato com cliente"><i class="fa fa-plus"></i> Novo Contato</button>
                        		</th>
                        	</tr>            
                            <tr class="bg-info">
                                <th width="25%" class="text-center text-white">Tipo</th>
                                <th width="65%" class="text-center text-white">Contato</th>
                                <th width="10%" class="text-center text-white">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
    				</table>
    			</div> 		
    		</div>	
    	</div>
    	<div class="card-footer">
    		<button type="submit" id="btn-submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Salvar</button>
    	</div>
	</form>
	<!-- /FORM -->
	<!-- JS do form -->
	<script src="{{ asset('js/cliente/cliente.js') }}"></script>
</div>	
@endsection