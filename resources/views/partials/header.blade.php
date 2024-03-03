<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0">MonJaTir</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fas fa-user-circle"></i>
                        {{ auth()->user()->name }}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('dashboard') }}" class="dropdown-item"><i class="fas fa-table"></i> Dashboard</a>
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> logout</a>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link"><i class="fas fa-sign-in-alt"></i> Login</a>
            @endauth
        </div>
    </div>
</nav>
