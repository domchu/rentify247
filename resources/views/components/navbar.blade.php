<header class="nav-header">
    <div class="top-block-nav">
        <div class="flex space-x-6">
            <div class="top-block-item nav-dropdown"><a id="contact-btn" class="nav-dropdown-btn font-normal"
                    href="{{url('/contact')}}">CONTACT US<span class="caret-up"></span></a>
                <div id="contact-dropdown-content" class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{url('/livechat')}}">Live Chat</a>
                    <a href="tel:+234 7034278995"> Make Call</a>
                    <a href="{{url('/booking')}}">Consultation</a>
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
            <a href="{{url('/')}}">
                <img src="/assets/cart.png" class="w-7 h-7" alt="">
            </a>
            <span id="cart-caret-up" class="caret-up"></span>
        </button>
    </div>

    {{-- MAIN MENU  --}}
    <nav class="nav-container">
        <div class="lg:flex-1">
            <a href="{{url('/')}}"><img src="/assets/RENTIFY2477 1.png" alt="Nav-logo"></a>
        </div>

        {{-- LARGE SCREENS --}}
        <div class="nav-link-container">
            <div><a class="nav-dropdown-btn" href="{{url('/')}}">Home</a></div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="{{url('/about')}}">About Us <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{url('/')}}">Our Story / History</a>
                    <a href="{{url('/awards')}}">Achievements / Awards</a>
                    <a href="{{url('/testimonial')}}">Testimonials</a>
                    <a href="{{url('/mission-and-vision')}}">Mission and Vision</a>
                    <a href="{{url('/core-values')}}">Core Values</a>
                    <a href="{{url('/contact')}}">Contact</a>
                    <a href="{{url('/faq')}}">FAQs</a>
                    <a href="{{url('/')}}">Our Team</a>
                    <a href="{{url('/')}}">Careers / Join Us</a>
                    <a href="{{url('/')}}">Sustainability Initiatives
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Properties <span
                        class="caret-upup"></span> </a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{url('/lease')}}">Lease</a>
                    <a href="{{url('/sell')}}">Sell</a>
                    <a href="{{url('/buy')}}">Buy</a>
                    <a href="{{url('/apartment-for-rent')}}">Apartments for Rent</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">News & Insights <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{url('/new')}}">The latest news</a>
                    <a href="{{url('/housing-trents')}}">Housing trends</a>
                    <a href="{{url('/real-estate-news')}}">Real estate news</a>
                    <a href="{{url('/celebrity-real-estate')}}">Celebrity real estate</a>
                    <a href="{{url('/unique-home')}}">Unique homes</a>
                    <a href="{{url('/comporate-blog')}}">Corporate blog</a>
                    {{-- Right dropdown --}}
                    <a href="{{url('/selling')}}">Selling</a>
                    <a href="{{url('/buying')}}">Buying</a>
                    <a href="{{url('/renting')}}">Renting</a>
                </div>
            </div>

            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Subscriptions <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{url('/listings')}}">Listings</a>
                    <a href="{{url('/managing-rent')}}">Managing Rent</a>
                    <a href="{{url('/land-building')}}">land / Building</a>
                    <a href="{{url('/commercial')}}">Commercial</a>
                    <a href="{{url('/real-estate')}}">Real Estate</a>
                </div>
            </div>
        </div>

        {{-- MOBILE SCREENS --}}

        <div class="nav-link-container-mobile">
            <button class="nav-toggle-btn">☰ Menu</button>
            <ul class="nav-menu">
                <li class="mobile-dropdown">
                    <a href="{{url('/')}}">Home</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}">Register Domain</a></li>
                        <li><a href="{{url('/')}}">Transfer Domain</a></li>
                        <li><a href="{{url('/')}}">Domain Pricing</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{url('/')}}">About Us</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}">Register Domain</a></li>
                        <li><a href="{{url('/')}}">Transfer Domain</a></li>
                        <li><a href="{{url('/')}}">Domain Pricing</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{url('/')}}">Security</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}">Shared Hosting</a></li>
                        <li><a href="{{url('/')}}">VPS Hosting</a></li>
                        <li><a href="{{url('/')}}">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{url('/')}}">Help Center</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}">Shared Hosting</a></li>
                        <li><a href="{{url('/')}}">VPS Hosting</a></li>
                        <li><a href="{{url('/')}}">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{url('/')}}">Account</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/')}}">Email Apps</a></li>
                        <li><a href="{{url('/')}}">Cloud Storage</a></li>
                        <li><a href="{{url('/')}}">Marketing Tools</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        {{-- SOCIAL ICONS --}}
        <div class="hidden lg:flex-1 lg:flex lg:justify-end lg:space-x-4 social-media">
            <a href="{{url('/booking')}}"
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
