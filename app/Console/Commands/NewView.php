<?php

namespace OfSystem\Console\Commands;

use Illuminate\Console\Command;

class NewView extends Command
{
    public $contenIndex = "@extends('layouts.dash')\r\n@section('content')\r\n
                            <div class='container container-page'>\r\n
                                <ol class='breadcrumb'>\r\n
                                    <li><i class='fa fa-dashboard'></i>  <a href='route('home')'><i class='fa fa-home'></i></a></li>\r\n
                                    <li class='active'><i class='fa fa-table'></i> @@@</li>\r\n
                                </ol>\r\n
                                <div class='panel panel-default'>\r\n
                                    <div class='panel-heading'><i class='fa fa-list'></i> @@@</div>\r\n
                                    <div class='panel-body'>\r\n  
                                        <div class='table-responsive'>\r\n
                                            <table class='table table-bordered table-hover'>\r\n
                                                <thead>\r\n
                                                    <tr>\r\n
                                                        <th>#</th>\r\n
                                                    </tr>\r\n
                                                </thead>\r\n
                                                <tbody>\r\n
                                                    <tr>\r\n
                                                        <td>#</td>\r\n
                                                    </tr>\r\n                                                    
                                                </tbody>\r\n
                                            </table>\r\n
                                        </div>\r\n
                                    </div>\r\n
                                </div>\r\n
                            </div>\r\n
                           @endsection";
    
    public $contentForm = "@extends('layouts.dash')\r\n
                             @section('content')\r\n
                                <div class='container container-page'>\r\n
                                    <ol class='breadcrumb'>\r\n
                                        <li><i class='fa fa-dashboard'></i>  <a href='route('home')'><i class='fa fa-home'></i></a></li>\r\n
                                        <li class='active'><i class='fa fa-table'></i> @@@</li>\r\n
                                    </ol>\r\n
                                    <div class='panel panel-default'>\r\n
                                        <div class='panel-heading'><i class='fa fa-list'></i> @@@</div>\r\n
                                        <div class='panel-body'>\r\n
                                            <form method='POST' action='{{ route('@@@') }}'>

                                            </form>    
                                        </div>\r\n
                                    </div>\r\n
                                </div>\r\n
                             @endsection";
    
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
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/index.blade.php', $this->contenIndex);
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/create.blade.php', $this->contentForm);
            file_put_contents(resource_path('views/'.$this->argument('view_name')).'/update.blade.php', $this->contentForm);
        }
        else{
            $this->error('Está view ja existe');
        }
    }
}
