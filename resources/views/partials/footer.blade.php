<footer>
    <div class="footer-links">
        <div class="container d-flex">
            <div class="row">
                <div class="col">
                    <div>
                        <h5>DC COMICS</h5>
                        <ul class="link">
                            @foreach ($links as $link)
                                <li><a href="{{ $link['href'] }}">{{ $link['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h5>SHOP</h5>
                        <ul>
                            <li>
                                <a href="">Shop DC</a>
                            </li>
                            <li>
                                <a href="">Shop DC Collectibles</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h5>DC</h5>
                    <ul>
                        <li><a href="">Terms Of Use</a> </li>
                        <li><a href="">Privacy policy (New)</a> </li>
                        <li><a href=""> Ad Choices</a></li>
                        <li><a href="">Advertising</a> </li>
                        <li><a href="">Jobs</a> </li>
                        <li><a href="">Subscriptions</a> </li>
                        <li><a href="">Talent Workshops</a> </li>
                        <li><a href="">CPSC Certificates</a></li>
                        <li><a href="">Ratings</a> </li>
                        <li><a href="">Shop Help</a> </li>
                        <li><a href="">Contacts Us</a> </li>
                    </ul>
                </div>
                <div class="col">
                    <h5>SITES</h5>
                    <ul>
                        <li><a href="">DC</a> </li>
                        <li><a href="">MAD Magazine</a> </li>
                        <li><a href="">DC Kids</a> </li>
                        <li><a href="">DC Universe</a> </li>
                        <li><a href="">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="footer-social">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="button">
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="social-links">
                <h4>FOLLOW US</h4>
                <ul>
                    <li>
                        <a href="/facebook">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook icona">
                        </a>
                    </li>
                    <li>
                        <a href="/twitter">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="/youtube">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="/pinterest">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="/periscope">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
