<div class="Navbar">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white fw-bold ms-0" href="{{route('public.home')}}">Digital Junction</a>

      <!-- Toggle button for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('public.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('allproducts')}}">Shop All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('category.index')}}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('contact.index')}}">Contact us</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link text-white"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg></a>
          </li>
          <li class="nav-item">
            <a href="{{route('auth.login')}}" class="nav-link text-white">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{route('auth.register')}}" class="nav-link text-white">Register</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</div>
