<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
{{-- FOOTER --}}
<div
    class="relative w-full h-84 mt-10 bg-[url('../../public/images/PIC-2.jpg')] bg-cover bg-center bg-no-repeat text-white p-10">
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
    <footer class="relative z-10 grid grid-cols-1 lg:grid-cols-3 mr-0 lg:mr-0 xl:mr-40">
        <div class="flex justify-center lg:justify-normal py-8 px-0 lg:px-20 col-span-1">
            <a href="{{ url('/') }}">
                <img class="w-96 lg:w-64 h-24 lg:h-16" src="{{ asset('assets/logo2.png') }}" alt="logo">
            </a>
        </div>

        <div class="px-10 lg:px-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 col-span-2">
            <div class="p-10">
                <h1 class="font-semibold text-2xl pb-3">Quick Links</h1>
                <ul>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/about-us') }}">About Us</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/contact-us') }}">Contact Us</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/why-us') }}">Why Us (Rentify247)</a>
                    </li>

                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/faq') }}">FAQs</a>
                    </li>
                </ul>
            </div>

            <div class="p-10">
                <h1 class="font-semibold text-2xl pb-3">Company</h1>
                <ul>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="{{ url('/booking') }}">Consultation / Booking</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="tel:+234 7034278995">+234 703 4278 995</a>
                    </li>
                    <li
                        class="pt-2 font-light text-lg transition-all hover:text-xl ease-in-out duration-150 cursor-pointer">
                        <a href="mailto:support@rentify247.com">support@rentify247.com</a>
                    </li>

                </ul>
            </div>
            {{-- SUBSCRIPTION --}}
            <div class="p-10">
                <h1 class="font-semibold text-2xl pb-3">Stay In the Loop</h1>
                <form action="{{ url('/') }}" method="POST">
                    <div>
                        <label class="peer-invalid:text-red-500 py-4 font-light text-md">Subscribe to NewsLetter</label>
                        <input type="email" class="peer rounded-md text-black py-2 my-3"
                            placeholder="Enter Your Email" />
                    </div>
                    <button type="submit"
                        class="rounded-md bg-sky-800 py-2 px-4 hover:bg-sky-700 hover:text-gray-300">Submit</button>
                </form>
                {{-- SOCIAL MEDIA HANDLES --}}
                <ul class="flex justify-start items-center p-2 lg:flex lg:justify-start lg:items-baseline">
                    <li
                        class="w-3 bg-gray-700 bg-opacity-20 p-5 mx-0 lg:mx-1 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                        <a href="#">                           
                            <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li
                        class="w-3 mt-0 xl:mt-5 bg-gray-700 bg-opacity-20 p-5 mx-2 lg:mx-4 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                        <a href="#">
                            <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>

                        </a>
                    </li>
                    <li
                        class="w-3 bg-gray-700 bg-opacity-20 p-5 mx-0 xl:mx-3 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                        <a href="#">
                            <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li
                        class="w-3 mt-0 xl:mt-5 bg-gray-700 bg-opacity-20 p-5 mx-2 lg:mx-3 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                        <a href="#">
                            <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>

                        </a>
                    </li>
                    <li
                        class="w-3 mt-0 xl:mt-5 bg-gray-700 bg-opacity-20 p-5 mx-2 lg:mx-3 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                        <a href="#">
                            <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
{{-- COPYRIGHT --}}
<div class="w-full p-3 bg-white text-center text-sm text-primaryColor2">
    <p class="text-lg font-medium ">&copy; Rentify247 2024. All rights reserved. Designed & Powered by <a
            href="https://www.bridgekode.com" target="_blank"
            class="text-sky-800 pt-2 text-lg cursor-pointer font-medium">Bridgekode Software development company</a></p>
</div>

<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>

</body>

</html>
