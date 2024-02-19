<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<header id="header">
    <!--  Brand Logo  -->
    <a class="nav-brand" href="{{route('index')}}">
        <img id="header-img" src="{{ asset('imgs/logo.png') }}" alt="More Pepper logo">
    </a>

    <!--  Toggle Menu for Mobile  -->

    <input type="checkbox" id="toggle-menu" role="button">
    <label for="toggle-menu" class="toggle-menu">Menu</label>

    <!--  Menus  -->
    <nav id="nav-bar" class="navbar">
        <ul class="menu">
            <li><a class="nav-link" href="{{route('index')}}/#featured">Servicios</a></li>
            <li><a class="nav-link" href="{{route('index')}}/#collections">¿Quiénes somos?</a></li>
            <li><a class="nav-link" href="{{route('index')}}/#about">Nuestros clientes</a></li>
        </ul>
    </nav>
</header>