<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employers.index') }}">Employers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Training</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Packeges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('login_register/login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
            @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="#">My jobs</a>
                </li>
            @endif
        </ul>
    </div>
</nav>