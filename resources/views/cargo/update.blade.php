@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cargo.index') }}"><i class="fa fa-table"></i> Cargos</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-plus"></i> Novo</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('cargo.update', ['id' => $cargo->id]) }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put"/>
    	<div class="card-header">
    		<i class="fa fa-plus"></i> Alterar Cargo
    	</div>
    	<div class="card-body">
			<div class="row">
				<div class="col-md-8">
    				<div class="form-group">
                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Informe o nome do cargo" value="{{ $cargo->cargo }}">
                	</div>
				</div>
				<div class="col-md-4"> 
					<div class="text-center">
            			<div class="btn-group" data-toggle="buttons">
                          	<label class="btn btn-success {{ ($cargo->situacao == OfSystem\Cargo::ATIVO)? 'active' : '' }}">
                            	<input type="radio" name="situacao" id="ativo" value="A" autocomplete="off" checked> Ativo
                          	</label>
                          	<label class="btn btn-danger {{ ($cargo->situacao == OfSystem\Cargo::INATIVO)? 'active' : '' }}">
                            	<input type="radio" name="situacao" id="inativo" value="I" autocomplete="off"> Inativo
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
</div>	
@endsection