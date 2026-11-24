<nav class="navbar navbar-expand-lg glass-nav sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Articoli</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                </li>
                @endguest

                @auth

                <li class="nav-item">
                    <a class="nav-link" href="#"> Ciao, {{ Auth::user()->name }}</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.create') }}">Crea articolo</a>
                </li>

                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link">Logout</button>
                    </form>
                </li>
                @endauth              
            </ul>
        </div>
    </div>
</nav>