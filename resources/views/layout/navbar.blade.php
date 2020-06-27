<div class="container-fluid bg-info">
  <nav class="container navbar navbar-expand-lg bg-info">
  <a class="navbar-brand text-white" href="{{url("/")}}">
    
    Online CarShop
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav float-right">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{url("/")}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Contact us</a>
      </li>
      
      @if(Auth::check())
      @if(Auth::user()->hasRole("Admin"))
      <li class="nav-item">
        <a class="nav-link text-white" href="{{url('admin/admin')}}">Admin</a>
      </li>
      @endif
      @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if(Auth::user())
            {{Auth::user()->name}}
          @else
            Member
           @endif
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          @if(Auth::check())
            <a class="dropdown-item " href="{{url('users/logout')}}">Logout</a>
          @else
            {{-- <a class="dropdown-item " href="{{url('/')}}">Login</a> --}}
            <a class="dropdown-item" href="{{url('users/register')}}">Register</a>
          @endif
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{url('car/show-cart')}}">
          <i class="fa fa-shopping-cart text-danger"></i>
          &nbsp;Cart&nbsp;<i class="fa fa-angle-right"></i>
          @if(session('items'))
            {{count(session('items'))}}
          @endif
        </a>
      </li>
    </ul>
    <!--form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form-->
  </div>
</nav>
</div>