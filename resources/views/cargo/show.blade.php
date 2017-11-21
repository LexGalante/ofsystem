@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cargo.index') }}"><i class="fa fa-table"></i> Cargos</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Visualizar</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-eye"></i> Visualizar Cargo
	</div>
	<div class="card-body">
		<p><strong class="text-info">Cód: </strong>{{ $cargo->id }}<hr/></p>
		<p><strong class="text-info">Nome: </strong>{{ $cargo->cargo }}<hr/></p>
		<p>
			<strong class="text-info">Situação: </strong>
			@if($cargo->situacao == OfSystem\Cargo::ATIVO)
    			<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i></span>
    		@else
    			<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i></span>	
    		@endif
		</p>
		<p><strong class="text-info">Criado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $cargo->created_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $cargo->created_at)->format('d/m/Y H:i:s') : '' }}<hr/></p>
		<p><strong class="text-info">Alterado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $cargo->updated_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $cargo->updated_at)->format('d/m/Y H:i:s') : '' }}</p>
	</div>
	<div class="card-footer">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('cargo.store') }}" class="btn btn-success btn-block" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('cargo.edit', ['id'=>$cargo->id]) }}" class="btn btn-warning btn-block" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i> Editar</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('cargo.delete', ['id'=>$cargo->id]) }}" class="btn btn-danger btn-block" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i> Deletar</a>
			</div>
		</div>
	</div>
</div>
@endsection