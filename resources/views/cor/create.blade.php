@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cor.index') }}"><i class="fa fa-table"></i> Cores</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-plus"></i> Novo</li>
</ol>
<div class="card mb-3">
	<!-- FORM -->
	<form method="post" action="{{ route('cor.store') }}">
		{{ csrf_field() }}
    	<div class="card-header">
    		<i class="fa fa-plus"></i> Nova Cor
    	</div>
    	<div class="card-body">
			<div class="row">
				<div class="col-md-12">
    				<div class="form-group">
                        <input type="text" class="form-control" id="cor" name="cor" placeholder="Informe o nome da cor">
                        @if ($errors->has('cor'))
                        	<small class="form-text text-muted">{{ $errors->first('cor') }}</small>
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
@endsection