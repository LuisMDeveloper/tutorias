<!DOCTYPE html>
<html>
    <head>
      <title>
      @section('title')
      Tutorias
      @show
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->

      {{ HTML::style('css/bootstrap.min.css', array( 'media' => 'screen' )) }}

      {{ HTML::style('css/custom.css', array( 'media' => 'screen' )) }}

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Tutorias</a>
          </div>

          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <!-- <li>{{ HTML::link('admin', 'Administrar') }}</li> -->
              <li>{{ HTML::link('admin', 'Panel de administración') }}</li>
              <li>{{ HTML::link('formatos', 'Formatos')}}</li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrarse <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>{{ HTML::link('alumno/create', 'Registro para Alumnos') }}</li>
                  <li>{{ HTML::link('register', 'Registro para Docentes') }}</li>
                </ul>
              </li>
              <li>{{ HTML::link('login', 'Entrar') }}</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>{{ HTML::link('logout', 'Salir', array( 'class' => 'navbar-right')) }}</li>
              
            </ul>
          </div>
      </nav>

      <div class="container">
        @yield('content')
      </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      {{ HTML::script('js/jquery.min.js') }}
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      {{ HTML::script('js/bootstrap.min.js') }}

      {{ HTML::script('js/scroll.js') }}
    </body>
</html>