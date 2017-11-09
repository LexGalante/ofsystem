<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>OfSystem</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Core CSS RTL-->
        <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <!-- CSS TEMPLATE PRINCIPAL -->
        <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sb-admin-rtl.css') }}" rel="stylesheet">
        <!-- PLUGINS CSS -->
        <link href="{{ asset('plugins/morris/css/morris.css') }}" rel="stylesheet">
        <!-- Fontes Customizadas -->
        <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS da Aplicação -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                    	<img alt="" src="{{ asset('img/logo25.png') }}">
                    </a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensagens</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Configurações</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Atendimentos</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#os"><i class="fa fa-fw fa-arrows-v"></i> OS <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="os" class="collapse">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-plus"></i> Nova OS</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-list"></i> Lista OS</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Relatório</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Cadastros <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-users"></i> Clientes</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-users"></i> Colaboradores</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                        </li>
                        <li>
                            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                        </li>
                        <li>
                            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                        </li>
                        <li class="active">
                            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
    
            <div id="page-wrapper">
                <div class="container-fluid">
    				@yield('content')
                </div>
            </div>
        </div>
        <!-- /#wrapper -->
    
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('plugins/morris/js/raphael.min.js') }}"></script>
        <script src="{{ asset('plugins/morris/js/morris.min.js') }}"></script>
        <script src="{{ asset('plugins/morris/js/morris-data.js') }}"></script>
        <!-- JS da Aplicação -->
    	<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
