<section>
    <div>
        <div class="my-12">
            <div class="contact-title max-w-full  bg-sky-800 text-center py-12">
                <h2 class="text-white font-semibold text-3xl py-3 md:text-3xl lg:text-4xl">Contact Us</h2>
                <p
                    class="text-white text-xl px-7 pb-4 text-wrap md:w-4/5 md:mx-auto md:my-0 lg:w-3/6 lg:mx-auto lg:my-0">
                    <span class="text-[#dc2d2d] font-bold text-xl px-1">Need an expert?</span> You are more than welcome
                    to
                    leave your contact information and we will be in touch shortly.
                </p>

            </div>
            <div
                class="relative w-full h-84 mt-10 bg-[url('../../public/images/real-estate.webp')] bg-cover bg-center bg-no-repeat text-white ">
                <div class="lg:flex lg:w-5/6 lg:mx-auto lg:my-0">
                    <div class="p-5 lg:w-3/6 my-8">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis sunt perspiciatis mollitia
                            doloribus repellat adipisci dolorum voluptatum dicta velit, quae officiis fugit, possimus
                            inventore repellendus quaerat dolores architecto nihil aut?</p>

                    </div>
                    {{-- CONTACT FORM --}}
                    <div class="form-section bg-sky-800 py-3 px-3 w-full my-8 mx-auto  rounded lg:w-3/6">
                        <form action="" method="POST">
                            <div>
                                <label for="" id="name" class="text-bold lg:mb-4">First Name<span
                                        class="text-[#d22929] font-bold ">*</span></label> <br>
                                <input type="text" name="name" id="name" placeholder="First Name" required
                                    autofocus="text-blue" class="rounded text-black w-full lg:w-11/12 md:mt-2 lg:mt-2">
                            </div>
                            <div class="py-4">
                                <label for="" id="first_name" class="text-bold">Last Name<span
                                        class="text-[#d22929] font-bold">*</span></label><br>
                                <input type="text" name="last_name" id="name" placeholder="Last Name" required
                                    autofocus="text-blue" class="rounded text-black w-full lg:w-11/12 md:mt-2 lg:mt-2">
                            </div>
                            <div class="py-4">
                                <label for="" id="email" class="text-bold">Enter Your Email<span
                                        class="text-[#d22929] font-bold">*</span></label><br>
                                <input type="email" name="email" id="email" placeholder="example@gmail.com "
                                    required autofocus="text-blue"
                                    class="rounded text-black w-full lg:w-11/12 md:mt-2 lg:mt-2">
                            </div>
                            <div class="py-4">
                                <label for="" id="email" class="text-bold">Your Number<span
                                        class="text-[#d22929] font-bold">*</span></label><br>
                                <input type="email" name="email" id="email" placeholder="(+234 1234567890) "
                                    required autofocus="text-blue"
                                    class="rounded text-black w-full lg:w-11/12 md:mt-2 lg:mt-2">
                            </div>
                            <div class="py-4">
                                <label for="" id="email" class="text-bold">Your Message<span
                                        class="text-[#d22929] font-bold">*</span></label><br>
                                <textarea name="message" id="message" cols="35" rows="10" placeholder="Write a Message"
                                    class="rounded text-black w-full lg:w-11/12 md:mt-2 lg:mt-2" required></textarea>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- ADDRESS SECTION --}}
            <div class="flex flex-wrap md:flex md:justify-center md:w-4/5 md:mx-auto md:my-20">
                <div class="visit-us">
                    <div class="flex justify-center items-center">
                        <li
                            class="w-3 bg-gray-700 bg-opacity-20 p-5 mx-0 lg:mx-1 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                            <a href="{{ url('/') }}">
                                <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </div>
                    <div>
                        <h4 class="text-center text-sky-800 font-semibold text-xl py-3 md:text-2xl lg:text-2xl">Visit Us</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, provident!</p>
                        <a href="tel:(+234) 70 34278995">Vintage Park Estate, Lekki Phase 1, Lagos State. Nigeria</a>
                    </div>
                </div>
                <div class="call-us">
                    <div class="flex justify-center items-center">
                        <li
                            class="w-3 bg-gray-700 bg-opacity-20 p-5 mx-0 lg:mx-1 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
                            <a href="{{ url('/') }}">
                                <svg class="absolute z-10 top-2 right-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                    </div>
                    <div class="flex flex-col">
                        <h4 class="text-center text-sky-800 font-semibold text-xl py-3 md:text-2xl lg:text-2xl">Call Us</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, provident!</p>
                        <a href="tel:(+234) 70 34278995">(+234) 703 4278 995</a>
                        <a href="tel:(+234) 70 34278995">(+234) 903 9028 399</a>
                    </div>
                </div>
                <div class="message-us">
                    <div class="flex justify-center items-center">
                        <li
                            class="w-3 mt-0 bg-gray-700 bg-opacity-20 p-5 mx-2 lg:mx-4 relative z-0 cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500 rounded-md">
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

                    </div>
                    <div class="flex flex-col">
                        <h4 class="text-center text-sky-800 font-semibold text-xl py-3 md:text-2xl lg:text-2xl">Message Us</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, provident!</p>
                        <a href="mailto:support@rentify247">support@rentify247</a>
                        <a href="mailto:info@rentify247">info@rentify247</a>
                        <a href="mailto:customercare@rentify247">customercare@rentify247</a>
                    </div>
                </div>
            </div>
            {{-- MAP --}}
            <div class="map">

            </div>
            {{-- FOLLOW US --}}
            <div
                class="flex flex-col justify-center items-center md:flex md:justify-center md:items-center md:flex-col">
                <h2 class="text-sky-800 font-semibold text-3xl py-3 md:text-3xl lg:text-4xl">FOLLOW US</h2>
                <div class="flex space-x-4 py-2">
                    <div>
                        <a href="https://www.facebook.com/rentify247" target="_blank" rel="noopener noreferrer"><img
                                src="/assets/social-media-icons/facebook.png" alt="FACEBOOK ICON"
                                class="h-7 w-7 rounded cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/rentify247" target="_blank" rel="noopener noreferrer"><img
                                src="/assets/social-media-icons/instagram.png" alt="INSTAGRAM ICON"
                                class="h-7 w-7 rounded cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500"></a>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/rentify247" target="_blank" rel="noopener noreferrer"><img
                                src="/assets/social-media-icons/linkedin.png" alt="LINKEDIN ICON"
                                class="h-7 w-7 rounded cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500"></a>
                    </div>
                    <div>
                        <a href="https://www.whatsapp.com/rentify247" target="_blank" rel="noopener noreferrer"><img
                                src="/assets/social-media-icons/whatsapp.png" alt="WHATSAPP ICON"
                                class="h-7 w-7 rounded cursor-pointer transform hover:scale-125 transition-all ease-in-out duration-500"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
