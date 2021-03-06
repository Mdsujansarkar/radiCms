<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="index.html" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a>
        <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <div  x-data="{
            title: 'Title, logo, tag, etc change Option.'
          }">
            <a href="<?php echo e(route('setting')); ?>" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" x-bind:title="title">
                <i class="fas fa-cogs mr-3"></i>
                Settings
            </a>
        </div>
        <div  x-data="{
            title: 'Title, logo, tag, etc change Option.'
          }">
            <a href="<?php echo e(route('meta.tag')); ?>" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item" x-bind:title="title">
                <i class="fas fa-sticky-note mr-3"></i>
                <?php echo e(__('Meta Tag')); ?>

            </a>
        </div>
    </nav>

</aside>



<?php /**PATH /home/oem/Documents/radiCms/resources/views/backend/common/sidebar.blade.php ENDPATH**/ ?>