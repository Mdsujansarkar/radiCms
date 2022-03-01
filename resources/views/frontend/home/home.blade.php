@extends('frontend.master')
@section('meta')

  @foreach ($cvmetaTags as $meta_tag_single)
  <title>{{ __('দেলোয়ার হোসেন ফারুক') }}</title>
  <meta content="{{ $meta_tag_single->meta_tag }}" name="keywords">
  <meta content="{{ $meta_tag_single->site_tagline }}" name="description">
  @endforeach

  @endsection
@section('home')
    
<!--/ silder Star / hedaer-->
<section class="section-slider">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
           <div class="agent-avatar-boxs">
                <img src="{{ asset('frontend/assets/img/dhfaruk.jpeg') }}" alt="" class="agent-avatar img-fluid">
				
             </div> 
			<div class="text-cpation"> <h3>{{ __('তথ্যপ্রযুক্তি উদ্যোক্তা, পরামর্শক, সমাজকর্মী ও রাজনীতিবিদ') }}</h3> </div>			 
        </div>
		 <div class="col-sm-12 col-md-1">
            
        </div>
		<div class="col-sm-12 col-md-7">
              <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">

      
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/8304.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/8469.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/2494.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/1610.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/5155.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/8496.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/1489.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/5149.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/4933.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/7489.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/2423.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/6611.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/5956.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/7772.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/4900.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/4835.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/6181.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('frontend/assets/images/slider/7719.jpg') }})">
        <!-- <div class="overlay overlay-a"></div> -->
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="silder-fotter">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    <p class="intro-title-top"><a href="">
				 </a></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    
    </div>
  </div>
  <!--/ Carousel end /-->
        </div>
	</div>
</div>

</section>

<!--/ silder End / hedaer-->

 

<!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="title-single-box">
            <h1 class="title-single">দেলোয়ার হোসেন ফারুক সম্পর্কে</h1>
            <!-- <span class="color-text-a">Delowar Hossain Faruk</span> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-5">
              <div class="agent-avatar-box">
                <img src="{{ asset('frontend/assets/img/about-image.jpg') }}" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-7 section-md-t3">
              <div class="agent-info-box">
                <!-- <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">Delowar Hossain Faruk</h3>
                  </div>
                </div> -->
                <div class="agent-content mb-3">
                   <p class="content-d color-text-a">
             দেলোয়ার হোসেন ফারুক, তিনি সাধারণ ভাবে ফারুক নামে পরিচিত। তিনি কাজে কর্মে উদ্যমী  প্রকৃতির একজন যুবক। ফারুক দূরদর্শি সম্পন্ন  এবং সমূহ  সম্ভাব্যতায় কাজে পরিনত করিতে  পারেন এবং পরবর্তী কালের যে কোনো প্রকার ফলাফলে নিশ্চিত  হইতে পারেন। তিনি পরিস্থিতি  অনুযায়ী বিচক্ষণতার সাথে কাজে-কর্মে ব্যবস্থা  গ্রহণ করতে পারেন। তিনি বয়সে তরুণ কিন্তু নেতৃত্বদানে সফল একজন ব্যক্তি। তিনি একাধারে একজন সফল আইসিটি  উদ্যোক্তা, পরামর্শক, সমাজকর্মী, সংগঠক ও রাজনীতিবিদ। জাতির জনক বঙ্গবন্ধু শেখ মুজিবর রহমান এর আদর্শে অনুপ্রাণিত হয়ে ও মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনাকে আদর্শ ধরে তিনি তার রাজনৈতিক ও ব্যবসায়িক জীবন কে এগিয়ে নিয়ে যাচ্ছেন।<br>
তিনি বাংলাদেশ ছাত্রলীগের কেন্দ্রীয় দায়িত্ব পালনসহ বর্তমানে বাংলাদেশ আওয়ামীলীগ বিজ্ঞান ও প্রযুক্তি বিষয়ক কেন্দ্রীয় উপ-কমিটির সদস্য হিসাবে দায়িত্ব পালন করছেন। তিনি বাংলাদেশ এসোসিয়েশন অব সফ্টওয়্যার এন্ড ইনফরমেশন সার্ভিসেস (বেসিস) এর পরিচালক ছিলেন এবং বর্তমানে স্ট্যান্ডিং কমিটির চেয়ারম্যান হিসাবে দায়িত্ব পালন করছেন। ফারুক ঢাকা বিশ্ববিদ্যালয় থেকে স্বাস্থ্য অর্থনীতিতে স্নাতকোত্তর  ডিগ্রী অর্জনসহ ঢাকা কলেজ থেকে গণিতে স্নাতকোত্তর ডিগ্রী ও রয়েল ইউনিভার্সিটি থেকে ফাইন্যান্সে এমবিএ ডিগ্রী অর্জন করেন।<br><br>

