<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Wayki - Login</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset("css/AdminLTE.min.css") }}">
        <!-- iCheck -->


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>AdminTienda</b>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Iniciar su sessi&oacute;n</p>
                <form action="{{ route('login-admin') }}" method="post" id="formulario-acceso" style="padding-bottom: 15px;">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" value="">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Constrase&ntilde;a" value="">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" id="boton-ingresar">Ingresar</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <div id="form-errors">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible">
                            <h4><i class="icon fa fa-ban"></i> Errores</h4>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>

        <!-- jQuery 2.1.4 -->
        <script src="{{ asset("plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
        <!-- iCheck -->
        <script src="{{ asset("plugins/iCheck/icheck.min.js") }}"></script>

    </body>
</html>