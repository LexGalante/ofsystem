@extends('layouts.main')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item active">Clientes</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Clientes
	</div>
	<div class="card-body">
		<table class="table table-bordered" id="tabela-clientes" width="100%" cellspacing="0">
            <thead>
                <tr class="bg-info">
                    <th class="text-center text-white">Nome</th>
                    <th class="text-center text-white">Sobrenome</th>
                    <th class="text-center text-white">Tipo</th>
                    <th class="text-center text-white">Veiculos</th>
                    <th width="10%" class="text-center text-white">Situação</th>
                    <th width="15%" class="text-center text-white">Ações</th>
                </tr>
            </thead>	
            <tbody>
            	@forelse($clientes as $cliente)
                	<tr>
                    	<td>
                    		{{ $cliente->nome }}
                    	</td>
                    	<td>
                    		{{ $cliente->sobrenome }}
                    	</td>
                    	<td>
                    		{{ ($cliente->tipo == OfSystem\Cliente::TIPO_FISICA)? 'FISICA' : 'JURIDICA' }}
                    	</td>
                    	<td>
                    			
                    	</td>
                    	<td align="center">
                    		@if($cliente->tipo == OfSystem\Cliente::CLIENTE_ATIVO)
                    			<span class="badge badge-success">ATIVO</span>
                    		@else
                    			<span class="badge badge-danger">INATIVO</span>	
                    		@endif		
                    	</td>
                    	<td align="center">
                    		<div class="btn-group" role="group" aria-label="Basic example">
                            	<a href="{{ route('cliente.show', ['id'=>$cliente->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('cliente.update', ['id'=>$cliente->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('cliente.destroy', ['id'=>$cliente->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
                            </div>		
                    	</td>
                    </tr>
                @empty
                <tr><td colspan="6"><h4 class="text-danger text-center">Sem Registros</h4></td></tr>                		    
            	@endforelse        
            </tbody>
            <tfoot>
                <tr>
                	<th colspan="6">
                		{{ $clientes->links() }}
                	</th>
                </tr>
            </tfoot>
		</table>
	</div>
	<div class="card-footer small text-muted">
		Atualizado em: {{ date('d/m/Y H:i:s') }}
	</div>
</div>
@endsection