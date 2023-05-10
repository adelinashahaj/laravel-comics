<footer>
    <div class="container">
        <div class="footer_top">
            <div class="container py-4 d-flex justify-content-between">
                <div class="row gx-5">
                    <div class="col" v-for="link in menuLinks">
                        <h4>{{ link.title }}</h4>
                        <ul class="list-unstyled">
                            <li v-for="item in link.list"><a href="#">{{ item }}</a></li>
                        </ul>
                    </div>
                </div>
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
    </div>
</footer>
