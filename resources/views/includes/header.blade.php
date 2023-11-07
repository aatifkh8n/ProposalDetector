{{-- <nav class="navbar navbar-expand-lg navbar-dark p-4 bg-info">
    <a class="navbar-brand" href="{{URL::to('/')}}">ProposalDetector</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{URL::to('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/proposals')}}">Show All Proposals</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> --}}

<header class="masthead mb-auto">
  <div class="inner">
    <a href="{{URL::to('/')}}"><h3 class="masthead-brand text-light">ProposalDetector</h3></a>
    <nav class="nav nav-masthead justify-content-center">
      <a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="{{URL::to('/')}}">Home</a>
      <a class="nav-link {{request()->is('proposals*') ? 'active' : ''}}" href="{{URL::to('/proposals')}}">Proposals</a>
      @if (Session::get('login'))
      <a class="nav-link" href="{{URL::to('/logout')}}">Logout</a>  
      @else
        <a class="nav-link {{request()->is('login') || request()->is('register') ? 'active' : ''}}" href="{{URL::to('/login')}}">Login</a>  
      @endif
    </nav>
  </div>
</header>