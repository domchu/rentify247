<?php
    use App\Http\Controllers\FaqSection;
    $controller = new FaqSection();
    $data = $controller->index();

    ?>

{{-- NAVBAR --}}
    <div>

        <x-navbar></x-navbar>
    </div>
{{-- FAQS --}}
<div>

    <div>
        <x-Faq-Section :faqs="$data['faqs']"/>
    </div>
</div>
{{-- FOOTER / COPYRIGHT --}}
    <div>
        <x-footer />
    </div>