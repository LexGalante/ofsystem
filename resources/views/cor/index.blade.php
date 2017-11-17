@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Cores</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Cores
	</div>
	<div class="card-body">
		<table class="table table-bordered" id="tabela-cores" width="100%" cellspacing="0">
			<thead>
				<tr class="bg-info">
					<th colspan="3">
						<a href="{{ route('cor.store') }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
					</th>
				</tr>            
				<tr class="bg-info">
					<th width="10%" class="text-center text-white">Cód</th>
					<th width="65%" class="text-center text-white">Nome da Cor</th>
					<th width="20%" class="text-center text-white">Ações</th>
				</tr>
			</thead>	
			<tbody>
    			@forelse($cores as $cor)
    				<tr>
    					<td align="center">{{ $cor->id }}</td>
    					<td>{{ $cor->cor }}</td>
    					<td align="center">
                    		<div class="btn-group" role="group">
                            	<a href="{{ route('cor.show', ['id'=>$cor->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('cor.update', ['id'=>$cor->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('cor.delete', ['id'=>$cor->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
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
						{{ $cores->links('vendor.pagination.bootstrap-4') }}						
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