আইসিটি শিল্পে ফারুকের আছে ১৪ বছরের অভিজ্ঞতা। তার প্রতিষ্ঠিত কোম্পানি  রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড সফটওয়্যার উন্নয়নের কাজের সাথে জড়িত। রেডিসন আইটি বাংলাদেশের অন্যতম শীর্ষস্থানীয় আইটি পরামর্শক ও সফটওয়্যার প্রযুক্তি প্রদানকারী প্রতিষ্ঠান। চতুর্থ শিল্প বিপ্লবে বাংলাদেশ কে নেতৃত্ব দানকারী এই প্রতিষ্ঠানে রয়েছে এন.এল.পি, মেশিন লার্নিং, ব্লকচেইন, ডেটা সায়েন্স ও আই.ও.টি প্রযুক্তি প্রদানকারী বিশেষজ্ঞ টিম। সেই সাথে ওয়েবসাইট  ডিজাইন এবং উন্নয়ন, ওয়েব ভিত্তিক প্রতিষ্ঠান  উৎস পরিকল্পনা  <span id="dots">...</span><span id="more"> (ইআরপি ), সার্চ ইঞ্জিন  অপটিমাইজেশন (এসইও) , হাসপাতাল ব্যাবস্থাপনা  সফটওয়্যার, স্কুল ব্যবস্থাপনা সফটওয়্যার,  বিজনেস ইন্টিলিজেন্স  এবং বিভিন্ন প্রকার কার্যক্রম এর সঙ্গে যুক্ত। <br>
রেডিসন ডিজিটাল টেকনোলজিস লিমিটেড সাফল্যের সাথে ডিজিটাল বাংলাদেশ গড়ার ক্ষেত্রে দেশি ও বিদেশী প্রতিষ্ঠান এর সঙ্গে কাজ করে যাচ্ছে। বিভিন্ন বিদেশী প্রতিষ্ঠান এর সাথে কাজ করার সুবাদে ফারুক আমেরিকা, জার্মানি, ফ্রান্স, নেদারল্যান্ডস, বেলজিয়াম, ইতালি, সুইজারল্যান্ড, চীন, ভারত, জাপান, ইন্দোনেশিয়া, মালয়েশিয়া, সিঙ্গাপুর, ফিলিপাইন, নেপাল, যুক্তরাজ্য, অস্ট্রেলিয়া সহ বিশ্বের অনেক দেশ ভ্রমণ করেছেন এবং আইসিটি ভিত্তিক অনেক ইভেন্টে অংশ নিয়েছেন।<br>
রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড ২০১৮ সালের বেসিস ন্যাশনাল আই সি টি অ্যাওয়ার্ডে চ্যাম্পিয়ন হবার গৌরব অর্জন করেছে । এছাড়াও ২০১৭ সালের আইসিটি এক্সপোতে ফ্রিল্যান্সারদের সম্মেলনে দেশ সেরা পুরস্কারসহ ১৫ টি পুরুস্কারের মধ্যে সাতটি পুরস্কারই পেয়েছে রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড।
দেলোয়ার হোসেন ফারুক র‌েডিসন বিল্ডার্স অ্যান্ড হাউজিং ডেভলপমেন্ট লিমিটেড, র‌েডিসন মিডিয়া হাউস, রেডিসন ট্রেড ইন্টারন্যাশানাল, দয়াল বাবা ডট কম, বিনোদন ঘর প্রতিষ্ঠা করেন। তিনি দেশের অন্যতম জনপ্রিয় দৈনিক পত্রিকা দৈনিক আমাদের কাগজ এর প্রতিষ্ঠাতা। তিনি পত্রিকাটির সম্পাদক হিসাবেও প্রায় এক দশক ধরে দায়িত্ব পালন করছেন। তার বাবা একজন প্রখ্যাত সমাজকর্মী এবং তাঁর উপযুক্ত ছেলে হিসাবে তিনি তাঁর ভাল নামটি ধরে রেখেছিলেন। <br>
দেলোয়ার হোসেন ফারুক র‌েডিসন বিল্ডার্স অ্যান্ড হাউজিং ডেভলপমেন্ট লিমিটেড, র‌েডিসন মিডিয়া হাউস, রেডিসন ট্রেড ইন্টারন্যাশানাল, দয়াল বাবা ডট কম, বিনোদন ঘর প্রতিষ্ঠা করেন। তিনি দেশের অন্যতম জনপ্রিয় দৈনিক পত্রিকা দৈনিক আমাদের কাগজ এর প্রতিষ্ঠাতা। তিনি পত্রিকাটির সম্পাদক হিসাবেও প্রায় এক দশক ধরে দায়িত্ব পালন করছেন। তার বাবা একজন প্রখ্যাত সমাজকর্মী এবং তাঁর উপযুক্ত ছেলে হিসাবে তিনি তাঁর ভাল নামটি ধরে রেখেছিলেন। 
দেলোয়ার হোসেন ফারুক তার সামাজিক কাজ-কর্মের জন্যই অত্যধিক সুপরিচিত। তিনি বেসরকারী সংস্থা হিসাবে পরিবর্তন ফাউন্ডেশন ও বেটার টুমরো প্রতিষ্ঠা করেছিলেন। তিনি দেশের শিক্ষাব্যবস্থার উন্নয়নে অনেক অবদান রেখেছেন। তিনি কুমিল্লার আতাকরা উচ্চ বিদ্যালয় ও কলেজ এবং লাকসাম কম্পিউটার প্রশিক্ষণ ইনস্টিটিউট প্রতিষ্ঠা করেন।
             </span> <button onclick="myFunction()" id="myBtn">Read more</button></p>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Agent Single End /-->
  
  
  
  <!--/ Video Star /-->
  <section class="section-services section-t8 video-div">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap justify-content-between">
            <div class="title-box">
             <center> <h2 class="title-a video-t">গুরুত্বপূর্ণ ভিডিও</h2></center>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

       
      <div class="col-md-12">
 
 <!-- Define the Div for Gallery -->
    <!-- 1. Add class html5gallery to the Div -->
    <!-- 2. Define parameters with HTML5 data tags -->
	<div style="display:none;margin:0 auto;width:100%" class="html5gallery" data-skin="mediapage" data-resizemode="fill">
	
	 <div class="hide" style="visibility: hidden;">
	 
	   <!--	 <a href="https://youtu.be/Jr5urV8DF00"><img src="https://img.youtube.com/vi/Jr5urV8DF00/0.jpg" alt="করোনা রোগীর অবস্থান সনাক্ত করবে রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড এর “আইডেন্টিফায়ার” অ্যাপ"></a>
		 -->
		  <a href="https://youtu.be/cWKZbDPORtk"><img src="https://img.youtube.com/vi/cWKZbDPORtk/0.jpg" alt="মাননীয় মন্ত্রী মোস্তাফা জব্বার তথ্যপ্রযুক্তি উদ্যোক্তা দেলোয়ার হোসেন ফারুক সর্ম্পকে যা বলেন"></a>
	 
	  
		<a href="https://youtu.be/mMe81D6W2mU"><img src="https://img.youtube.com/vi/mMe81D6W2mU/0.jpg" alt="দেলোয়ার হোসেন ফারুক মাছরাঙ্গা টেলিভিশনের রাঙ্গা সকালের (প্রথম অংশ)"></a>
	 
               
		<a href="https://youtu.be/PogkEcfgHLM"><img src="https://img.youtube.com/vi/PogkEcfgHLM/0.jpg" alt="দেলোয়ার হোসেন ফারুক মাছরাঙ্গা টেলিভিশনের রাঙ্গা সকালের (দিতো অংশ)"></a>
	   	
             
        </div>	
        </div> 
		
		 <!-- Define the Div for Gallery -->
	
