<nav class="navbar navbar-expand-lg navbar-dark" style="background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
        <div class="container">
          <a class="navbar-brand mb-0 h1" href="/"><i class="fa fa-headphones" aria-hidden="true"></i> CHEAPTALK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="justify-content-center float-md-right" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
              </li>
              @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link text-white" href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-list-alt"></i> Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(App\Models\Category::all() as $c)
                        <li><a class="dropdown-item" href="/categories/{{$c->id}}">{{$c->category}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/logout">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </li>

              @else

              <li class="nav-item">
                <a class="nav-link text-white" href="/register"><i class="fa fa-registered" aria-hidden="true"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/login"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
              </li>

              @endif
            </ul>
          </div>
        </div>
      </nav>

