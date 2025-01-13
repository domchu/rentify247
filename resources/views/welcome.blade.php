 <?php
    
    // class SlideItem {
    //     public $id;
    //     public $image;
    //     public $description;
    
    //     public function __construct($id, $image, $description){
    //         $this->id = $id;
    //         $this->image = $image;
    //         $this->description = $description;
    //     }
    // };
    
    // $slideArray=[
    //     new SlideItem(1, './images/PIC-1.jpg', 'Description 1'),
    //     new SlideItem(2, './images/PIC-2.jpg', 'Description 2'),
    //     new SlideItem(3, './images/PIC-3.jpg', 'Description 3'),
    //     new SlideItem(4, './images/PIC-4.jpg', 'Description 4'),
    //     new SlideItem(5, './images/PIC-5.jpg', 'Description 5'),
    // ]
    $slideArray = [['id' => 1, 'image' => './images/PIC-1.jpg', 'description' => 'Description 1'], ['id' => 2, 'image' => './images/PIC-2.jpg', 'description' => 'Description 2'], ['id' => 3, 'image' => './images/PIC-3.jpg', 'description' => 'Description 3'], ['id' => 4, 'image' => './images/PIC-4.jpg', 'description' => 'Description 4'], ['id' => 5, 'image' => './images/PIC-5.jpg', 'description' => 'Description 5']];
    
    ?>


    {{-- NAVBAR --}}
    <div>

        <x-navbar></x-navbar>
    </div>
    {{-- BANNER/SEARCH --}}
    {{-- Output some availabe rent and listing --}}
    {{-- SUBSCRIPTION/PACKAGES --}}
    {{-- SLIDER --}}
    <div class="w-full">
        <x-slider :slideArray="$slideArray" />
    </div>
    {{-- REVIEWS --}}

    {{-- SPONSORSHIP / SUPPORT COMPONENT   --}}
    <div class="min-h-24 bg-sky-500">
        <x-sponsorSupport />
    </div>
    {{-- FAQ --}}
    {{-- FOOTER / COPYRIGHT --}}
    <div>
        <x-footer />
    </div>
 
