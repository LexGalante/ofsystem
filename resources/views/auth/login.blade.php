<!DOCTYPE html>
<html lang="pt-BR">
    <head>
      	<meta charset="utf-8">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      	<meta name="description" content="">
      	<meta name="author" content="ofsystem">
      	<title>Of System Acesso</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Core CSS RTL-->
        <!-- CSS TEMPLATE PRINCIPAL -->
        <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
        <!-- PLUGINS CSS -->
        <link href="{{ asset('plugins/morris/css/morris.css') }}" rel="stylesheet">
        <!-- Fontes Customizadas -->
        <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS da Aplicação -->
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    </head>    
    <body class="bg-dark">
      	<div class="container">
        	<div class="card card-login mx-auto mt-5">
          		<img src="{{ asset('img/logo100.png') }}" class="img-responsive" alt="Of System"/>
          			<div class="card-body">
            			<form accept-charset="UTF-8" role="form" method="POST" action="{{ route('login') }}" class="form-signin">
                        	{{ csrf_field() }}
              				<div class="form-group">
                				<label class="email">E-mail</label>
                                <input id="email" type="email" placeholder="Informe seu E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                	<span class="help-block">
                                    	<strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              				</div>
              				<div class="form-group">
              					<label class="email">Senha</label>
                				<input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              				</div>
              				<div class="text-center">
                  				<div class="form-group">
                    				<div class="checkbox">
                    					<label>
                        					<input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Lembrar-me</label>
                        				</label>	
                    				</div>
                  				</div>
              				</div>
              				<div class="text-center">
                                <button type="submit" class="btn btn-lg btn-success btn-block"><i class="fa fa-sing-in"></i> Acessar</button>
                            </div>
            			</form>
            			<div class="text-center">
              				<a class="d-block small" href="">Esqueci a senha?</a>
            			</div>
          		</div>
        	</div>
    	</div>
    </body>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</html>
