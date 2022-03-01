<?php $__env->startSection('backend'); ?>
<main class="w-full flex-grow p-6">
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="flex flex-wrap">
            </div>
            <div class="w-full mt-12">
                <div class="bg-white overflow-auto">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Logo
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Favicon
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Website Title
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Website Tagline
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="items-center">
                                        <div class="flex-shrink-0 w-20 h-20">
                                            <img class="w-full h-full rounded-full"
                                                src="<?php echo e(asset('/backend/logo/'.$setting[0] ->websit_logo)); ?>"
                                                alt="" />
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="items-center">
                                        <div class="flex-shrink-0 w-20 h-20">
                                            <img class="w-full h-full rounded-full"
                                                src="<?php echo e(asset('/backend/favicon/'.$setting[0] ->web_sitfav)); ?>"
                                                alt="" />
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <h3 class="text-gray-900 whitespace-no-wrap">
                                        <?php echo e($setting[0] ->site_title); ?>

                                    </h3>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <h3 class="text-gray-900 whitespace-no-wrap">
                                        <?php echo e($setting[0] ->site_tagline); ?>

                                    </h3>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative"><a href="<?php echo e(URL::to('/setting/view/'.$setting[0] ->id)); ?>">Edit</a></span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oem/Documents/radiCms/resources/views/backend/settings/settingView.blade.php ENDPATH**/ ?>