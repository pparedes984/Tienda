<!--@if(Auth::check())
    <li>
        <a href="#" >
            <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
        </a>
        <ul roles="menu">
            <li><a href="{{ route('login') }}">Finalizar sesión</a></li> 
        </ul>
    </li>
@else
    <li>
        <a href="#" >
            <i class="fa fa-user"></i> <span class="caret"></span>
        </a>
        <ul roles="menu">
            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
        </ul>
    </li>
@endif-->

<!-- Authentication Links -->
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li >
                                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->user }} <span class="caret"></span>
                                </a>

                                <div aria-labelledby="navbarDropdown">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                
