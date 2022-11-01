<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">EJEMPLO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li> -->
                @auth
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/products">products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="/logout" tabindex="-1">Logout</a>
                </li>


                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="/login" tabindex="-1">Login</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>