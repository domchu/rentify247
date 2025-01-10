<header class="nav-header">
    <div class="top-block-nav">
        <div class="flex space-x-6">
            <div class="top-block-item nav-dropdown"><a id="contact-btn" class="nav-dropdown-btn font-normal"
                    href="#">CONTACT US<span class="caret-up"></span></a>
                <div id="contact-dropdown-content" class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Live Chat</a>
                    <a href="tel:+234 7034278995">Booking/ Make Call</a>
                    <a href="mailto:support@rentify247.com">support@rentify247.com</a>
                    <a href="mailto:info@rentify247.com">info@rentify247.com</a>
                </div>
            </div>
            {{-- AUTH --}}
            @if (Route::has('login'))
                <div class="hidden sm:block md:flex lg:flex">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <div class="top-block-item mx-3"><a href="{{ route('login') }}">SIGN IN</a></div>
                        @if (Route::has('register'))
                            <div class="top-block-item hidden sm:block"><a href="{{ route('register') }}">SIGN UP</a></div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="flex">
            <div class="">
                <a href="mailto:info@rentify247.com" class="mx-3 tracking-wide">info@rentify247.com</a>
            </div>
            <div>
                <a href="tel:+234 7034278995">+234 703 4278 995</a>
            </div>
        </div>
        <button>
            <a href="#">
                <img src="/assets/cart.png" class="w-7 h-7" alt="">
            </a>
            <span id="cart-caret-up" class="caret-up"></span>
        </button>
    </div>

    {{-- MAIN MENU  --}}
    <nav class="nav-container">
        <div class="lg:flex-1">
            <a href="/"><img src="/assets/RENTIFY2477 1.png" alt="Nav-logo"></a>
        </div>

        {{-- LARGE SCREENS --}}
        <div class="nav-link-container">
            <div><a class="nav-dropdown-btn" href="#">Home</a></div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">About Us <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Our Story / History</a>
                    <a href="#">Achievements / Awards</a>
                    <a href="#">Testimonials</a>
                    <a href="#">Mission and Vision</a>
                    <a href="#">Core Values</a>
                    <a href="#">Our Team</a>
                    <a href="#">Careers / Join Us</a>
                    <a href="#">Sustainability Initiatives
                        <a href="#">Contact</a>
                        <a href="#">FAQs</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Properties <span
                        class="caret-upup"></span> </a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Lease</a>
                    <a href="#">Sell</a>
                    <a href="#">Buy</a>
                    <a href="#">Apartments for Rent</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">News & Insights <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">The latest news</a>
                    <a href="#">Housing trends</a>
                    <a href="#">Real estate news</a>
                    <a href="#">Celebrity real estate</a>
                    <a href="#">Unique homes</a>
                    <a href="#">Corporate blog</a>
                    {{-- Right dropdown --}}
                    <a href="#">Selling</a>
                    <a href="#">Buying</a>
                    <a href="#">Renting</a>
                </div>
            </div>

            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Subscriptions <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Listings</a>
                    <a href="#">Managing Rent</a>
                    <a href="#">land / Building</a>
                    <a href="#">Commercial</a>
                    <a href="#">Real Estate</a>
                </div>
            </div>
        </div>

        {{-- MOBILE SCREENS --}}

        <div class="nav-link-container-mobile">
            <button class="nav-toggle-btn">☰ Menu</button>
            <ul class="nav-menu">
                <li class="mobile-dropdown">
                    <a href="#">Home</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Register Domain</a></li>
                        <li><a href="#">Transfer Domain</a></li>
                        <li><a href="#">Domain Pricing</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="#">About Us</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Register Domain</a></li>
                        <li><a href="#">Transfer Domain</a></li>
                        <li><a href="#">Domain Pricing</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="#">Security</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">VPS Hosting</a></li>
                        <li><a href="#">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="#">Help Center</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">VPS Hosting</a></li>
                        <li><a href="#">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="#">Account</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Email Apps</a></li>
                        <li><a href="#">Cloud Storage</a></li>
                        <li><a href="#">Marketing Tools</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        {{-- SOCIAL ICONS --}}
        <div class="hidden lg:flex-1 lg:flex lg:justify-end lg:space-x-4 social-media">
            <a href="/booking"
                class="py-2 px-24 md:px-6 lg:px-4 md:py-2 lg:mr-8 bg-sky-800 text-white rounded-md hover:bg-sky-700 hover:text-gray-300">Booking</a>
            {{-- <a href="/"><img src="/assets/social media icons/instagram.svg" id="img" alt="ig-icon"></a>
            <a href="/"><img src="/assets/social media icons/linkedin.svg" id="img" alt="ld-icon"></a>
            <a href="/"><img src="/assets/social media icons/whatsapp.svg" id="img" alt="wht-icon"></a>
            <a href="/"> <img src="/assets/social media icons/facebook.png" id="img" alt="fb-icon"></a> --}}
        </div>
        </div>
    </nav>
    </div>
    </nav>
</header>
