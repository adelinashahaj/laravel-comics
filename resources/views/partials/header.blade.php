<header>

    <div class="container ">

        <nav>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            <ul class="navbar-links d-flex list-unstyled justify-content-center">
                <li class="m-3 {{Route::currentRouteName() == 'home'?'bg-white':''}}">
                    <a  href="{{route('home')}}">Home</a>
                </li>
                <li class="m-3 {{Route::currentRouteName() == 'home'?'bg-white':''}}">
                    <a  href="{{route('comics')}}">Comics</a>
                </li>
                <li class="m-3 {{Route::currentRouteName() == 'home'?'bg-white':''}}">
                    <a  href="{{route('fans')}}">Fans</a>
                </li>

            </ul>
        </nav>


    </div>


</header>
