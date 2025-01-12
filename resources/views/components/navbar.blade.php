<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Home | Landlord Solutions Made Simple') }}</title>
    {{-- CUSTOM CSS --}}
    @vite(['resources/css/app.css', 'resources/css/navbar.css'])
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

 
</head>

<body class="antialiased">
{{-- NAVBAR --}}
<header class="nav-header">
    <div class="top-block-nav">
        <div class="flex space-x-6">
            <div class="top-block-item nav-dropdown"><a id="contact-btn" class="nav-dropdown-btn font-normal"
                    href="{{ url('/contact-us') }}">CONTACT US<span class="caret-up"></span></a>
                <div id="contact-dropdown-content" class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{ url('/livechat') }}">Live Chat</a>
                    <a href="tel:+234 7034278995"> Make Call</a>
                    <a href="{{ url('/booking') }}">Consultation</a>
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
        <div class="hidden md:hidden lg:flex">
            <div
                class="flex justify-center items-center mt-0 bg-gray-700 bg-opacity-20 mx-3 relative z-0 cursor-pointer transform hover:scale-100 transition-all ease-in-out duration-500 rounded-md">
                <li
                    class="mt-0 bg-gray-700 bg-opacity-20 p-5 mx-0 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                    <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                        <path
                            d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                    </svg>
                </li>
                <a href="mailto:info@rentify247.com" class="tracking-wide">info@rentify247.com</a>
            </div>
            <div
                class="flex justify-center items-center text-center mt-0 bg-gray-700 bg-opacity-20 mx-0 relative z-0 cursor-pointer transform hover:scale-100 transition-all ease-in-out duration-500 rounded-md">
                <li
                    class="mt-0 bg-gray-700 bg-opacity-20 p-5 mx-0 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                    <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </li>
                <a href="tel:+234 7034278995" class="tracking-wide">+234 703 4278 995</a>
            </div>

        </div>
        <button>
            <a href="{{ url('/') }}">
                <img src="/assets/cart.png" class="w-7 h-7" alt="">
            </a>
            <span id="cart-caret-up" class="caret-up"></span>
        </button>
    </div>

    {{-- MAIN MENU  --}}
    <nav class="nav-container">
        <div class="lg:flex-1">
            <a href="{{ url('/') }}"><img src="/assets/RENTIFY2477 1.png" alt="Nav-logo"></a>
        </div>

        {{-- LARGE SCREENS --}}
        <div class="nav-link-container">
            <div><a class="nav-dropdown-btn" href="{{ url('/') }}">Home</a></div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="{{ url('/about-us') }}">About Us <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{ url('/') }}">Our Story / History</a>
                    <a href="{{ url('/awards') }}">Achievements / Awards</a>
                    <a href="{{ url('/testimonial') }}">Testimonials</a>
                    <a href="{{ url('/mission-and-vision') }}">Mission and Vision</a>
                    <a href="{{ url('/core-values') }}">Core Values</a>
                    <a href="{{ url('/contact-us') }}">Contact</a>
                    <a href="{{ url('/faq') }}">FAQs</a>
                    <a href="{{ url('/') }}">Our Team</a>
                    <a href="{{ url('/') }}">Careers / Join Us</a>
                    <a href="{{ url('/') }}">Sustainability Initiatives
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="{{ url('/') }}">Properties <span
                        class="caret-upup"></span> </a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{ url('/lease') }}">Lease</a>
                    <a href="{{ url('/sell') }}">Sell</a>
                    <a href="{{ url('/buy') }}">Buy</a>
                    <a href="{{ url('/apartment-for-rent') }}">Apartments for Rent</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="{{ url('/') }}">News & Insights <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{ url('/latest-new') }}">The latest news</a>
                    <a href="{{ url('/housing-trents') }}">Housing trends</a>
                    <a href="{{ url('/real-estate-news') }}">Real estate news</a>
                    <a href="{{ url('/celebrity-real-estate') }}">Celebrity real estate</a>
                    <a href="{{ url('/unique-home') }}">Unique homes</a>
                    <a href="{{ url('/comporate-blog') }}">Corporate blog</a>
                    {{-- Right dropdown --}}
                    <a href="{{ url('/selling') }}">Selling</a>
                    <a href="{{ url('/buying') }}">Buying</a>
                    <a href="{{ url('/renting') }}">Renting</a>
                </div>
            </div>

            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="{{ url('/latest-new') }}">Subscriptions <span
                        class="caret-upup"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="{{ url('/listings') }}">Listings</a>
                    <a href="{{ url('/managing-rent') }}">Managing Rent</a>
                    <a href="{{ url('/land-building') }}">land / Building</a>
                    <a href="{{ url('/commercial') }}">Commercial</a>
                    <a href="{{ url('/real-estate') }}">Real Estate</a>
                </div>
            </div>
        </div>

        {{-- MOBILE SCREENS --}}

        <div class="nav-link-container-mobile">
            <button class="nav-toggle-btn">☰ Menu</button>
            <ul class="nav-menu">
                <li class="mobile-dropdown">
                    <a href="{{ url('/') }}">Home</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">Register Domain</a></li>
                        <li><a href="{{ url('/') }}">Transfer Domain</a></li>
                        <li><a href="{{ url('/') }}">Domain Pricing</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{ url('/') }}">About Us</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">Register Domain</a></li>
                        <li><a href="{{ url('/') }}">Transfer Domain</a></li>
                        <li><a href="{{ url('/') }}">Domain Pricing</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{ url('/') }}">Security</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">Shared Hosting</a></li>
                        <li><a href="{{ url('/') }}">VPS Hosting</a></li>
                        <li><a href="{{ url('/') }}">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{ url('/') }}">Help Center</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">Shared Hosting</a></li>
                        <li><a href="{{ url('/') }}">VPS Hosting</a></li>
                        <li><a href="{{ url('/') }}">Dedicated Hosting</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="{{ url('/') }}">Account</a>
                    <button class="dropdown-toggle">▼</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">Email Apps</a></li>
                        <li><a href="{{ url('/') }}">Cloud Storage</a></li>
                        <li><a href="{{ url('/') }}">Marketing Tools</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        {{-- BOOKING --}}
        <div class="hidden lg:flex-1 lg:flex lg:justify-end lg:space-x-4 social-media">
            <a href="{{ url('/booking') }}"
                class="py-2 px-24 md:px-6 lg:px-4 md:py-2 lg:mr-8 bg-sky-800 text-white rounded-md hover:bg-sky-700 hover:text-gray-300">Booking</a>
        </div>
        </div>
    </nav>
    </div>
    </nav>
</header>
