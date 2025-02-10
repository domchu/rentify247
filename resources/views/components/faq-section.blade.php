<div class="mt-16 sm:mt-32 md:mt-12 lg:mt-3 shadow-md md:shadow rounded-lg">



    <section class="w-full flex flex-col sm:flex-row">
        <nav
            class="w-full bg-white sm:w-1/5 sm:pl-2 lg:pl-14 pr-5 py-5 pb-5 sm:pb-28">
            <h1 class="text-sky-800 uppercase font-bold text-2xl pt-0 lg:pt-4 text-center sm:text-start sm:text-xl">faqs</h1>

            {{-- CATEGORY LIST FOR MOBILE SCREENS --}}
            <ul>
                <div id="selected-cont"
                    class="flex justify-between sm:hidden text-[--clr-black] h-12 rounded-lg px-6 py-3 mt-4 mx-4 bg-sky-800">
                    <span class="selected text-white"></span>
                    <img id="dropdown-btn" src="../../assets/icon-arrow.svg" class="w-4 h-5 pt-2 invert brightness-0">
                </div>

                <div id="dropdown-menu" class="hidden sm:hidden pt-2 pl-4">
                    @foreach ($faqs as $category => $questions)
                        <li class="py-1 pl-2 sm:pl-0"><a href="#"
                                class="faq-link text-black text-base hover:text-sky-800"
                                data-category="{{ $category }}">{{ $category }}</a></li>
                    @endforeach

                </div>
            </ul>
            {{-- CATEGORY LIST FOR LARGE SCREENS --}}
            <ul>
                <div class="hidden sm:block border-3 border-pink-500">
                    @foreach ($faqs as $category => $questions)
                        <li class="py-1 pl-2 sm:pl-0"><a href="#"
                                class="faq-link text-black text-base hover:text-sky-800"
                                data-category="{{ $category }}">{{ $category }}</a></li>
                    @endforeach
                </div>
            </ul>
        </nav>

        <main class="max-w-full sm:w-11/12 pb-28 bg-gray-100">
            <div class="flex w-full items-center justify-center py-8 px-6 flex-col-reverse gap-4 md:flex-row">
                <h1 class="heading text-center text-sky-800 text-2xl"></h1>
            <search class="w-4/5 sm:w-1/2 lg:w-1/3 mx-auto">
        <input type="text"
            class="w-full rounded-md bg-[--clr-white] text-sky-800 border-[--primary-clr-2] p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            id="search-input" placeholder="How can we help you?">
    </search>
            </div>

            <div class="faq-container w-full h-auto">
         
            </div>

        </main>
    </section>
</div>

<script>
    const faqs = @json($faqs)
</script>
