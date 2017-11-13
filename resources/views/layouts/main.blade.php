<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="{{ asset('plugins/data-tables/css/data-tables.css') }}" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
        <!-- CSS da Aplicação -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>    
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="{{ route('home') }}">
            	<img alt="" src="{{ asset('img/logo25.png') }}">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            	<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Atendimento">
                  		<a class="nav-link" href="index.html">
                    		<i class="fa fa-fw fa-dashboard"></i>
                    		<span class="nav-link-text">Atendimento</span>
                  		</a>
                	</li>
                	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        	<i class="fa fa-fw fa-wrench"></i>
                        	<span class="nav-link-text">OS</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                        	<li><a href="navbar.html"><i class="fa fa-plus"></i> Nova</a></li>
                        	<li><a href="cards.html"><i class="fa fa-search"></i> Consultar</a></li>
                        	<li><a href="cards.html"><i class="fa fa-file-pdf-o"></i> Relatório</a></li>
                        </ul>
                    </li>
                	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                        	<i class="fa fa-fw fa-sitemap"></i>
                        	<span class="nav-link-text"> Administração</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                        	<li>
                          		<a class="nav-link-collapse collapsed" data-toggle="collapse" href="#nav-link-clientes">Clientes</a>
                          		<ul class="sidenav-third-level collapse" id="nav-link-clientes">
                            		<li><a href="{{ route('cliente.store') }}"><i class="fa fa-plus"></i> Novo</a></li>
                            		<li><a href="{{ route('cliente.index') }}"><i class="fa fa-search"></i> Consultar</a></li>
                          		</ul>
                        	</li>
                        	<li>
                          		<a class="nav-link-collapse collapsed" data-toggle="collapse" href="#nav-link-funcionarios">Funcionários</a>
                          		<ul class="sidenav-third-level collapse" id="nav-link-funcionarios">
                            		<li><a href="#"><i class="fa fa-plus"></i> Novo</a></li>
                            		<li><a href="#"><i class="fa fa-search"></i> Consultar</a></li>
                          		</ul>
                        	</li>
                        </ul>
                	</li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                  <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Link</span>
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Pesquisar...">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                  </form>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i></a>
                </li>
              </ul>
            </div>
      	</nav>
      	<div class="content-wrapper">
      		<div class="container-fluid">
          		@if (Session::has('alert'))
                	<div class="alert alert-{{ Session::get('alert')['class'] }} alert-dismissible fade show" role="alert">
                		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                		<strong>{{ Session::get('alert')['message'] }}</strong>    
                	</div>
            	@endif
          		@yield('content')
          	</div>	
            <footer class="sticky-footer">
            	<div class="container">
                	<div class="text-center"><small>Of System {{ date('Y') }} ©</small></div>
              	</div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog" role="document">
                	<div class="modal-content">
                  		<div class="modal-header">
                    		<h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                    		<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  		</div>
                  		<div class="modal-footer">
                    		<button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    		<a class="btn btn-success" href="{{ route('user.logout') }}"><i class="fa fa-check"></i></a>
                  		</div>
              		</div>
             	</div>
            </div>
      	</div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('plugins/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Page level plugin JavaScript-->
        <script src="{{ asset('plugins/data-tables/js/jquery-data-tables.js') }}"></script>
        <script src="{{ asset('plugins/data-tables/js/data-tables.js') }}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin.min.js') }}"></script>
        <!-- Custom scripts for this page-->
        <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-charts.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>

