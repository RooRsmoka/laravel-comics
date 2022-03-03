<footer>
    <div class="footer-up">
        <div class="container lists">
            <div class="footer-list">
                <div class="list">
                    <p class="list-title">dc comics</p> 
                    <ul>
                        <li><a href="{{ route('characters') }}">Characters</a></li>
                        <li><a href="{{ route('comics') }}">Comics</a></li>
                        <li><a href="{{ route('movies') }}">Movies</a></li>
                        <li><a href="{{ route('tv') }}">TV</a></li>
                        <li><a href="{{ route('games') }}">Games</a></li>
                        <li><a href="{{ route('videos') }}">Videos</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                    </ul>
                </div>
                <div class="list">
                    <p class="list-title">shop</p> 
                    <ul>
                        <li><a href="{{ route('shop') }}">Shop DC</a></li>
                        <li><a href="{{ route('collectibles') }}">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="list">
                    <p class="list-title">dc</p> 
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Rating</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="list">
                    <p class="list-title">sites</p> 
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-logo">
                <img src="{{ asset('img/dc-logo-bg.png') }}">
            </div>
        </div>
    </div>
    <div class="footer-down">
        <div class="container contact">
            <div class="sign-up-btn">
                sign-up now!
            </div>
            <div class="social">
                <p>follow us</p>
                <a href="">
                    <img src="{{ asset('img/footer-facebook.png') }}" alt="Facebook">
                </a>
                <a href="">
                    <img src="{{ asset('img/footer-twitter.png') }}" alt="Twitter">
                </a>
                <a href="">
                    <img src="{{ asset('img/footer-youtube.png') }}" alt="Youtube">
                </a>
                <a href="">
                    <img src="{{ asset('img/footer-pinterest.png') }}" alt="Pinterest">
                </a>
                <a href="">
                    <img src="{{ asset('img/footer-periscope.png') }}" alt="Periscope">
                </a>
            </div>
        </div>
    </div>
</footer>