<nav class="navbar" id="navbar">
    <div class="navbar__wrapper">
        <a href="/" class="navbar__brand">Hadi Nurhidayat</a>
        <div class="navbar__menu" id="navbarMenu">
            <a href="{{ route('Home') }}"
                class="navbar__link {{ request()->routeIs('Home') ? 'navbar__link-active' : '' }}">Home</a>
            <a href="{{ route('About') }}"
                class="navbar__link {{ request()->routeIs('About') ? 'navbar__link-active' : '' }}">About</a>
            <a href="" class="navbar__link">Portfolio</a>
            <a href="" class="navbar__link">Blog</a>
        </div>
        <a href="" class="navbar__resume">My Resume</a>
        <button class="navbar__mobile-menu" id="mobile_menu">
            <img src="{{ asset('assets/icons/menu.svg') }}" alt="menu">
        </button>
    </div>

    {{-- offcanvas --}}
    <div class="offcanvas offcanvas__close" id="offcanvas">
        <div class="offcanvas__wrapper">
            <button class="offcanvas__btn-close" id="offcanvas_btn_close">
                <img src="{{ asset('assets/icons/close.svg') }}" alt="close">
            </button>
            <div class="flex flex-col h-full items-center justify-center">
                <ul class="offcanvas__menu">
                    <li class="offcanvas__menu-link {{ request()->routeIs('Home') ? 'offcanvas__menu-link-active' : '' }}"><a href="{{ route('Home') }}">Home</a></li>
                    <li class="offcanvas__menu-link {{ request()->routeIs('About') ? 'offcanvas__menu-link-active' : '' }}"><a href="{{ route('About') }}">About</a></li>
                    <li class="offcanvas__menu-link"><a href="">Portfolio</a></li>
                    <li class="offcanvas__menu-link"><a href="">Blog</a></li>
                    <li class="offcanvas__menu-resume"><a href="">My Resume</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
