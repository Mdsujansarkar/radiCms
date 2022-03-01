@extends('frontend.master')
@section('meta')

  @foreach ($cvmetaTags as $meta_tag_single)
  <title>{{ __('লাকসাম-মনোহরগঞ্জ | দেলোয়ার হোসেন ফারুক') }}</title>
  <meta content="{{ $meta_tag_single->meta_tag }}" name="keywords">
  <meta content="{{ $meta_tag_single->site_tagline }}" name="description">
  @endforeach

  @endsection
@section('home')
<style>
  
    .title-single{
         font-size: 36px;
        font-family: 'HindSiliguri-Bold';
        margin-top: -28px;
        box-shadow: -1px 10px 11px 3px #d2cece;
        width: 370px;
        text-align: center;
        background-color: #caced2;
    }
    
    </style>
    
    <!--/ Intro Single star /-->
      <section class="intro-single about">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="title-single">
                <h1 class="title-single">লাকসাম-মনোহরগঞ্জ</h1>
                
              </div>
            </div>
         
          </div>
        </div>
      </section>
      <!--/ Intro Single End /-->
      <!--/ News Grid Star /-->
      <section class="news-grid grid">
        <div class="container">
          <div class="row">
          
          <div class="col-md-3">
                           
            <div class="left-1">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/3814.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                        
                        
                            <a href="https://dorponnews24.com/archives/4345"  target="_blank">
    
                                                
                            কুমিল্লার স্বাস্থ্য বিভাগকে আওয়ামী লীগ নেতা ফারুকের ২০০ পিপিই প্রদান</a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
              
                 
            <div class="left-2">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/1355.jpg" alt="" class="img-b img-fluid img-responsive">
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
                    <img src="images/politicalnews/8057.jpg" alt="" class="img-b img-fluid img-responsive">
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
                    <img src="images/politicalnews/1335.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="http://www.comillarkagoj.com/2020/03/29/104542.php"  target="_blank">
    
                         কুমিল্লার চিকিৎসক, সাংবাদিকদের সুরক্ষার সরঞ্জাম দিলেন প্রাক্তণ ছাত্রলীগ নেতা ফারুক</a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
                  
            
            <div  class="right-2">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/8047.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="https://www.kalerkantho.com/online/national/2020/03/31/892990?fbclid=IwAR38eqpGNCn2c8pTz59W28smVF-gvmGPXFncqgOpYB2900b6CY5U5dLeFpI"  target="_blank">
    
                                            রাজধানীতে ফ্রি সেবা দেবে অ্যাম্বুলেন্স, চালক-সহকারীদের পিপিই বিতরণ</a>
                            
                        </h5>
                    </div>
                
                                                        
                </div>
            </div>
        
         
        
          </div>
          
           
          
                 
           <div class="col-md-4">
           <div class="img-blog-box-b">
                    <img src="images/politicalnews/9700.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="political-single.html" >
    
                                            লাকসামের মফস্বলে এগিয়ে আতাকরা স্কুল এন্ড কলেজ </a>
                            
                        </h5>
                    </div>
                    
                </div>
           
           </div>
                   
            <div class="col-md-4">
             <div class="img-blog-box-b">
                    <img src="images/politicalnews/2345.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                    <h5 class="blog-title-right">
                        
                            
                            <a href="political-single (2).html" >
    
                                            লাকসামের আতাকরা স্কুল এন্ড কলেজের বিদায়ী সংবর্ধনা </a>
                            
                        </h5>
                    </div>
                    
                </div>
           
           </div>
                    <div class="col-md-4">
           
             <div class="img-blog-box-b">
                    <img src="images/politicalnews/3743.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="political-single (3).html" >
    
                                            লাকসামের আতাকরা স্কুল এন্ড কলেজের এসএসসি পরীক্ষার্থীদের বিদায় সংবর্ধনা</a>
                            
                        </h5>
                    </div>
                    
                </div>
           </div>
           
            <div class="col-md-4">
                    <div class="left-1">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/1195.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                        
                        
                            <a href="political-single (4).html" >
    
                                                
                            লাকসামের আতাকরা স্কুল এন্ড কলেজের এসএসসি পরীক্ষার্থীদের বিদায় সংবর্ধনা </a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
                    <div class="left-2">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/1241.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                            <a href="political-single (6).html" >

                               {{ __('মেয়র পদে আলোচিত প্রার্থী সাবেক কেন্দ্রীয় ছাত্রলীগ নেতা ফারুক')}}
                            </a>
                            
                        </h5>
                    </div>
                </div>
            </div>			
          </div>
          
           <div class="col-md-4">
                    <div class="right-1">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/5284.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                            <a href="political-single (5).html" >               
                            লাকসামে আওয়ামী লীগ সমর্থিত চেয়ারম্যান প্রার্থী এড. ইউনুছ ভূঁইয়া, ভাইস চেয়ারম্যান মহব্বত আলী ও মহিলা ভাইস চেয়ারম্যান রাশিদা বেগমের পক্ষে আতাকরায় ছাত্রলীগের সাবেক কেন্দ্রীয় সহ-সম্পাদক দেলোয়ার হোসেন ফারুকের গণসংযোগ করেন। </a>
                        </h5>
                    </div>
                </div>
            </div>
            
                    <div class="right-2">
                <div class="img-blog-box-b">
                    <img src="images/politicalnews/8714.jpg" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                            <a href="political-single (7).html" >
                                            {{ __('কুমিল্লা ৯ আসনে মনোনয়ন কিনলেন ছাত্রলীগ নেতা ফারুক') }} 
                            </a>
                            
                        </h5>
                    </div>
                </div>
            </div>
        <div class="bottom" style="border-bottom: 1px solid #E73000; width: 100%; height: 24px;">
            <div class="details fr">  <a href="page.html?id=4" style="background: #E73000; COLOR: #FFF;PADDING: 0 5PX; FLOAT: RIGHT;">এ বিভাগের আরো খবর</a></div>
        </div>			
          </div>       
          <div class="col-md-4">
            
             <section class="grid">
                            <div class="datepicker__container">
                              <label for="datepicker" class=""></label>
                              
                              <div class="js-datepicker" data-datepicker="true"></div>
                            </div>
                        </section>
          </div>
       </div>    
     </div> 
          </div>
          <!-- <div class="row">
            <div class="col-sm-12">
              <nav class="pagination-a">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <span class="ion-ios-arrow-back"></span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item next">
                    <a class="page-link" href="#">
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> -->
        </div>
      </section>
      <!--/ News Grid End /-->
@endsection