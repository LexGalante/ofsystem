@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('funcionario.index') }}"><i class="fa fa-table"></i> Funcionarios</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Visualizar</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-eye"></i> Visualizar Funcionario
	</div>
	<div class="card-body">
		<p><strong class="text-info">Cód: </strong>{{ $funcionario->id }}<hr/></p>
		<p><strong class="text-info">Nome: </strong>{{ $funcionario->nome }}<hr/></p>
		<p><strong class="text-info">Sobrenome: </strong>{{ $funcionario->nome }}<hr/></p>
		<p><strong class="text-info">CPF: </strong>{{ $funcionario->cpf }}<hr/></p>
		<p><strong class="text-info">Logradouro: </strong>{{ $funcionario->logradouro }}<hr/></p>
		<p><strong class="text-info">Número: </strong>{{ $funcionario->numero }}<hr/></p>
		<p><strong class="text-info">Bairro: </strong>{{ $funcionario->bairro }}<hr/></p>
		<p><strong class="text-info">Cidade: </strong>{{ $funcionario->cidade }}<hr/></p>
		<p><strong class="text-info">CEP: </strong>{{ $funcionario->cep }}<hr/></p>
		<p><strong class="text-info">UF: </strong>{{ $funcionario->uf }}<hr/></p>
		<p><strong class="text-info">Nº Filhos: </strong>{{ $funcionario->filhos }}<hr/></p>
		<p><strong class="text-info">Data de Admissão: </strong>{{ $funcionario->admissao }}<hr/></p>
		<p><strong class="text-info">Data de Demissão: </strong>{{ $funcionario->admissao }}<hr/></p>
		<p>
			<strong class="text-info">Situação: </strong>
			@if($funcionario->situacao == OfSystem\Funcionario::ATIVO)
    			<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i></span>
    		@else
    			<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i></span>	
    		@endif
		</p>
		<p><strong class="text-info">Criado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $funcionario->created_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $funcionario->created_at)->format('d/m/Y H:i:s') : '' }}<hr/></p>
		<p><strong class="text-info">Alterado Em: </strong>{{ \DateTime::createFromFormat('Y-m-d H:i:s', $funcionario->updated_at)? \DateTime::createFromFormat('Y-m-d H:i:s', $funcionario->updated_at)->format('d/m/Y H:i:s') : '' }}</p>
	</div>
	<div class="card-footer">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ route('funcionario.store') }}" class="btn btn-success btn-block" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('funcionario.edit', ['id'=>$funcionario->id]) }}" class="btn btn-warning btn-block" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i> Editar</a>
			</div>
			<div class="col-md-4">
				<a href="{{ route('funcionario.delete', ['id'=>$funcionario->id]) }}" class="btn btn-danger btn-block" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i> Deletar</a>
			</div>
		</div>
	</div>
</div>
@endsection