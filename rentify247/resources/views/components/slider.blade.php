<div  class="w-full lg:h-[70vh] md:h-[50vh] h-[40vh] flex justify-center items-center relative">

    <button id="prev" class="absolute md:left-4 lg:left-10 left-0 top-1/2 transform -translate-y-1/2 w-8 md:w-14 lg:w-14 text-5xl h-8 md:h-14  lg:h-14 rounded-full text-center bg-white flex justify-center items-center pb-3 z-50 shadow-lg shadow-gray-700 border border-solid border-white">&lsaquo;</button>

<div class="lg:w-[90%] flex lg:h-[90%] md:h-[90%]  overflow-hidden relative w-[90%]">



    @foreach ($slideArray as $slide)


    <div class="slide w-full h-full shrink-0 relative overflow-hidden transition-opacity duration-500 opacity-0 ease-in first:opacity-100 first:relative">
        <img class="w-full h-full object-cover object-center overflow-hidden" src="{{ $slide['image'] }}">
    </div>
    <div class=" absolute flex w-full h-full items-center justify-center text-center">
        <h1 class="content p-4 md:p-8 text-sm md:text-4xl lg:text-5xl text-blue-500 font-bold bg-grey-200/20 backdrop-blur-sm transition-opacity duration-500 ease-in-out opacity-0">{{ $slide['description'] }}</h1>
    </div>


    @endforeach


</div>
<button id="next" class="absolute md:right-4 lg:right-10 right-0 top-1/2 transform -translate-y-1/2 w-8 lg:w-14  md:w-14 text-5xl h-8 md:h-14  lg:h-14 rounded-full text-center bg-white flex justify-center items-center pb-3 z-50 shadow-lg shadow-gray-700 border border-solid border-white">&rsaquo;</button>
</div>


