<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Of System</title>
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
			<div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row-fluid user-row">
                                <img src="{{ asset('img/logo100.png') }}" class="img-responsive" alt="Of System"/>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" method="POST" action="{{ route('login') }}" class="form-signin">
                            	{{ csrf_field() }}
                                <fieldset>
                                    <label class="email"></label>
                                    <input id="email" type="email" placeholder="Informe seu E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <br>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-63">
                                            <a class="btn btn-primary" href="{{ route('password.request') }}">
                                                Esqueceu a Senha?
                                            </a>
                                        </div>
                                    </br>
                                    <button type="submit" class="btn btn-lg btn-success btn-block"><i class="fa fa-sing-in"></i> Acessar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>	
		<!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- JS da Aplicação -->
    	<script src="{{ asset('js/login.js') }}"></script>
	</body>
</html>