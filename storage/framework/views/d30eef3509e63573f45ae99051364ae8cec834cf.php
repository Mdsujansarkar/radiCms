<?php $__env->startSection('meta'); ?>

  <?php $__currentLoopData = $cvmetaTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta_tag_single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <title><?php echo e(__('যোগাযোগ | দেলোয়ার হোসেন ফারুক')); ?></title>
  <meta content="<?php echo e($meta_tag_single->meta_tag); ?>" name="keywords">
  <meta content="<?php echo e($meta_tag_single->site_tagline); ?>" name="description">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
     <!--/ Intro Single star /-->
     <section class="intro-single about">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">যোগাযোগ করুন</h1>
                <!-- <span class="color-text-a">Delowar Hossain Faruk</span> -->
              </div>
            </div><!-- 
           <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About
                  </li>
                </ol>
              </nav>
            </div> -->
          </div>
        </div>
      </section>
      <!--/ Intro Single End /-->
    
    
      <!--/ Contact Star /-->
      <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 section-t8">
              <div class="row">
                <div class="col-md-7">
                  <form action="contact.html" method="post" role="form">
                    <div id="sendmessage"></div>
                    <div id="errormessage"></div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input type="text" name="cuname" class="form-control form-control-lg form-control-a" placeholder="আপনার নাম" required>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="আপনার ই-মেইল" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="বিষয়" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <textarea name="cumessage" class="form-control" name="message" cols="45" rows="8" placeholder="বার্তা" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="Submit1" class="btn btn-a">বার্তা পাঠান</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-5 section-md-t3">
                  <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                      <span class="ion-ios-paper-plane"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">হ্যালো </h4>
                      </div>
                      <div class="icon-box-content">
                       <!--  <p class="mb-1">Email.
                          <span class="color-a">contact@example.com</span>
                        </p> -->
                        <p class="mb-1">মোবাইল.
                          <span class="color-a">+880 1711 666 999</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="icon-box section-b2">
                    <div class="icon-box-icon">
                      <span class="ion-ios-pin"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">আমাদের সন্ধান করুন</h4>
                      </div>
                      <div class="icon-box-content">
                        <p class="mb-1">
                                রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড <br>শাহ্ আলী টাওয়ার (৬ষ্ঠ তলা), ৩৩ কাওরান বাজার, ঢাকা-১২১৫
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="icon-box">
                    <div class="icon-box-icon">
                      <span class="ion-ios-redo"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                      <div class="icon-box-title">
                        <h4 class="icon-title">সামাজিক যোগাযোগ</h4>
                      </div>
                      <div class="icon-box-content">
                        <div class="socials-footer">
                          <ul class="list-inline">
                            <li class="list-inline-item">
                              <a href="https://www.facebook.com/delowarhfaruk" class="link-one">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="https://twitter.com/dh_faruk" class="link-one">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                            </li><!--
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="link-one">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                            </li>-->
                            <li class="list-inline-item">
                              <a href="http://dhfaruk.com/" class="link-one">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Contact End /-->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oem/Documents/radiCms/resources/views/frontend/home/contact.blade.php ENDPATH**/ ?>