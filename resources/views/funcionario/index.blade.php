@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Funcionarios</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Funcionarios
	</div>
	<div class="card-body">
		<table class="table table-bordered table-sm table-striped table-dark" id="tabela-funcionarios" width="100%" cellspacing="0">
			<thead class="thead-dark">
				<tr>
					<th colspan="10">
						<a href="{{ route('funcionario.create') }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
					</th>
				</tr>            
				<tr>
					<th width="10%" class="text-center text-white">Cód</th>
					<th width="10%" class="text-center text-white">Cargo</th>
					<th width="10%" class="text-center text-white">Nome</th>
					<th width="15%" class="text-center text-white">Sobrenome</th>
					<th width="10%" class="text-center text-white">CPF</th>
					<th width="10%" class="text-center text-white">Admissão</th>
					<th width="10%" class="text-center text-white">Demissão</th>
					<th width="10%" class="text-center text-white">Salário</th>
					<th width="5%" class="text-center text-white">Sit</th>
					<th width="15%" class="text-center text-white">Ações</th>
				</tr>
			</thead>	
			<tbody>
    			@forelse($funcionarios as $funcionario)
    				<tr>
    					<td align="center" class="align-middle">{{ $funcionario->id }}</td>
    					<td class="align-middle">{{ $funcionario->cargo->cargo }}</td>
    					<td class="align-middle">{{ $funcionario->nome }}</td>
    					<td class="align-middle">{{ $funcionario->sobrenome }}</td>
    					<td align="center" class="align-middle">{{ $funcionario->cpf }}</td>
    					<td align="center" class="align-middle">{{ OfSystem\Util\Cast::dateMaskFrontend($funcionario->admissao) }}</td>
    					<td align="center" class="align-middle">{{ OfSystem\Util\Cast::dateMaskFrontend($funcionario->demissao) }}</td>
    					<td align="left" class="align-middle">{{ OfSystem\Util\Cast::moneyMaskFrontEnd($funcionario->salario) }}</td>
    					<td align="center" class="align-middle">
                    		@if($funcionario->situacao == OfSystem\Funcionario::ATIVO)
                    			<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i></span>
                    		@else
                    			<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i></span>	
                    		@endif		
                    	</td>
    					<td align="center" class="align-middle">
                    		<div class="btn-group" role="group">
                            	<a href="{{ route('funcionario.show', ['id'=>$funcionario->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('funcionario.edit', ['id'=>$funcionario->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('funcionario.delete', ['id'=>$funcionario->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
                            </div>		
                    	</td>
    				</tr>
    			@empty
    				<tr><td colspan="10"><h4 class="text-primary text-center">Sem Registros</h4></td></tr>
    			@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="9" class="align-middle">
						{{ $funcionarios->links('vendor.pagination.bootstrap-4') }}						
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="card-footer small text-muted">
		Atualizado em: {{ date("d/m/Y H:i:s") }}
	</div>
</div>
@endsection