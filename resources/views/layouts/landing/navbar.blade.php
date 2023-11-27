<nav class="container navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="col-6 borderLeft">
            <a class="navbar-brand" href="#">WDJK.ID</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse borderRight" id="navbarText">
            <ul class="me-auto"></ul>
            <ul class="navbar-nav mb-2 mb-lg-0 me-4">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>