<footer class="footer-container">
    <section class="footer-navigation">
        <div class="footer-list">
            <p class="footer-subhead">
                YouCan
            </p>
            <ul class="list">
                <li>
                    <a href="">About us</a>
                </li>
                <li>
                    <a href="{{ route('feature') }}">Features</a>
                </li>
                <li>
                    <a href="">Pricing</a>
                </li>
                <li>
                    <a href="">Careers</a>
                </li>
                <li>
                    <a href="">Life at YouCan</a>
                </li>
            </ul>
        </div>
        <div class="footer-list">
            <p class="footer-subhead">
                Resources
            </p>
            <ul class="list">
                <li>
                    <a href="">Contact us</a>
                </li>
                <li>
                    <a href="">Help Center</a>
                </li>
                <li>
                    <a href="">Developers</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="">FAQs</a>
                </li>
                <li>
                    <a href="">Press</a>
                </li>
                <li>
                    <a href="">Learn E-commerce</a>
                </li>
            </ul>
        </div>
        <div class="footer-list">
            <p class="footer-subhead">
                Community
            </p>
            <ul class="list">
                <li>
                    <a href="">Partners portal</a>
                </li>
                <li>
                    <a href="">Affiliate and Referral</a>
                </li>
                <li>
                    <a href="">YouCan Ambassadors</a>
                </li>
                <li>
                    <a href="">Awards</a>
                </li>
                <li>
                    <a href="">Become an expert</a>
                </li>
            </ul>
        </div>
        <div class="footer-list">
            <p class="footer-subhead">
                Conditions
            </p>
            <ul class="list">
                <li>
                    <a href="">Terms of use</a>
                </li>
                <li>
                    <a href="">Privacy policy</a>
                </li>
                <li>
                    <a href="">Cookies</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="container">
        <div class="channels">
            <p class="title">Follow us</p>
            <ul class="channels-list">
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('frontend/images/linkedin-icon.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('frontend/images/facebook-icon.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('frontend/images/instagram-icon.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('frontend/images/twitter-icon.svg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="{{ asset('frontend/images/youtube-icon.svg')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <p class="copy-right">
            &copy; <?=date("Y") ?> {{ config('app.name', 'Wecan') }}. All rights reserved.
        </p>
    </section>
</footer>
