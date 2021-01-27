<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logo-m.png')}}" data-src="{{ asset('images/logo-m.png')}}"
                class="lazyload"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <ul class="menu-bars">
                    <li><span></span></li>
                    <li><span></span></li>
                    <li><span></span></li>
                </ul>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('photo.index')}}">MyAlbums</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#"> Movies Demos</a>
                </li> --}}
                @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        {{-- {{$id = Hash::make(Auth::id());}} --}}
                        <a href="{{route('user.show', Auth::id())}}" class="nav-link">Profile</a>
                    </li>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                        </li>
                    </ul>
                @else
                    <li class="nav-item">
                        <button class="btn btn-gradiant">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </button>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <button class="btn btn-gradiant">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </button>
                    </li>
                @endif
                @endauth
                </div>
            @endif
            </ul>
        </div>
    </div>
</nav>