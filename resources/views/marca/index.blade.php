@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Marcas</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Marcas
	</div>
	<div class="card-body">
		<table class="table table-bordered table-sm table-striped table-dark" id="tabela-cores" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th colspan="4">
						<a href="{{ route('marca.create') }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
					</th>
				</tr>            
				<tr>
					<th width="10%" class="text-center text-white">Cód</th>
					<th width="40%" class="text-center text-white">Nome</th>
					<th width="30%" class="text-center text-white">Origem</th>
					<th width="20%" class="text-center text-white">Ações</th>
				</tr>
			</thead>	
			<tbody>
    			@forelse($marcas as $marca)
    				<tr>
    					<td align="center" class="align-middle">{{ $marca->id }}</td>
    					<td class="align-middle">{{ $marca->marca }}</td>
    					<td class="align-middle">
    						@if($marca->origem == 'N')
    							NACIONAL
    						@elseif($marca->origem == 'I')
    							IMPORTADO
    						@else
    							NACIONAL/IMPORTADO
    						@endif    					
    					</td>
    					<td align="center" class="align-middle">
                    		<div class="btn-group" role="group">
                            	<a href="{{ route('marca.show', ['id'=>$marca->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('marca.edit', ['id'=>$marca->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('marca.delete', ['id'=>$marca->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
                            </div>		
                    	</td>
    				</tr>
    			@empty
    				<tr><td colspan="6"><h4 class="text-danger text-center">Sem Registros</h4></td></tr>
    			@endforelse
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">
						{{ $marcas->links('vendor.pagination.bootstrap-4') }}						
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