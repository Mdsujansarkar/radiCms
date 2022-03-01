  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg ">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?php echo e(URL::to('/')); ?>">দেলোয়ার হোসেন ফারুক<span class="color-b"></span></a>
     
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
		
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(URL::to('/')); ?>">মূলপাতা  </a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" href="about.html">সম্পর্কে</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('mycv')); ?>">জীবনবৃত্তান্ত</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('achivement')); ?>">কৃতিত্ব</a>
          </li>
		  
           <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('whatToDo')); ?>">কি করতে চাই </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('howToDo')); ?>">কিভাবে করবো </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('lastActivites')); ?>">লাকসাম-মনোহরগঞ্জ   </a>
          </li>
		  <li class="dropdown nav-item">
            <a href="#" class="nav-link">প্রেস</a>
            <ul class="dropdown-menu">
                <li  class="nav-item"><a href="political.html" class="nav-link">সম্প্রতিক ঘটনা প্রবাহ</a></li>
                <li  class="nav-item"><a href="social.html" class="nav-link">নোট</a></li>
                <li  class="nav-item"><a href="book.html" class="nav-link">বই </a></li>
                <li  class="nav-item"><a href="motamot.html" class="nav-link">মতামত </a></li>
                
            </ul>
        </li>
		   <!--
           <li class="nav-item">
            <a class="nav-link" href="gellary.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="latest-activity.html">Latest Activity</a>
          </li>-->
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contact')); ?>">যোগাযোগ</a>
          </li>
        </ul>
      </div>
     <a  class="language btn btn-success" href="eng" target="_blank"> English </a>
    </div>
  </nav>
  <!--/ Nav End /--><?php /**PATH /home/oem/Documents/radiCms/resources/views/frontend/common/navbar.blade.php ENDPATH**/ ?>