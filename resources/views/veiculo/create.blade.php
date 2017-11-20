@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('veiculo.index') }}"><i class="fa fa-table"></i> Veiculos</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-plus"></i> Novo</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('veiculo.store') }}">
		{{ csrf_field() }}
    	<div class="card-header">
    		<i class="fa fa-plus"></i> Novo Veiculo
    	</div>
    	<div class="card-body">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
                        <input type="text" class="form-control" id="cliente_id" name="cliente_id" readonly="readonly">
                        @if ($errors->has('cliente_id'))
                        	<small class="form-text text-muted">{{ $errors->first('cliente_id') }}</small>
                        @endif
                        <small class="form-text text-muted">Cód Cliente</small>
                	</div>
    			</div>
				<div class="col-md-3">
					<div class="form-group">
    					<input id="typeahead" width="100%" class="form-control typeahead tt-query" type="text" autocomplete="off" spellcheck="false" placeholder="Pesquise um Cliente...">
    					<small class="form-text text-muted"><i class="fa fa-search"></i> Pesquise pelo nome/sobrenome</small>
    				</div>
    			</div>
    			<div class="col-md-3">
					<div class="form-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Veiculo">
                        @if ($errors->has('nome'))
                        	<small class="form-text text-muted">{{ $errors->first('nome') }}</small>
                        @endif
                	</div>
    			</div>
    			<div class="col-md-2">
					<div class="form-group">
                    	<select class="form-control" id="marca_id" name="marca_id">
                    		@foreach ($marcas as $marca)
                    			<option value="{{ $marca->id }}">{{ $marca->marca }}</option>
                    		@endforeach	
                    	</select>
                    	<small class="form-text text-muted"><i class="fa fa-info"></i> Marca</small>
                	</div>
    			</div>
    			<div class="col-md-2">
					<div class="form-group">
                        <input type="text" class="form-control placa" id="placa" name="placa">
                        <small class="form-text text-muted"><i class="fa fa-info"></i> Placa</small>
                        @if ($errors->has('placa'))
                        	<small class="form-text text-muted">{{ $errors->first('placa') }}</small>
                        @endif
                	</div>
    			</div>
			</div>
			<div class="row">
				<div class="col-md-2">
    				<div class="form-group">
                        <input type="text" class="form-control date_year" id="ano" name="ano" placeholder="Ano">
                        @if ($errors->has('ano'))
                        	<small class="form-text text-muted">{{ $errors->first('ano') }}</small>
                        @endif
                	</div>					
				</div>
				<div class="col-md-2">
    				<div class="form-group">
                        <input type="text" class="form-control date_year" id="modelo" name="modelo" placeholder="Modelo">
                        @if ($errors->has('modelo'))
                        	<small class="form-text text-muted">{{ $errors->first('modelo') }}</small>
                        @endif
                	</div>					
				</div>
				<div class="col-md-3">
    				<div class="form-group">
                        <input type="text" class="form-control renavam" id="renavam" name="renavam" placeholder="Renavam">
                        @if ($errors->has('renavam'))
                        	<small class="form-text text-muted">{{ $errors->first('renavam') }}</small>
                        @endif
                	</div>					
				</div>
				<div class="col-md-5">
    				<div class="form-group">
                        <input type="text" class="form-control" id="chassi" name="chassi" placeholder="Chassi">
                        @if ($errors->has('chassi'))
                        	<small class="form-text text-muted">{{ $errors->first('chassi') }}</small>
                        @endif
                	</div>					
				</div>
			</div>
    	</div>
    	<div class="card-footer">
    		<button type="submit" id="btn-submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Salvar</button>
    	</div>
	</form>
	<!-- /FORM -->
</div>	
<!-- JS do form -->
<script src="{{ asset('js/veiculo/veiculo.js') }}"></script>
@endsection