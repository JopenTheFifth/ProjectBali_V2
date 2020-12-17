<?php $__env->startSection('content'); ?>
<div class="flex border-b">
    <div class="container mx-auto">
        <router-link class="mr-4" to="/" exact>Home</router-link>
        <router-link to="/example">Example</router-link>
    </div>
</div>
<router-view></router-view>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\joelr\ProjectBali_V2\project_bali_app\resources\views/welcome.blade.php ENDPATH**/ ?>