<?php echo $__env->make('frontend.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

 <?php echo $__env->make('frontend.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('home'); ?> 

 <?php echo $__env->make('frontend.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oem/Documents/radiCms/resources/views/frontend/master.blade.php ENDPATH**/ ?>