@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('marca.index') }}"><i class="fa fa-table"></i> Marcas</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-plus"></i> Novo</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('marca.store') }}">
		{{ csrf_field() }}
    	<div class="card-header">
    		<i class="fa fa-plus"></i> Nova Marca de Veículo
    	</div>
    	<div class="card-body">
			<div class="row">
				<div class="col-md-8">
    				<div class="form-group">
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Informe o nome da marca">
                        @if ($errors->has('marca'))
                        	<small class="form-text text-muted">{{ $errors->first('marca') }}</small>
                        @endif
                	</div>
				</div>
				<div class="col-md-4">
    				<div class="form-group">
                    	<select class="form-control" id="origem" name="origem">
                    		<option value="N">NACIONAL</option>
                          	<option value="I">IMPORTADO</option>
                        	<option value="A">NACIONAL/IMPORTADO</option>
                    	</select>
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
@endsection