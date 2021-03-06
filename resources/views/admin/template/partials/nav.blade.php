<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="{{ asset('images/logo.jpg') }}" alt="Codigo Facilito" class="admin-logo-nav">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ route('admin.index') }}">Inicio <span class="sr-only">(current)</span></a>
          </li>
          @if(Auth::user()->admin())
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
          @endif
          <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
          <li><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
          <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
          <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('front.index') }}" target="_blank">Pagina Principal</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.auth.logout') }}"> Salir </a></li>
            </ul>
          </li>
        </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>