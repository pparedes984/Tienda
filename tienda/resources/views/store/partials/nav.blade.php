<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('home')}}">INICIO</a>
    </div>

  <div class="collapse navbar-collapse" id="navbarColor02">
  <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>
      </li>
      <li>
        <a href="#">Conócenos</a>
      </li>
      <li>
        <a href="#">Contacto</a>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-user"></i><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="">Iniciar Sesión</a> </li>
        </ul>
      </li>
    </ul>
</div> 
  </div>
</nav>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home')}}">TIENDA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Conócenos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      @include('store.partials.menu-user')
      
    </ul>
  </div>
</nav>

