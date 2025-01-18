<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
<div class="mt-16 sm:mt-32 md:mt-12 lg:mt-3">

<search class="w-4/5 sm:w-1/2 lg:w-1/3 mx-auto my-0 ">
    <input type="text" class="w-full rounded-md bg-[--primary-clr-2] text-white p-2 mt-8 mb-2 focus:outline-none focus:ring-2 focus:ring-blue-500" id="search-input" placeholder="How can we help you?">
</search>

    <section class="w-full flex flex-col sm:flex-row">
        <nav class="bg-gradient-to-br from-[--primary-clr-2] to-[--primary-clr-1] w-full sm:w-1/5 sm:pl-2 lg:pl-14 pr-5 py-5 pb-5 sm:pb-28">
            <h1 class="text-green-300 uppercase font-bold text-xl text-center sm:text-start sm:text-lg">faq</h1>
            <!-- Category list for smaller screens -->
            <ul>
            <div id="selected-cont" class="flex justify-between sm:hidden text-[--natural-clr-1] h-12 rounded-lg px-6 py-3 mt-4 mx-4 bg-[--style-clr-2]">
                <span class="selected"></span>
            <img id="dropdown-btn" src="../../assets/icon-arrow.svg" class="w-4 h-5 pt-2 invert brightness-0">
            </div>

                <div id="dropdown-menu" class="hidden sm:hidden pt-2 pl-4">
                    @foreach($faqs as $category => $questions)
                <li class="py-1 pl-2 sm:pl-0"><a href="#" class="faq-link text-white text-base hover:text-gray-200" data-category="{{$category}}">{{$category}}</a></li>
                @endforeach

                </div>
</ul>
                <!-- Category list for larger screens -->
                 <ul>
                <div class="hidden sm:block border-3 border-pink-500">
                @foreach($faqs as $category => $questions)
                <li class="py-1 pl-2 sm:pl-0"><a href="#" class="faq-link text-white text-base hover:text-gray-200" data-category="{{$category}}">{{$category}}</a></li>

                @endforeach
                </div>
            </ul>
        </nav>

        <main class="max-w-full sm:w-11/12 bg-[#00246b] pb-28">
            <h1 class="heading text-center text-white py-3 text-2xl"></h1>
            <div class="faq-container w-full h-auto">
            
            </div>
           
           <!-- <img src="../../assets/icon-caret-right.svg" class="invert" alt="caret-image"> -->

           
        </main>
    </section>
</div>

<script>
    const faqs = @json($faqs)
</script>

<script src="{{ asset('js/faqsection.js')}}" defer></script>

