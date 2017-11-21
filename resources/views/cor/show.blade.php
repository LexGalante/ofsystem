@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cor.index') }}"><i class="fa fa-table"></i> Cores</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Visualizar</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-eye"></i> Visualizar Cor
	</div>
	<div class="card-body">
		<p><strong class="text-info">Cód: </strong>{{ $cor->id }}<hr/></p>
		<p><strong class="text-info">Nome da Cor: </strong>{{ $cor->cor }}<hr/></p>
		<p><strong class="text-info">Criado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $cor->created_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $cor->created_at)->format('d/m/Y H:i:s') : '' }}<hr/></p>
		<p><strong class="text-info">Alterado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $cor->updated_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $cor->updated_at)->format('d/m/Y H:i:s') : '' }}</p>
	</div>
	<div class="card-footer">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('cor.store') }}" class="btn btn-success btn-block" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('cor.edit', ['id'=>$cor->id]) }}" class="btn btn-warning btn-block" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i> Editar</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('cor.delete', ['id'=>$cor->id]) }}" class="btn btn-danger btn-block" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i> Deletar</a>
			</div>
		</div>
	</div>
</div>
@endsection