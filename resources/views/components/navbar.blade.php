<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.create')}}">CREA PRODOTTI</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $category)
            <li><a class="dropdown-item" href="{{route('product.byCategory',compact('category'))}}">{{$category->name}}</a></li>
          @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>



      @auth 
          @if(Auth::user()->is_admin == true)
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">Amministrazione</a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn btn-secondary">Logout</button>
            </form>
          </li>
        @endauth
        @guest
          <li class="">
            <a class="btn-success btn" href="{{ route('register') }}">Registrati</a>
          </li>
          <li class="">
            <a class="btn-success btn" href="{{ route('login') }}">Accedi</a>
          </li>
        @endguest
      </ul>
    














    </div>
  </div>
</nav>
      