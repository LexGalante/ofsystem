@extends("layouts.main")
@section("content")
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Veiculos</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Veiculos
	</div>
	<div class="card-body">
		<table class="table table-bordered table-sm table-striped table-dark" id="tabela-cores" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th colspan="8">
						<a href="{{ route('veiculo.store') }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
					</th>
				</tr>            
				<tr>
					<th width="5%" class="text-center text-white">Cód</th>
					<th width="20%" class="text-center text-white">Veiculo</th>
					<th width="10%" class="text-center text-white">Placa</th>
					<th width="20%" class="text-center text-white">Cliente</th>
					<th width="10%" class="text-center text-white">Marca</th>
					<th width="10%" class="text-center text-white">Cor</th>
					<th width="5%" class="text-center text-white">Sit</th>
					<th width="15%" class="text-center text-white">Ações</th>
				</tr>
			</thead>	
			<tbody>
    			@forelse($veiculos as $veiculo)
    				<tr>
    					<td align="center">{{ $veiculo->id }}</td>
    					<td>{{ $veiculo->nome }}</td>
    					<td>{{ $veiculo->placa }}</td>
    					<td>{{ $veiculo->cliente->nome }}</td>
    					<td>{{ $veiculo->marca->marca }}</td>
    					<td align="center">{{ $veiculo->cor->cor }}</td>
    					<td align="center">
    						@if($veiculo->situacao == OfSystem\Veiculo::ATIVO)
    							<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i></span>
    						@else
    							<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i></span>
    						@endif    					
    					</td>
    					<td align="center">
                    		<div class="btn-group" role="group">
                            	<a href="{{ route('veiculo.show', ['id'=>$veiculo->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('veiculo.update', ['id'=>$veiculo->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('veiculo.delete', ['id'=>$veiculo->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
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
						{{ $veiculos->links('vendor.pagination.bootstrap-4') }}						
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