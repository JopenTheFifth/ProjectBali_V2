<?php $__env->startSection('content'); ?>




<section class="hero-image" style="background-image: url('<?php echo e(asset('/images/main_hero_darkened.jpg')); ?>') !important;">
    <div class="container" style="padding-top: 10rem;">
        <div class="row">
            <div class="col-lg-7 text-white mt-5">
                <h1 class="heroTitle">Resorts in Bali</h1>
                <p class="heroSubtitle text-bold">Find your dream resort in a few clicks!</p>
            </div>
            <div class="col-lg-5 mb-5">
                <datepicker-component></datepicker-component>
            </div>
        </div>
    </div>
</section>


<section class="bodySection" style="padding-top: 7rem; padding-bottom: 7rem;">
    <div class="container">
        <h1 class="title">Luxury Lodges and wellness retreat</h1>
        <hr  />
        <p class="pt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna Lorem ipsum dolor sit amet,d tempor invidunt ut labore et dolore magna</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5">
                <img style="width: 100%;" src="<?php echo e(asset('images/Hero_img5.jpg')); ?>">
            </div>
            <div class="col-lg-6 pt-5">
                <img style="width: 100%;" src="<?php echo e(asset('images/Hero_img4.jpg')); ?>">
            </div>
        </div>
    </div>


    <div class="container" style="padding-top: 10rem;">


    </div>


  </section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joelr\ProjectBali_V2\project_bali_app\resources\views/welcome.blade.php ENDPATH**/ ?>