@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Cargos</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Cargos
	</div>
	<div class="card-body">
		<table class="table table-bordered table-sm table-striped table-dark" id="tabela-cargos" width="100%" cellspacing="0">
			<thead class="thead-dark">
				<tr>
					<th colspan="3">
						<a href="{{ route('cargo.create') }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
					</th>
				</tr>            
				<tr>
					<th width="10%" class="text-center text-white">Cód</th>
					<th width="65%" class="text-center text-white">Nome da Cargo</th>
					<th width="5%" class="text-center text-white">Sit</th>
					<th width="15%" class="text-center text-white">Ações</th>
				</tr>
			</thead>	
			<tbody>
    			@forelse($cargos as $cargo)
    				<tr>
    					<td align="center" class="align-middle">{{ $cargo->id }}</td>
    					<td class="align-middle">{{ $cargo->cargo }}</td>
    					<td align="center" class="align-middle">
                    		@if($cargo->situacao == OfSystem\Cargo::ATIVO)
                    			<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i></span>
                    		@else
                    			<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i></span>	
                    		@endif		
                    	</td>
    					<td align="center" class="align-middle">
                    		<div class="btn-group" role="group">
                            	<a href="{{ route('cargo.show', ['id'=>$cargo->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('cargo.edit', ['id'=>$cargo->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('cargo.delete', ['id'=>$cargo->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
                            </div>		
                    	</td>
    				</tr>
    			@empty
    				<tr><td colspan="6"><h4 class="text-primary text-center">Sem Registros</h4></td></tr>
    			@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3" class="align-middle">
						{{ $cargos->links('vendor.pagination.bootstrap-4') }}						
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