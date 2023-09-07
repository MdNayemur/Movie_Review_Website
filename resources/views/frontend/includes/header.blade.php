<body>
<header>
<nav class="navbar navbar-expand-lg" style="background-color: #264367;">
  <div class="container-fluid">
    <a class="fonta navbar-brand text-white fs-2" href="{{Route('frontshow')}}">MOVREVIEW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-4" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="fonta nav-link active text-white fs-5 navhov" aria-current="page" href="{{Route('frontshow')}}">Home</a>
        <a class="fonta nav-link text-white fs-5 navhov" href="#">Features</a>
        <a class="fonta nav-link text-white fs-5 navhov" href="#">All Movies</a>
        @if(Auth::check())
        <a class="fonta nav-link text-white fs-5" href="#"><img class="me-1" height="17px" src="{{asset('frontend')}}/user.png" alt="">{{ Auth::user()->name}}</a>
        
        <form method="POST" action="{{ route('logout') }}">
        @csrf                                     
        <a class="fonta nav-link text-white fs-5 navhov" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"> <img height="17px" src="{{asset('frontend')}}/logout.png" alt=""> Log Out</a>
        </form>

        @else
        <a class="fonta nav-link text-white fs-5 navhov" href="{{ route('ulogin') }}"> <img height="17px" src="{{asset('frontend')}}/enter.png" alt=""> login</a>

        @endif
      </div>
    </div>
  </div>
</nav>
</header>