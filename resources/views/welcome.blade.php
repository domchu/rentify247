


    {{-- NAVBAR --}}
    <div>

        <x-navbar></x-navbar>
    </div>
    {{-- BANNER/SEARCH --}}
    {{-- Output some availabe rent and listing --}}
    {{-- SUBSCRIPTION/PACKAGES --}}
    {{-- SLIDER --}}
          <div class=" w-full">
            <x-slider :slideArray="$slides"/>
        </div>
                 {{-- REVIEWS --}}
        <div>
            <x-reviews :reviewsArray="$reviews"/>
        </div>


    {{-- SPONSORSHIP / SUPPORT COMPONENT   --}}
    <div class="min-h-24 bg-sky-500">
        <x-sponsorSupport />
    </div>
    {{-- FAQ --}}
    {{-- FOOTER / COPYRIGHT --}}
    <div>
        <x-footer />
    </div>

