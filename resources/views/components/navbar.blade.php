<header class="nav-header">
    <div class="top-block-nav">
        <div class="flex space-x-6">
            <div class="top-block-item nav-dropdown"><a id="contact-btn" class="nav-dropdown-btn font-normal"
                    href="#">CONTACT US<span class="caret-up"></span></a>
                <div id="contact-dropdown-content" class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Live Chat</a>
                    <a href="#">Report Abuse</a>
                </div>
            </div>
            <div class="top-block-item"><a href="#">SIGN IN</a></div>
            <div class="top-block-item hidden sm:block"><a href="#">SIGN UP</a></div>
        </div>
        <button>
            <a href="#">
                <img src="/assets/cart.png" class="w-7 h-7" alt="">
            </a>
            <span id="cart-caret-up" class="caret-up"></span>
        </button>
    </div>
    <nav class="nav-container">
        <div class="lg:flex-1">
            <a href="/"><img src="/assets/RENTIFY2477 1.png" alt="nav-logo"></a>
        </div>

        {{-- LARGE SCREENS --}}
        <div class="nav-link-container">
            <div><a class="nav-dropdown-btn" href="#">Home</a></div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">About Us <span class="caret-up"></span></a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Security </a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Help Center </a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Knowledge Base</a>
                    <a href="#">Guru Guides</a>
                    <a href="#">Blog</a>
                </div>
            </div>
            <div class="nav-dropdown"><a class="nav-dropdown-btn" href="#">Account</a>
                <div class="nav-dropdown-content">
                    <span class="caret"></span>
                    <a href="#">Dashboard</a>
                    <a href="#">My offers</a>
                    <a href="#">Profile</a>
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
        <div class="lg:flex-1 flex justify-end space-x-4 social-media">
            <a href="/">
                {{-- <i class="fab fa-facebook"></i> --}}
                <img src="/assets/social media icons/facebook.png" id="img" alt="fb-icon">
            </a>
            <a href="/"><img src="/assets/social media icons/instagram.svg" id="img" alt="ig-icon"></a>
            <a href="/"><img src="/assets/social media icons/linkedin.svg" id="img" alt="ld-icon"></a>
            <a href="/"><img src="/assets/social media icons/whatsapp.svg" id="img" alt="wht-icon"></a>
        </div>
        </div>
    </nav>
    </div>
    </nav>
</header>
