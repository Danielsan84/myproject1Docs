<nav class="navbar">
    <div class="navbar-logo">
        <a href="">
            <i class="fas fa-smile"></i></a>
    </div>
    <ul class="nav-links">
      <li><a href="{{ route('homepage') }}">HOME</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">Dropdown</a>
        <div class="dropdown-content">
          <a href="{{ route('html5') }}">Html5</a>
          <a href="{{ route('css3') }}">Css3</a>
          <a href="#">Dropdown Link 3</a>
        </div>
      </li>
      @auth
      <li class="dropdown">
        <a href="#" class="dropbtn">Dropdown</a>
        <div class="dropdown-content">
          <a href="#">Benvenuto {{ Auth::user()->name }}</a>
          <ul>
            <li><a href="">Profilo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form method="post" action="{{ route('logout') }}" id="form-logout" class="d-none">
            @csrf
          </form>
          </ul>
        </li>
         @endauth
         @guest
             <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navabrDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Benvenuto ospite</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="{{ route('register') }}">Registrati</a></li>
              <li><a href="{{ route('login') }}">Accedi</a></li>
            </ul></li>
         @endguest
         
          <a href="#">Dropdown Link 3</a>
        </div>
   
          

    </ul>
    <div class="search">
      <input type="text" placeholder="Cerca...">
      <button type="submit">Cerca</button>
    </div>
    <div class="theme-buttons">
        <button id="black-theme">Black Theme</button>
        <button id="dark-theme">Dark Theme</button>
        <button id="green-theme">Green Theme</button>
        <button id="blue-theme">Blue Theme</button>
    </div>

    {{-- <audio src="{{ asset('media/rain-in-the-forest.wav') }}" autoplay loop></audio> --}}
    {{-- <audio src="media/rain-in-the-forest.wav" controls></audio> --}}
    <audio id="rainSound" loop>
      <source src="{{ asset('media/rain-in-the-forest.wav') }}" type="audio/wav">
      Il tuo browser non supporta l'elemento audio.
    </audio>
    
    <button id="toggleRainSound">Attiva/Disattiva suono pioggia</button>
    
    

    

  </nav>
  