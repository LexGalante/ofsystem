@extends('layouts.main')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}"><i class="fa fa-table"></i> Clientes</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-edit"></i> Alteração</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('cliente.update', ['id' => $cliente->id]) }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put"/>
    	<div class="card-header">
    		<i class="fa fa-plus"></i> Alterar Cliente {{ $cliente->nome }}
    	</div>
    	<div class="card-body">
    		<div class="row">
    			<div class="col-md-5"> 
        			<div class="form-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $cliente->nome }}">
                        @if ($errors->has('nome'))
                        	<small class="form-text text-muted">{{ $errors->first('nome') }}</small>
                        @endif
                	</div>
            	</div>
            	<div class="col-md-7">
            		<div class="form-group">
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="{{ $cliente->sobrenome }}">
                        @if ($errors->has('sobrenome'))
                        	<small class="form-text text-muted">{{ $errors->first('sobrenome') }}</small>
                        @endif
                	</div>	
            	</div>
    		</div>	
    		<div class="row">
    			<div class="col-md-3">
    				<div class="form-group">
                    	<input class="form-control" type="date" value="{{ date('d/m/Y') }}" id="nascimento" name="nascimento" placeholder="Nascimento" value="{{ $cliente->nascimento }}">
                    	@if ($errors->has('nascimento'))
                        	<small class="form-text text-muted">{{ $errors->first('nascimento') }}</small>
                        @endif
                	</div>	
    			</div>
    			<div class="col-md-3">
    				<div class="form-group">
                    	<select class="form-control" id="genero" name="genero">
                    		<option {{ if($cliente->genero == 'O') 'selected' : '' }} value="O">Genêro</option>
                          	<option {{ if($cliente->genero == 'M') 'selected' : '' }} value="M">Masculino</option>
                        	<option {{ if($cliente->genero == 'F') 'selected' : '' }} value="F">Feminino</option>
                    	</select>
                	</div>	
    			</div>	
    			<div class="col-md-3">
    				<div class="form-group">
                    	<select class="form-control" id="tipo" name="tipo">
                          <option {{ if($cliente->tipo == 'F') 'selected' : '' }} value="F">Pessoa Física</option>
                          <option {{ if($cliente->tipo == 'J') 'selected' : '' }} value="J">Pessoa Jurídica</option>
                    	</select>
                	</div>	
    			</div>	
    			<div class="col-md-3">
    				<div class="form-group">
    					<input class="form-control" type="number" value="" id="cprf" min="00000000000" max="99999999999" placeholder="CPF/CNPJ" value="{{ $cliente->cprf }}">
    				</div>
    				@if ($errors->has('cprf'))
                    	<small class="form-text text-muted">{{ $errors->first('cprf') }}</small>
                    @endif
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-4">
                	<div class="input-group">
                  		<input type="number" min="00000000" max="99999999" class="form-control" id="cep" name="cep" placeholder="CEP" value="{{ $cliente->cep }}">
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
                        <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" value="{{ $cliente->logradouro }}">
                        @if ($errors->has('logradouro'))
                        	<small class="form-text text-muted">{{ $errors->first('logradouro') }}</small>
                        @endif
                	</div>	
            	</div>	
            	<div class="col-md-1">
            		<div class="form-group">
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº" value="{{ $cliente->numero }}">
                        @if ($errors->has('numero'))
                        	<small class="form-text text-muted">{{ $errors->first('numero') }}</small>
                        @endif
                	</div>	
            	</div>	
    		</div>
    		<div class="row">
    			<div class="col-md-5">
            		<div class="form-group">
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ $cliente->bairro }}">
                        @if ($errors->has('bairro'))
                        	<small class="form-text text-muted">{{ $errors->first('bairro') }}</small>
                        @endif
                	</div>	
            	</div>
            	<div class="col-md-5">
            		<div class="form-group">
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{ $cliente->cidade }}">
                        @if ($errors->has('cidade'))
                        	<small class="form-text text-muted">{{ $errors->first('cidade') }}</small>
                        @endif
                	</div>	
            	</div>	
            	<div class="col-md-2">
            		<div class="form-group">
                    	<select class="form-control" id="uf" name="uf">
                    		<option value="PR">UF</option>
                          	<option {{ if($cliente->uf == 'AC') 'selected' : '' }} value="AC"></option>
                          	<option {{ if($cliente->uf == 'AL') 'selected' : '' }} value="AL">AL</option>
                            <option {{ if($cliente->uf == 'AM') 'selected' : '' }} value="AM">AM</option>
                            <option {{ if($cliente->uf == 'AP') 'selected' : '' }} value="AP">AP</option>
                            <option {{ if($cliente->uf == 'BA') 'selected' : '' }} value="BA">BA</option>
                            <option {{ if($cliente->uf == 'CE') 'selected' : '' }} value="CE">CE</option>
                            <option {{ if($cliente->uf == 'DF') 'selected' : '' }} value="DF">DF</option>
                            <option {{ if($cliente->uf == 'ES') 'selected' : '' }} value="ES">ES</option>
                            <option {{ if($cliente->uf == 'GO') 'selected' : '' }} value="GO">GO</option>
                            <option {{ if($cliente->uf == 'MA') 'selected' : '' }} value="MA">MA</option>
                            <option {{ if($cliente->uf == 'MG') 'selected' : '' }} value="MG">MG</option>
                            <option {{ if($cliente->uf == 'MS') 'selected' : '' }} value="MS">MS</option>
                            <option {{ if($cliente->uf == 'MT') 'selected' : '' }} value="MT">MT</option>
                            <option {{ if($cliente->uf == 'PA') 'selected' : '' }} value="PA">PA</option>
                            <option {{ if($cliente->uf == 'PB') 'selected' : '' }} value="PB">PB</option>
                            <option {{ if($cliente->uf == 'PE') 'selected' : '' }} value="PE">PE</option>
                            <option {{ if($cliente->uf == 'PI') 'selected' : '' }} value="PI">PI</option>
                            <option {{ if($cliente->uf == 'PR') 'selected' : '' }} value="PR">PR</option>
                            <option {{ if($cliente->uf == 'RJ') 'selected' : '' }} value="RJ">RJ</option>
                            <option {{ if($cliente->uf == 'RN') 'selected' : '' }} value="RN">RN</option>
                            <option {{ if($cliente->uf == 'RO') 'selected' : '' }} value="RO">RO</option>
                            <option {{ if($cliente->uf == 'RR') 'selected' : '' }} value="RR">RR</option>
                            <option {{ if($cliente->uf == 'RS') 'selected' : '' }} value="RS">RS</option>
                            <option {{ if($cliente->uf == 'SC') 'selected' : '' }} value="SC">SC</option>
                            <option {{ if($cliente->uf == 'SE') 'selected' : '' }} value="SE">SE</option>
                            <option {{ if($cliente->uf == 'SP') 'selected' : '' }} value="SP">SP</option>
                            <option {{ if($cliente->uf == 'TO') 'selected' : '' }} value="TO">TO</option>
                    	</select>
                	</div>
            	</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
        			<div class="text-center">
            			<div class="btn-group" data-toggle="buttons">
                          	<label class="btn btn-success active">
                            	<input type="radio" name="situacao" id="ativo" value="A" autocomplete="off" {{ if($cliente->situacao == 'A') 'checked' : '' }}> Ativo
                          	</label>
                          	<label class="btn btn-danger">
                            	<input type="radio" name="situacao" id="inativo" value="I" autocomplete="off" {{ if($cliente->situacao == 'I') 'checked' : '' }}> Inativo
                        	</label>
                        </div>		
            		</div>   
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