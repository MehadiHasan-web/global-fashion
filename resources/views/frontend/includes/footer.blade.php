@php
    $setting = DB::table('settings')->first();
@endphp
<footer class="footer-area bg-gray pt-100 pb-70">

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "PAGE-ID");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>


    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'API-VERSION'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="copyright mb-30">
                    <div class="footer-logo">
                        <!-- <img alt="" src="{{ asset('frontend/img/logo/logo.png') }}"> -->
                        <a href="{{ route('home') }}">
                            <!-- <img alt="" src="{{ asset('frontend/img/logo/logo.png') }}"> -->
                            <img class="w-100" src="{{ URL::to('storage/settings/' . optional($setting)->logo) }}"
                                alt="Logo" style="object-fit: cover; height:100%">
                        </a>
                    </div>
                    <p>&copy; 2024 <a href="https://xcode.com.bd/" class="text-info">Xcode</a>. All rights reserved.
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-30">
                    <div class="footer-title">
                        <h3>ABOUT US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Store location</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Orders tracking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-50">
                    <div class="footer-title">
                        <h3>USEFUL LINKS</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Size guide</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-75">
                    <div class="footer-title">
                        <h3>FOLLOW US</h3>
                    </div>
                    @php
                        $socials = DB::table('socials')->first();
                    @endphp
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{ $socials->facebook ?? '' }}">Facebook</a></li>
                            <li><a href="{{ $socials->twitter ?? '' }}">Twitter</a></li>
                            <li><a href="{{ $socials->instagram ?? '' }}">Instagram</a></li>
                            <li><a href="{{ $socials->linkedin ?? '' }}">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            {{-- display none  --}}
            <div class="col-lg-4 col-md-6 col-sm-6 d-none">
                <div class="footer-widget mb-30 ml-70">
                    <div class="footer-title">
                        <h3>GLOBAL FASHION</h3>
                    </div>


                    <div class="subscribe-style ">
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <div id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                name="mc-embedded-subscribe-form" method="post" action="">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required=""
                                        placeholder="Enter your email here.." name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1"
                                            name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                            value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
