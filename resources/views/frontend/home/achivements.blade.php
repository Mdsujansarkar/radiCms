@extends('frontend.master')
@section('meta')

  @foreach ($cvmetaTags as $meta_tag_single)
  <title>{{ __('কৃতিত্ব | দেলোয়ার হোসেন ফারুক') }}</title>
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
                <h1 class="title-single">কৃতিত্ব</h1>
                
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
                    <img src="{{ asset('frontend/assets/images/politicalnews/5874.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                        
                        
                            <a href="https://www.bd-pratidin.com/tech-world/2017/10/21/274190"  target="_blank">
    
                                                
                            ফ্রিল্যান্সার সম্মেলনে ৭টি পুরস্কার পেল রেডিসন টেকনোলজি</a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
              
                 
            <div class="left-2">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/5874.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                        
                            
                            <a href="https://www.coxsbazarbarta.com/%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A7%80%E0%A7%9F-%E0%A6%B8%E0%A6%AB%E0%A6%9F%E0%A6%93%E0%A7%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%B0-%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%A8%E0%A7%9F%E0%A6%A8%E0%A7%87-%E0%A6%95%E0%A6%BE%E0%A6%9C-%E0%A6%95%E0%A6%B0%E0%A6%A4%E0%A7%87-%E0%A6%9A%E0%A6%BE%E0%A6%A8-%E0%A6%A6%E0%A7%87%E0%A6%B2%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0/1564"  target="_blank">
    
                                            দেশীয় সফটওয়্যার উন্নয়নে কাজ করতে চান দেলোয়ার</a>
                            
                        </h5>
                    </div>
                </div>
            </div>
    
        
          </div>
          <div class="col-md-6">
          
                  
                     
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/8095.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h3 class="blog-title">
                        
                            
                            <a href="https://ajker-comilla.com/%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF-%E0%A6%93-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AF%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%96%E0%A6%BE/"  target="_blank">
    
                                            দেশের তথ্য ও প্রযুক্তি খাতে অবদান রেখে চলেছেন কুমিল্লার গর্ব দেলোয়ার হোসেন ফারুক</a>
                            
                        </h3>
                    </div>
                    
                </div>
                
                
          </div>
          <div class="col-md-3">
         
           
           
            <div  class="right-1">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/9660.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="https://www.jugantor.com/tech/5658/%E0%A6%AC%E0%A7%87%E0%A6%B8%E0%A6%BF%E0%A6%B8%E0%A7%87-%E0%A6%AE%E0%A7%8B%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AB%E0%A6%BE-%E0%A6%9C%E0%A6%AC%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%B0-%E0%A6%B6%E0%A7%82%E0%A6%A8%E0%A7%8D%E0%A6%AF-%E0%A6%86%E0%A6%B8%E0%A6%A8%E0%A7%87-%E0%A6%A6%E0%A7%87%E0%A6%B2%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0-%E0%A6%B9%E0%A7%8B%E0%A6%B8%E0%A7%87%E0%A6%A8-%E0%A6%AB%E0%A6%BE%E0%A6%B0%E0%A7%81%E0%A6%95?__cf_chl_jschl_tk__=150b6893f451deafa2f3b307c029bb0521ec33d2-1588447755-0-ASh-7X58oppnwvJK8WKYqO7Pd2Zkbn6mEgJOrrbO2rtaUL30gUUwi99BBxbrnxJTS78Sypd8FnGMlc2gca7WAnkhhXadL0503uah4aBxTUtRAdSLOndMUVZwrY479ksjEDj6Gb8p3v6gJV5jKE1SeK37Q0n4MwCoqJj8oINS3v7VhMFWEwjQ46Qx_SQ2JaH53v6MCVx3izH07PkZ3rSQXxC4sgak2FakvtVidix6ty6-RwRRJgxPJmHaiZoSq2unOyAA2sn3wguolmZ3QM8bWaWoeisXPg3iUVDrtxT_RjMihFfcM0mvSzktpnxtC8kAiMyWX1x1oDDNJbIXa3cDj9O0dxhgGgpSycZ3avkCmVvvnJYlwCWjeGgrEMgqSAxCNExn-KVOKlcy738AHU2sUHJyCrgUPGOwprWmoZu4A3kmVlSmf-tP0fuvacsJ27O-cXa2hLqYftWOh58FeOtgJKSGKGbkylMTs_SN065I1Rh6RQrsk1MY7SoodV8NKNLXItcR68ApLnd42U6zDeSr3GPpfzYYVk3V23Cj9UZFLTXTYpAvV5O7hOJMWZd9U826aNulm81AVzcwtVtBmDWQYqgI-z5o5UE2SWz-GSpgq4Jt6NewmOVcc_a7PLXUFPyrQEGWwVYIsGktJpalycYOydYva0Xkbvb7CZcDNXvwVuDzvrahF4dA_FkHGWVfMxgcJW2U_P7_GlIYNx61HZ35tRx73LL0p06W71o4ZIjO-DICzisRuF_nPI0ntseKqSs4e2PvZll87gbpgmB1Q21h0OmaxajiqqVWBTVN-UGzi_OpIeLhecWb48n5rr5wR1q8vcNb1QFmDPqqcQL5OhTh1vwnMetwdNiUAqtJ2E0zSefX"  target="_blank">
    
                         বেসিসে মোস্তাফা জব্বারের শূন্য আসনে দেলোয়ার হোসেন ফারুক</a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
                  
            
            <div  class="right-2">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/1664.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="http://dailydeshjanata.com/news/39206"  target="_blank">
    
                                            বেসিসের নতুন সভাপতি আলমাস কবীর, পরিচালক হলেন দেলোয়ার হোসেন ফারুক</a>
                            
                        </h5>
                    </div>
                
                                                        
                </div>
            </div>
        
         
        
          </div>
          
           
          
                 
           <div class="col-md-4">
           <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/9843.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="political-single (8).html" >
    
                                            লাকসাম পৌর নির্বাচন ঘিরে প্রার্থীদের দৌঁড়ঝাপ </a>
                            
                        </h5>
                    </div>
                    
                </div>
           
           </div>
                   
            <div class="col-md-4">
             <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/9700.jpg') }}" alt="" class="img-b img-fluid img-responsive">
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
                    <img src="{{ asset('frontend/assets/images/politicalnews/4772.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                            <a href="political-single (9).html" >
                                            {{ __('তথ্য-প্রযুক্তি সমৃদ্ধ উন্নত লাকসাম পৌরসভা গড়াই লক্ষ্য') }}
                            </a>
                        </h5>
                    </div>
                    
                </div>
           </div>
           
            <div class="col-md-4">
                    <div class="left-1">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/2345.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                        
                        
                            <a href="political-single (2).html" >
    
                                                
                            লাকসামের আতাকরা স্কুল এন্ড কলেজের বিদায়ী সংবর্ধনা </a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
                    <div class="left-2">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/3743.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-left">
                        
                            
                            <a href="political-single (3).html" >
    
                                            লাকসামের আতাকরা স্কুল এন্ড কলেজের এসএসসি পরীক্ষার্থীদের বিদায় সংবর্ধনা</a>
                            
                        </h5>
                    </div>
                </div>
            </div>			
          </div>
          
           <div class="col-md-4">
                    <div class="right-1">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/1195.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                        
                            <a href="political-single (4).html" >
    
                                                
                            লাকসামের আতাকরা স্কুল এন্ড কলেজের এসএসসি পরীক্ষার্থীদের বিদায় সংবর্ধনা </a>
                            
                        </h5>
                    </div>
                </div>
            </div>
            
                    <div class="right-2">
                <div class="img-blog-box-b">
                    <img src="{{ asset('frontend/assets/images/politicalnews/1241.jpg') }}" alt="" class="img-b img-fluid img-responsive">
                </div>
                <div class="blog-body">                
                    <div class="blog-header">
                        <h5 class="blog-title-right">
                        
                            
                            <a href="political-single (6).html" >
    
                                            মেয়র পদে আলোচিত প্রার্থী সাবেক কেন্দ্রীয় ছাত্রলীগ নেতা ফারুক</a>
                            
                        </h5>
                    </div>
                </div>
            </div>
        <div class="bottom" style="border-bottom: 1px solid #E73000; width: 100%; height: 24px;">
            <div class="details fr">  <a href="page.html?id=3" style="background: #E73000; COLOR: #FFF;PADDING: 0 5PX; FLOAT: RIGHT;">এ বিভাগের আরো খবর</a></div>
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
  <!--/ News End /-->
@endsection