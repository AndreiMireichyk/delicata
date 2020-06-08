<nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
    <div class="container">
        <a class="navbar-brand text-dark" href="{{route('home')}}">
            <img src="{{asset('/app/assets/img/logo.png')}}" alt="Delicata" style="height: 60px">
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i data-feather="menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-lg-5">
                <li class="nav-item {{ Route::currentRouteName() === 'home' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('home')}}">Проекты</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() === 'about' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() === 'pricing' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('pricing')}}">Услуги и цены</a>
                </li>
                <li class="nav-item  {{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
