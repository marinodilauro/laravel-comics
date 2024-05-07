<header>

  <header id="header">

    <div id="header_top">
      <div class="container py-2">

        <!-- Header top -->
        <ul class="d-flex justify-content-end list-unstyled p-0 m-0 gap-3">

          <li><a class="me-1" href="">DC POWER&#8480; VISA</a><i class="fa-regular fa-registered"></i></li>

          <li>
            <a href="">ADDITIONAL DC SITES</a>
            <i class="fa-solid fa-caret-down"></i>
          </li>

        </ul>

      </div>
    </div>

    <!-- Header Navbar -->
    <div id="navbar" class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
      </div>

      <ul class="navbar d-flex list-unstyled oxanium-bold gap-5 p-0 m-0">
        <li><a href="{{route('characters')}}">CHARACTERS</a></li>
        <li><a href="{{route('comics')}}">COMICS</a></li>
        <li><a href="{{route('movies')}}">MOVIES</a></li>
        <li><a href="{{route('tv')}}">TV</a></li>
        <li><a href="{{route('games')}}">GAMES</a></li>
        <li><a href="{{route('collectibles')}}">COLLECTIBLES</a></li>
        <li><a href="{{route('videos')}}">VIDEOS</a></li>
        <li><a href="{{route('fans')}}">FANS</a></li>
        <li><a href="{{route('news')}}">NEWS</a></li>
        <li><a href="{{route('shop')}}">SHOP <i class="fa-solid fa-chevron-down fa-xs"></i> </a></li>
      </ul>

      <div class="search d-flex align-items-center px-4">
        <div class="search_bar rounded d-flex align-items-center">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="search" placeholder="Search">
        </div>
      </div>

    </div>

  </header>

</header>