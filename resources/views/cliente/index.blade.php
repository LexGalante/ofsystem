@extends('layouts.main')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-table"></i> Clientes</li>
</ol>
<!-- Content -->
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Clientes
	</div>
	<div class="card-body">
		<table class="table table-bordered table-sm table-striped table-dark" id="tabela-clientes" width="100%" cellspacing="0">
            <thead class="thead-dark">
            	<tr>
            		<th colspan="6">
            			<a href="{{ route('cliente.store') }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>
						<a href="{{ route('cliente.report') }}" class="btn btn-danger pull-right" data-toggle="tooltip" title="Relatório de Clientes"><i class="fa fa-file-pdf-o"></i> Relatório</a>
            		</th>
            	</tr>            
                <tr>
                    <th width="15%" class="text-center text-white">Nome</th>
                    <th width="25%" class="text-center text-white">Sobrenome</th>
                    <th width="5%" class="text-center text-white">Tipo</th>
                    <th class="text-center text-white">Endereço</th>
                    <th width="5%" class="text-center text-white">Sit</th>
                    <th width="15%" class="text-center text-white">Ações</th>
                </tr>
            </thead>	
            <tbody>
            	@forelse($clientes as $cliente)
                	<tr>
                    	<td class="align-middle">
                    		{{ $cliente->nome }}
                    	</td>
                    	<td class="align-middle">
                    		{{ $cliente->sobrenome }}
                    	</td>
                    	<td class="align-middle">
                    		{{ ($cliente->tipo == OfSystem\Cliente::TIPO_FISICA)? 'FISICA' : 'JURIDICA' }}
                    	</td>
                    	<td class="align-middle">
                    		{{ empty($cliente->logradouro)? 'NÃO DEFINIDO' : strtoupper($cliente->logradouro.', '.$cliente->numero) }}		
                    	</td>
                    	<td align="center" class="align-middle">
                    		@if($cliente->tipo == OfSystem\Cliente::ATIVO)
                    			<span class="badge badge-success"><i class="fa fa-thumbs-o-up"></i></span>
                    		@else
                    			<span class="badge badge-danger"><i class="fa fa-thumbs-o-down"></i></span>	
                    		@endif		
                    	</td>
                    	<td align="center" class="align-middle">
                    		<div class="btn-group" role="group" aria-label="Basic example">
                            	<a href="{{ route('cliente.show', ['id'=>$cliente->id]) }}" class="btn btn-info" data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></a>
                              	<a href="{{ route('cliente.update', ['id'=>$cliente->id]) }}" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
                              	<a href="{{ route('cliente.delete', ['id'=>$cliente->id]) }}" class="btn btn-danger" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash"></i></a>
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
                		{{ $clientes->links('vendor.pagination.bootstrap-4') }}
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