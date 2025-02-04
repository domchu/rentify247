


    {{-- NAVBAR --}}
    <div>

        <x-navbar></x-navbar>
    </div>
    {{-- BANNER/SEARCH --}}
    <x-banner/>
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

    <?php
    use App\Http\Controllers\FaqSection;
    $controller = new FaqSection();
    $data = $controller->index();

    ?>

    <div>
        <x-Faq-Section :faqs="$data['faqs']"/>
    </div>
    {{-- FOOTER / COPYRIGHT --}}
    <div>
        <x-footer />
    </div>

