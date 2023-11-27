<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">WDJK.ID</a>
        <div class="collapse navbar-collapse  justify-content-center" id="navbarTogglerDemo03">
            <form action="{{ route('dashboard.search') }}" method="GET" class="d-flex w-75" role="search">
                <input class="form-control me-2 fs-6" name="search" type="search" placeholder="Search....." aria-label="Search">
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>
        </div>
        <ul class="dropdown nav justify-content-end">
            <div class="btn-group">
                <button type="button" class="btn border-0 bg-transparent" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    {{ Auth::user()->name }} <i class="bi bi-person-circle"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a href="{{ route('profile.edit') }}" class="dropdown-item" type="button">Edit Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</nav>