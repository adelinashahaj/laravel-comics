<footer>

    <section class="call_to_action  py-5">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col d-flex align-items-center " >
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                        <h6>DIGITAL COMICS</h6>
                    </a>
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                        <h6>DC MERCHANDISE</h6>
                    </a>
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                        <h6>SUBSCRIPTION</h6>
                    </a>
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                        <h6>COMIC SHOP LOCATOR</h6>
                    </a>
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                        <h6>DC POWER VISA</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-container">
        <div class="footer-nav">
            <ul>
                <li><h3>DC COMICS</h3></li>

        
                    @foreach ($navLinks as $navLink)
                    <li class="m-3 ">
                     <a  href="{{route($navLink['route'])}}"
                     target="{{$navLink['target']}}"
                     class="{{(Route::currentRouteName() == $navLink['route']) ?'active':''}}"
                     class="nav-link">{{$navLink['label']}}</a>
                 </li>
                    @endforeach



                <li><h3>SHOP</h3></li>
                <li> <a href="#"> Shop DC </a></li>
                <li> <a href="#"> Shop DC Collectibles </a></li>
            </ul>
            <ul>
                <li><h3>DC</h3></li>
                <li> <a href="#"> Terms of Use </a></li>
                <li> <a href="#"> Privacy Policy </a></li>
                <li> <a href="#"> Ad Choices </a></li>
                <li> <a href="#"> Advertising </a></li>
                <li> <a href="#"> Jobs </a></li>
                <li> <a href="#"> Subscriptions </a></li>
                <li> <a href="#"> Talent Workshops </a></li>
                <li> <a href="#"> CPSC Certificates </a></li>
                <li> <a href="#"> Ratings </a></li>
                <li> <a href="#"> Shop Help </a></li>
                <li> <a href="#"> Contact Us </a></li>
            </ul>
            <ul>
                <li><h3>SITES</h3></li>
                <li> <a href="#"> DC </a></li>
                <li> <a href="#"> MAD Magazine </a></li>
                <li> <a href="#"> DC Kid </a></li>
                <li> <a href="#"> DC Universe </a></li>
                <li> <a href="#"> DC Power Visa </a></li>
            </ul>
        </div>
        <div class="logo-img">

            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        </div>
    </div>

        <div class="footer_bot py-4">
            <div class="container d-flex justify-content-between">
                <div class="signup">
                    <a href="#" class="btn text-white border border-2 border-primary">SIGN-UP NOW!</a>
                </div>
                <div class="socials d-flex justify-content-around">
                    <h3>FOLLOW US</h3>
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">

                    <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">

                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">

                    <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">


                </div>
            </div>
        </div>

</footer>
