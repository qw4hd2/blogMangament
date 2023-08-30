<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo/hero-logo.png')}}" alt="" srcset="" class="img img-fluid img-hero-logo"></a>
        <p class="navBar-heading">AULAB</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link btn-registration">Register</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link btn-Login">Login</a>
                </li>
                @endguest

                @auth
                <form action="{{route('search.articles')}}" method="get" class="d-flex">
                    <input type="text" name="key"  class="form-control me-2" placeholder="search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
               
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('articles.create') }}" class="nav-link">Pubblica Articolo</a>
                </li>
                @if(Auth::user() && Auth::user()->is_revisor)
                <li>
                    <a href="{{route('revisor.dashboard')}}" class="nav-link">dashboard del revisore</a>
                </li>
                @endif
                @if(Auth::user() && Auth::user()->is_admin)
                <li>
                    <a href="{{route('admin.dashboard')}}" class="nav-link">dashboard del amministratore</a>
                </li>
                @endif
                @if(Auth::user() && Auth::user()->is_writer)
                <li class="nav-item">
                    <a href="{{route('articles.dashboard')}}" class="nav-link">Author</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                        Logout
                        <form method="POST" action="{{ route('logout') }}" style="display: none;" id="form-logout">
                            @csrf
                        </form>
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