</div>


<div class="col-md-3">
  <div class="card-box-c foo">
   
	<div class="card-body-c">
	 <a href="https://youtu.be/Jr5urV8DF00" target="_blank"><img src="https://img.youtube.com/vi/Jr5urV8DF00/0.jpg" alt="করোনা রোগীর অবস্থান সনাক্ত করবে রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড এর “আইডেন্টিফায়ার” অ্যাপ।" class="img-fluid"></a>
	  <p class="content-t">
		করোনা রোগীর অবস্থান সনাক্ত করবে রেডিসন ডিজিটাল টেকনোলজিস্ লিমিটেড ....
       </p>
	</div>
  </div>
</div>  


 <div class="col-md-3">
  <div class="card-box-c foo">
   
	<div class="card-body-c">
	  <a href="https://youtu.be/mMe81D6W2mU" target="_blank"><img src="https://img.youtube.com/vi/mMe81D6W2mU/0.jpg" alt="দেলোয়ার হোসেন ফারুক মাছরাঙ্গা টেলিভিশনের রাঙ্গা সকালের (প্রথম অংশ)"  class="img-fluid" ></a>
	  		
              <p class="content-t">
			  
				দেলোয়ার হোসেন ফারুক মাছরাঙ্গা টেলিভিশনের রাঙ্গা সকালের (প্রথম অংশ)
              </p>
	
	</div>
  </div>
