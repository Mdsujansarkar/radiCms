<?php $__env->startSection('backend'); ?>
<main class="w-full flex-grow p-6">
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="flex flex-wrap">
                
                <?php if(session('message')): ?>
                    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="ml-3 text-sm font-normal"><?php echo e(session('message')); ?></div>
                    </div>
                <?php endif; ?>

                

                <div class="w-full lg:w-full my-6 pr-0 lg:pr-2">
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"><?php echo e(__('Page Title')); ?></th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"><?php echo e(__('Meta Tag')); ?></th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"><?php echo e(__('Meta Description')); ?></th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"><?php echo e(__('Edit')); ?></td>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"><?php echo e(__('Delete')); ?></td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php $__currentLoopData = $metatags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metatag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-left py-3 px-4"><?php echo e($metatag->title_tag); ?></td>
                                        <td class="text-left py-3 px-4"><?php echo e($metatag->meta_tag); ?></td>
                                        <td class="text-left py-3 px-4"><?php echo e($metatag->site_tagline); ?></td>
                                        <td class="text-left py-3 px-4"><a href="<?php echo e(route('meta.edit', $metatag->id)); ?>">Edit</a></td>
                                        <td class="text-left py-3 px-4"><a onclick="return confirm('Are you sure?')" href="<?php echo e(route('meta.delete', $metatag->id)); ?>">Delete</a></td>
                            
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="my-6 pr-0 lg:pr-2">
                            <?php echo e($metatags->links('pagination::tailwind')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oem/Documents/radiCms/resources/views/backend/seoPanel/metaView.blade.php ENDPATH**/ ?>