<div class=" w-full flex items-center justify-center px-4 lg:px-12 py-4 lg:py-12">
    <div class="w-full px-4 lg:px-12 py-4 lg:py-12 bg-slate-100 rounded-lg grid gap-4">
        <div class=" w-full flex justify-between items-center">
            <h1 class=" text-2xl lg:text-3xl font-bold text-[#075985]">Hear from Our Customers</h1>
            <div class="flex justify-center gap-3 text-center">
                <button id="prev-review-btn"
                    class="bg-[#075985] border border-solid border-gray-500 w-10 h-10 text-white font-bold text-xl hover:bg-sky-700 hover:text-text-gray-300 transform hover:scale-125 transition-all duration-500 ease-in-out rounded-full flex justify-center text-center items-center">&larr;</button>
                <button id="next-review-btn"
                    class=" bg-[#075985] border border-solid border-gray-500 w-10 h-10 text-white font-bold text-xl hover:bg-sky-700 hover:text-gray-300 hover:scale-125 transition-all duration-500 ease-in-out rounded-full flex justify-center text-center items-center">&rarr;</button>
            </div>
        </div>

        <div class="overflow-hidden">


            <div id="track"
                class="w-full flex  justify-between gap-4 lg:gap-6 transition-transform transform duration-[1000ms] ">
                @foreach ($reviewsArray as $review)
                    <div
                        class="review w-full md:w-[calc(50%-0.8rem)] lg:w-[calc(33.33%-1rem)]  min-[884px]:w-[calc(50%-0.8rem)]  shrink-0  border border-gray-500 p-4 lg:p-5 rounded-lg grid ">
                        <div class="flex mb-4 gap-1 ">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review['rating'])
                                    <svg fill="#075985" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                        viewBox="0 0 940.688 940.688" xml:space="preserve" stroke="#eeff00">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M885.344,319.071l-258-3.8l-102.7-264.399c-19.8-48.801-88.899-48.801-108.6,0l-102.7,264.399l-258,3.8 c-53.4,3.101-75.1,70.2-33.7,103.9l209.2,181.4l-71.3,247.7c-14,50.899,41.1,92.899,86.5,65.899l224.3-122.7l224.3,122.601 c45.4,27,100.5-15,86.5-65.9l-71.3-247.7l209.2-181.399C960.443,389.172,938.744,322.071,885.344,319.071z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                @endif
                                @if ($i > $review['rating'])
                                    <svg fill="#919191" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                        viewBox="0 0 940.688 940.688" xml:space="preserve" stroke="#919191">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M885.344,319.071l-258-3.8l-102.7-264.399c-19.8-48.801-88.899-48.801-108.6,0l-102.7,264.399l-258,3.8 c-53.4,3.101-75.1,70.2-33.7,103.9l209.2,181.4l-71.3,247.7c-14,50.899,41.1,92.899,86.5,65.899l224.3-122.7l224.3,122.601 c45.4,27,100.5-15,86.5-65.9l-71.3-247.7l209.2-181.399C960.443,389.172,938.744,322.071,885.344,319.071z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                @endif
                            @endfor

                        </div>
                        <p class="text-lg mb-4">{{ $review['comment'] }}</p>
                        <div class="w-full flex items-center">
                            <div class=" w-1/4">
                                <img src="{{ $review['profile_picture'] }}" alt="profile_picture"
                                    class="w-14 h-14 rounded-full">
                            </div>
                            <div class=" w-3/4">
                                <h1 class=" text-xl lg:text-2xl font-bold">{{ $review['name'] }}</h1>
                                <p class=" text-sm">{{ $review['location'] }}</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
