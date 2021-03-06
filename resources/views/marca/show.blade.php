@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('marca.index') }}"><i class="fa fa-table"></i> Marcas</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Visualizar</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-eye"></i> Visualizar Marca de Veículo
	</div>
	<div class="card-body">
		<p><strong class="text-info">Cód: </strong>{{ $marca->id }}<hr/></p>
		<p><strong class="text-info">Nome da Cor: </strong>{{ $marca->marca }}<hr/></p>
		<p>
			<strong class="text-info">Origem: </strong>
			@if($marca->origem == 'N')
				NACIONAL
			@elseif($marca->origem == 'I')
				IMPORTADO
			@else
				NACIONAL/IMPORTADO
			@endif 
			<hr/>
		</p>
		<p><strong class="text-info">Criado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $marca->created_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $marca->created_at)->format('d/m/Y H:i:s') : '' }}<hr/></p>
		<p><strong class="text-info">Alterado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $marca->updated_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $marca->updated_at)->format('d/m/Y H:i:s') : '' }}</p>
	</div>
	<div class="card-footer">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('marca.store') }}" class="btn btn-success btn-block" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('marca.edit', ['id'=>$marca->id]) }}" class="btn btn-warning btn-block" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i> Editar</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('marca.delete', ['id'=>$marca->id]) }}" class="btn btn-danger btn-block" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i> Deletar</a>
			</div>
		</div>
	</div>
</div>
@endsection