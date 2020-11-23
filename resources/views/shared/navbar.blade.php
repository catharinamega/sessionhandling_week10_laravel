<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background: black;">
    @if(!Session::has('login'))
    <a class="navbar-brand" href="/">ISB</a>
    @else
    <a class="navbar-brand" href="/index2">ISB</a>
    @endif
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index2">User Welcome</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
            @if(!Session::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
            </li>
            @endif

            @if(!Session::has('login'))
            <li class="nav-item">
                <a class="nav-link btn btn-warning" href="register">Register</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
