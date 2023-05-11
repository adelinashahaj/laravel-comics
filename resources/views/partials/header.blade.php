<header>

    <div class="container ">

        <nav>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">

            <ul class="navbar-links d-flex list-unstyled justify-content-center">
               @foreach ($navLinks as $navLink)
               <li class="m-3 ">
                <a  href="{{route($navLink['route'])}}"
                target="{{$navLink['target']}}"
                class="{{(Route::currentRouteName() == $navLink['route']) ?'active':''}}"
                class="nav-link">{{$navLink['label']}}</a>
            </li>
               @endforeach



            </ul>
        </nav>


    </div>


</header>