</div> 
 
<div class="col-md-3">
  <div class="card-box-c foo">
   
	<div class="card-body-c">
	 <a href="https://youtu.be/PogkEcfgHLM" target="_blank"><img src="https://img.youtube.com/vi/PogkEcfgHLM/0.jpg" alt="দেলোয়ার হোসেন ফারুক মাছরাঙ্গা টেলিভিশনের রাঙ্গা সকালের (২ য় অংশ)" class="img-fluid"></a>
	    <p class="content-t">
				দেলোয়ার হোসেন ফারুক মাছরাঙ্গা টেলিভিশনের রাঙ্গা সকালের (২ য় অংশ)
          </p>
	</div>
  </div>
</div>  

<div class="col-md-3">
  <div class="card-box-c foo">
   
	<div class="card-body-c">
	 <a href="https://youtu.be/8N15qbytPx0" target="_blank"><img src="https://img.youtube.com/vi/8N15qbytPx0/0.jpg" alt="(১৪/৪/২০২০) করোনাভাইরাস (COVID-19) এর সর্বশেষ পরিস্থিতি নিয়..." class="img-fluid"></a>
	   <p class="content-t">
			{{ '(১৪/৪/২০২০) করোনাভাইরাস (COVID-19) এর সর্বশেষ পরিস্থিতি নিয়...' }}
          </p>
	</div>
  </div>
