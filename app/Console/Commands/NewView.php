<?php

namespace OfSystem\Console\Commands;

use Illuminate\Console\Command;

class NewView extends Command
{
    public $contentIndex = '@extends("layouts.main")\n
                            @section("content")\n
                            <!-- Breadcrumbs-->\n
                            <ol class="breadcrumb">\n\r
                                <li class="breadcrumb-item"><a href="{{ route("home") }}"><i class="fa fa-home"></i> Inicio</a></li>\n\r
                                <li class="breadcrumb-item active"><i class="fa fa-table"></i> Clientes</li>\n
                            </ol>\n
                            <!-- Content -->\n
                            <div class="card mb-3">\n\r
                            	<div class="card-header">\n\r\r
                            		<i class="fa fa-table"></i> Clientes\n\r
                            	</div>\n\r
                            	<div class="card-body">\n\r\r
                            		<table class="table table-bordered" id="tabela-clientes" width="100%" cellspacing="0">\n\r\r\r
                            			<thead>\n\r\r\r\r
                            				<tr class="bg-info">\n\r\r\r\r\r
                            					<th colspan="6">\n\r\r\r\r\r\r
                            						<a href="{{ route("cliente.store") }}" class="btn btn-success" data-toggle="tooltip" title="Novo"><i class="fa fa-plus"></i> Novo</a>\n\r\r\r\r\r\r
                            						<a href="{{ route("cliente.store") }}" class="btn btn-danger pull-right" data-toggle="tooltip" title="Relatório de Clientes"><i class="fa fa-file-pdf-o"></i> Relatório</a>\n\r\r\r\r\r
                            					</th>\n\r\r\r\r
                            				</tr>\n\r\r\r\r            
                            				<tr class="bg-info">\n\r\r\r\r\r
                            					<th width="15%" class="text-center text-white">Ações</th>\n\r\r\r\r
                            				</tr>\n\r\r\r
                            			</thead>\n\r\r\r	
                            			<tbody>\n
                             \n\r\r\r   
                            			</tbody>\n\r\r\r
                            			<tfoot>\n\r\r\r\r
                            				<tr>\n\r\r\r\r\r
                            					<th>\n\r\r\r\r\r\r
                            						{{ $clientes->links() }}\n\r\r\r\r\r
                            					</th>\n\r\r\r\r
                            				</tr>\n\r\r\r
                            			</tfoot>\n\r\r
                            		</table>\n\r
                            	</div>\n\r
                            	<div class="card-footer small text-muted">\n\r\r
                            		Atualizado em: {{ date("d/m/Y H:i:s") }}\n\r
                            	</div>\n
                            </div>
                            @endsection';
    
    public $contentForm = '@extends("layouts.main")\n
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
                            @endsection';
    
    public $contentShow = '@extends("layouts.main")\n
                            @section("content")\n
                            <!-- Breadcrumbs-->\n
                            <ol class="breadcrumb">\r\n
                                <li class="breadcrumb-item"><a href="{{ route("home") }}"><i class="fa fa-home"></i> Inicio</a></li>\r\n
                                <li class="breadcrumb-item"><a href="{{ route("cor.index") }}"><i class="fa fa-table"></i> Cores</a></li>\r\n
                                <li class="breadcrumb-item active"><i class="fa fa-table"></i> Visualizar</li>\n
                            </ol>\n
                            <!-- Content -->\n
                            <div class="card mb-3">\r\n
                            	<div class="card-header">\r\r\n
                            		<i class="fa fa-eye"></i> @@@@\r\n
                            	</div>\r\n
                            	<div class="card-body">\n
                            \r\n		
                            	</div>\n
                            </div>\n
                            @endsection';
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para criar uma estrtura de view';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Cria a pasta e a estrutura da view
        if(!is_dir(resource_path('views/'.$this->argument('view_name')))){
            mkdir(resource_path('views/'.$this->argument('view_name')), 0777);
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/index.blade.php', $this->contentIndex);
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/create.blade.php', $this->contentForm);
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/show.blade.php', $this->contentShow);
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/update.blade.php', $this->contentForm);
        }
        else{
            $this->error('Está view ja existe');
        }
    }
}
