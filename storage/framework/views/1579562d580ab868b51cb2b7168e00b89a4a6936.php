<?php $__env->startSection('backend'); ?>
<main class="w-full flex-grow p-6">
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <a href="<?php echo e(URL::to('/setting/view')); ?>" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Setting Edit
            </a>
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
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" action="<?php echo e(route('web.setting')); ?>" enctype="multipart/form-data"  method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="title">Web Site Title</label>
                                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="title" name="site_title" type="text" placeholder="Web Site Title" aria-label="Web Site Title">
                                
                                    <?php if($errors->has('site_title')): ?>
                                        <span class="block text-sm text-red-600"><i><?php echo e($errors->first('site_title')); ?><i></span>
                                    <?php endif; ?>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="site_tagline">Web Site Tagline</label>
                                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="site_tagline" name="site_tagline" type="text" placeholder="Web Site Tagline" aria-label="Web Site Tagline">
                                    <?php if($errors->has('site_tagline')): ?>
                                    <span class="block text-sm text-red-600"><i><?php echo e($errors->first('site_tagline')); ?><i></span>
                                    <?php endif; ?>
                            </div>
                            <div class="flex justify-center mt-8">
                                <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                                    <div class="m-4">
                                        <label class="inline-block mb-2 text-gray-500">Website Logo upload(jpg,png,svg,jpeg)</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                <div class="flex flex-col items-center justify-center pt-7">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                        Select a photo
                                                    </p>
                                                </div>
                                                <input class="opacity-0" accept="image/*" type='file' name="websit_logo" id="imgInp"/>
                                                <img id="blah" src="#" alt="your image" width="200px" height="200px"/>
                                                <?php if($errors->has('websit_logo')): ?>
                                                    <span class="block text-sm text-red-600"><i><?php echo e($errors->first('websit_logo')); ?><i></span>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center mt-8">
                                <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                                    <div class="m-4">
                                        <label class="inline-block mb-2 text-gray-500">Website Favicon upload(jpg,png,svg,jpeg)</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                <div class="flex flex-col items-center justify-center pt-7">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                        Select a photo</p>
                                                </div>
                                                <input type="file" class="opacity-0" accept="image/*" type='file' id="favImage" name="web_sitfav" />
                                                <img id="fav" src="#" alt="your image" height="200px" width="200px"/>
                                                <?php if($errors->has('web_sitfav')): ?>
                                                    <span class="block text-sm text-red-600"><i><?php echo e($errors->first('web_sitfav')); ?><i></span>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('javascript'); ?>
<script>
imgInp.onchange = evt => {
    const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}

favImage.onchange = evt => {
    const [file] = favImage.files
  if (file) {
    fav.src = URL.createObjectURL(file)
  }
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oem/Documents/radiCms/resources/views/backend/settings/setting.blade.php ENDPATH**/ ?>