</div>  
      </div>
    </div>
  </section>
  <!--/ Video End /-->

  
  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">{{ 'সম্প্রতিক ঘটনা প্রবাহ' }}</h2>
            </div>
          </div>
        </div>
      </div>
      </div>
	  
       <div class="container">
      <div class="row">
	  
		  <div class="col-md-3">
	   				
		<div class="left-1">
			<div class="img-blog-box-b">
				<img src="{{ asset('frontend/assets/images/politicalnews/8047.jpg') }}" alt="" class="img-b img-fluid img-responsive">
			</div>
			<div class="blog-body">                
				<div class="blog-header">
					<h5 class="blog-title-left">
					
					
						<a href="https://www.kalerkantho.com/online/national/2020/03/31/892990?fbclid=IwAR38eqpGNCn2c8pTz59W28smVF-gvmGPXFncqgOpYB2900b6CY5U5dLeFpI"  target="_blank">

											
						রাজধানীতে ফ্রি সেবা দেবে অ্যাম্বুলেন্স, চালক-সহকারীদের পিপিই বিতরণ</a>
						
					</h5>
				</div>
			</div>
		</div>
		
		  
			 
		<div class="left-2">
			<div class="img-blog-box-b">
				<img src="{{ asset('frontend/assets/images/politicalnews/1355.jpg') }}" alt="" class="img-b img-fluid img-responsive">
			</div>
			<div class="blog-body">                
				<div class="blog-header">
					<h5 class="blog-title-left">
					
						
						<a href="https://www.jugantor.com/capital/294436/?__cf_chl_captcha_tk__=79a98e50b2f58f28e487199350dccfbec1600525-1588442336-0-AWjd0VsbDcf0A3Qjc1kyr61k5YMxMhEOghYuycwicmSUQs6Eiyt7KQJvqgW8FKHdctH2bR0JPs5Ybw7Exq6NTs_jUCbCxslsJrFv01bgf37sVR3vJjYUx9u0HvOaDbIV8iyE89JQiRqtODke408DTLq1rtNg6HXBIyIoWj-T6TuzhRU34axL0wA_sUDQKaKUm6kH9szFpWm_ee9mpuIGSUWXY2dNCep613WpnmqJJlL14ziQnJZ3igJfKu4YHakU5ET38KPAOxxe6P0M7Ih05lffKYhzo-82uTn2NRvmBFDhKnQHH4FKH7KrfuQGkriBJXPB0kNpMX1fPy0qOjS83G88CGkdOLj8-JlHZNpaYhL1QrfnW7tzagg_J9TxDOKhioCZjjeEKMK4qCgvDZsIUqCzwuWG2NhOe1c0cjr6ndSsByrb8oR-yQj55pu3lID5c5KQbCHsjimmo4ywrL0rpMP13kk6suiAiEXma4hdfxlPhlzGbg4aDta8xExARtYJL8fYYz9hKtgoZq404vZbmAM"  target="_blank">

										ঢাকা ও কুমিল্লায় পিপিই, মাস্ক, হ্যান্ডগ্লাভস ও হ্যান্ডস্যানিটাইজার বিতরণ</a>
						
					</h5>
				</div>
			</div>
		</div>

	
	  </div>
	  <div class="col-md-6">
	  
			  
				 
			<div class="img-blog-box-b">
				<img src="{{ asset('frontend/assets/images/politicalnews/8057.jpg') }}" alt="" class="img-b img-fluid img-responsive">
			</div>
			<div class="blog-body">                
				<div class="blog-header">
					<h3 class="blog-title">
						<a href="https://www.jugantor.com/country-news/303015/?__cf_chl_jschl_tk__=eae0dba296e202ec7b7a143b01e79702fe984bf0-1588229266-0-Afq8ksX5zerVqeKyJlhu_6TAC09MNNrhzegE59ngr_5wRwTmNk0Yo-mrO5aXi2aLQQ8RfgZdKBN8dxzjaS6P634f7a2VdsKNrz5dI5GOFS9Zh-wUljGeloQGVZ_HLW5t1uHQXeYdFMp3bS1gefnRAzlhsGRhvRYhStoSFPrtZKgFce-3iZKO3dEXP3RoEIAXCt9UBfqTubnxKnwGBfiuGeLLVuSt-gW4hnFHuJdsD90IUvjeDZ9MHv6oPOdz5rGJoy8VWFI85QDz8z6N_QcKyDEcAxj82hGl3Akji_3ryNxz"  target="_blank">

										লাকসামে তিন হাজার পরিবারের পাশে রেডিসন টেকনোলজিস</a>
						
					</h3>
				</div>
			</div>
	  </div>
	  <div class="col-md-3">
	    <div  class="right-1">
			<div class="img-blog-box-b">
				<img src="{{ asset('frontend/assets/images/politicalnews/1322.jpg') }}" alt="" class="img-b img-fluid img-responsive">
			</div>
			<div class="blog-body">                
				<div class="blog-header">
					<h5 class="blog-title-right">
						<a href="http://patheo24.com/%E0%A6%86%E0%A6%B2%E0%A7%80%E0%A6%97%E0%A7%87%E0%A6%B0-%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%BE%E0%A6%A8-%E0%A6%93-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF%E0%A6%AA%E0%A7%8D/"  target="_blank">

					 আ’লীগের বিজ্ঞান ও তথ্যপ্রযুক্তি উপকমিটির সদস্য ফারুক</a>
					</h5>
				</div>
			</div>
		</div>
		<div  class="right-2">
			<div class="img-blog-box-b">
				<img src="{{ asset('frontend/assets/images/politicalnews/5344.jpg') }}" alt="" class="img-b img-fluid img-responsive">
			</div>
			<div class="blog-body">                
				<div class="blog-header">
					<h5 class="blog-title-right">
						<a href="https://www.jugantor.com/tech/5658/%E0%A6%AC%E0%A7%87%E0%A6%B8%E0%A6%BF%E0%A6%B8%E0%A7%87-%E0%A6%AE%E0%A7%8B%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AB%E0%A6%BE-%E0%A6%9C%E0%A6%AC%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%B0-%E0%A6%B6%E0%A7%82%E0%A6%A8%E0%A7%8D%E0%A6%AF-%E0%A6%86%E0%A6%B8%E0%A6%A8%E0%A7%87-%E0%A6%A6%E0%A7%87%E0%A6%B2%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0-%E0%A6%B9%E0%A7%8B%E0%A6%B8%E0%A7%87%E0%A6%A8-%E0%A6%AB%E0%A6%BE%E0%A6%B0%E0%A7%81%E0%A6%95"  target="_blank">
										বেসিসে মোস্তাফা জব্বারের শূন্য আসনে দেলোয়ার হোসেন ফারুক
                        </a>
					</h5>
				</div>									
			</div>
		</div>   
	  </div>
    </div>
	<div class="bottom" style="border-bottom: 1px solid #E73000; width: 100%; height: 24px;">
		<div class="details fr">  <a href="political.html" style="background: #E73000; COLOR: #FFF;PADDING: 0 5PX; FLOAT: RIGHT;font-family: 'HindSiliguri-Bold';font-size: 22px;line-height: 31px; font-weight: 600;">এ বিভাগের আরো খবর</a></div>
	</div>	
	
	  </div>
	</div>
  </section>
  <!--/ News End /-->
@endsection