@extends("layouts.main")\n
                            @section("content")\n
                            <!-- Breadcrumbs-->\n
                            <ol class="breadcrumb">\n\r
                                <li class="breadcrumb-item"><a href="{{ route("home") }}"><i class="fa fa-home"></i> Inicio</a></li>\n\r
                                <li class="breadcrumb-item"><a href="{{ route("cliente.index") }}"><i class="fa fa-table"></i> Clientes</a></li>\n\r
                                <li class="breadcrumb-item active"><i class="fa fa-plus"></i> Novo</li>\n
                            </ol>\n
                            <div class="card mb-3">\n\r
                            	<!-- FORM -->\n\r
                            	<form method="post" action="{{ route("cliente.store") }}">\n\r\r
                            		{{ csrf_field() }}\n\r\r
                                	<div class="card-header">\n\r\r\r
                                		<i class="fa fa-plus"></i> Novo Cliente\n\r\r
                                	</div>\n\r\r
                                	<div class="card-body">\n
                            \n\r\r
                                	</div>\n\r\r
                                	<div class="card-footer">\n\r\r\r
                                		<button type="submit" id="btn-submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Salvar</button>\n\r\r
                                	</div>\n\r
                            	</form>\n\r
                            	<!-- /FORM -->\n\r
                            	<!-- JS do form -->\n\r
                            	<script src="{{ asset("js/cliente/cliente.js") }}"></script>\n
                            </div>\n	
                            @endsection