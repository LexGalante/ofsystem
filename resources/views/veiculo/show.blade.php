@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('veiculo.index') }}"><i class="fa fa-table"></i> Veiculos</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Visualizar</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-eye"></i> Visualizar Veiculo
	</div>
	<div class="card-body">
		<p><strong class="text-info">Cód: </strong>{{ $veiculo->id }}<hr/></p>
		<p><strong class="text-info">Veículo: </strong>{{ $veiculo->nome }}<hr/></p>
		<p><strong class="text-info">Placa: </strong>{{ $veiculo->placa }}<hr/></p>
		<p><strong class="text-info">Marca: </strong>{{ $veiculo->marca->marca }}<hr/></p>
		<p><strong class="text-info">Cor: </strong>{{ $veiculo->cor->cor }}<hr/></p>
		<p><strong class="text-info">Cliente: </strong>{{ ($veiculo->cliente->nome.' '.$veiculo->cliente->sobrenome )}}<hr/></p>
		<p>
			<strong class="text-info">Situação: </strong>
			@if($veiculo->situacao == OfSystem\Veiculo::ATIVO)
				<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i> ATIVO</span>
			@else
				<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i> INATIVO</span>
			@endif 
			<hr/>
		</p>
		<p><strong class="text-info">Criado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $veiculo->created_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $veiculo->created_at)->format('d/m/Y H:i:s') : '' }}<hr/></p>
		<p><strong class="text-info">Alterado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $veiculo->updated_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $veiculo->updated_at)->format('d/m/Y H:i:s') : '' }}</p>
	</div>
	<div class="card-footer">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('veiculo.store') }}" class="btn btn-success btn-block" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('veiculo.edit', ['id'=>$veiculo->id]) }}" class="btn btn-warning btn-block" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i> Editar</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('veiculo.delete', ['id'=>$veiculo->id]) }}" class="btn btn-danger btn-block" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i> Deletar</a>
			</div>
		</div>
	</div>
</div>
@endsection