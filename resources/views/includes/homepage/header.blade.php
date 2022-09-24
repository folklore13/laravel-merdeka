<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-sm-row">
                @foreach ($navbars as $navbar)
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ $navbar }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <button class="btn btn-primary">Purchase</button>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Welcome to Our Fanpage!</h1>
            <p class="lead">Feel free to take a look around.</p>
        </div>
    </div>
</header>