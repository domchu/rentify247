<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(config('app.name', 'Home | Landlord Solutions Made Simple')); ?></title>
        
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">


        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-24 bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

<?php


// class SlideItem {
//     public $id;
//     public $image;
//     public $description;

//     public function __construct($id, $image, $description){
//         $this->id = $id;occupied
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
$slideArray = [
    ['id' => 1, 'image' => './images/PIC-1.jpg', 'description' => 'Description 1'],
    ['id' => 2, 'image' => './images/PIC-2.jpg', 'description' => 'Description 2'],
    ['id' => 3, 'image' => './images/PIC-3.jpg', 'description' => 'Description 3'],
    ['id' => 4, 'image' => './images/PIC-4.jpg', 'description' => 'Description 4'],
    ['id' => 5, 'image' => './images/PIC-5.jpg', 'description' => 'Description 5'],
];

// $faqs = [
//     'General'=> [
//     ['id' => 1,'question' => 'How often will my property be occupied?', 'answer' => 'Depends on the popularity of your dungeon'],
//     ['id' => 2,'question' => 'What happens if something is damaged by a guest?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, officia.'],
//     ['id' => 3,'question' => 'How often will my property be ?', 'answer' => 'Depends on the popularity of your dungeon'],
//     ['id' => 4,'question' => 'How often will my property be occupied?', 'answer' => 'Depends on the popularity of your dungeon'],
//      ],

//     'Pricing'=> [
//     ['id' => 1,'question' => 'How often will my property be occupied?', 'answer' => 'Depends on the popularity of your dungeon'],
//     ['id' => 2,'question' => 'How often will my property be occupied?', 'answer' => 'Depends on the popularity of your dungeon'],
//     ['id' => 3,'question' => 'How often will my property be occupied?', 'answer' => 'Depends on the popularity of your dungeon'],
//     ]
// ]
?>

<?php
use App\Http\Controllers\FaqSection;

$controller = new FaqSection();
$data = $controller->index();
?>

        <div class=" w-full">
            <?php if (isset($component)) { $__componentOriginal01b4f1dbbb3b5a01d5176c6f051164cd2951e8ee = $component; } ?>
<?php $component = App\View\Components\Slider::resolve(['slideArray' => $slideArray] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Slider::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01b4f1dbbb3b5a01d5176c6f051164cd2951e8ee)): ?>
<?php $component = $__componentOriginal01b4f1dbbb3b5a01d5176c6f051164cd2951e8ee; ?>
<?php unset($__componentOriginal01b4f1dbbb3b5a01d5176c6f051164cd2951e8ee); ?>
<?php endif; ?>
        </div>

        
        <div>
            <?php if (isset($component)) { $__componentOriginal6991b6daad1dd01ba9adf339511a589cd417faf7 = $component; } ?>
<?php $component = App\View\Components\FaqSection::resolve(['faqs' => $data['faqs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('faq-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FaqSection::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6991b6daad1dd01ba9adf339511a589cd417faf7)): ?>
<?php $component = $__componentOriginal6991b6daad1dd01ba9adf339511a589cd417faf7; ?>
<?php unset($__componentOriginal6991b6daad1dd01ba9adf339511a589cd417faf7); ?>
<?php endif; ?>
        </div>

         
        <div class="min-h-24 bg-sky-500">
            <?php if (isset($component)) { $__componentOriginalbabc9a0cbeb8ac06246806f79f16a7c03e243bb3 = $component; } ?>
<?php $component = App\View\Components\SponsorSupport::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sponsorSupport'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SponsorSupport::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbabc9a0cbeb8ac06246806f79f16a7c03e243bb3)): ?>
<?php $component = $__componentOriginalbabc9a0cbeb8ac06246806f79f16a7c03e243bb3; ?>
<?php unset($__componentOriginalbabc9a0cbeb8ac06246806f79f16a7c03e243bb3); ?>
<?php endif; ?>
        </div>

        
        <div>
            <?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
        </div>

       

    <script src="<?php echo e(asset('js/slider.js')); ?>"></script>

    </body>
</html>
<?php /**PATH C:\Users\LENOVO\Downloads\Desktop\rentify247\rentify247\resources\views/welcome.blade.php ENDPATH**/ ?>