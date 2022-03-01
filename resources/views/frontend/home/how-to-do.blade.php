@extends('frontend.master')
@section('meta')

  @foreach ($cvmetaTags as $meta_tag_single)
  <title>{{ __('কিভাবে করবো | দেলোয়ার হোসেন ফারুক') }}</title>
  <meta content="{{ $meta_tag_single->meta_tag }}" name="keywords">
  <meta content="{{ $meta_tag_single->site_tagline }}" name="description">
  @endforeach

  @endsection
@section('home')
<style>
    ul li {
        color: #000000;
        /* text-align: justify; */
        /* font-weight: normal; */
        font-size: 17px;
        line-height: 25px;
        /* font-family: montserrat,sans-serif; */
        font-family: 'HindSiliguri-Regular';
    }
    
    </style>
    <br>
    <br>
    
      <!--/ Agent Single Star /-->
      <section class="agent-single">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="row">
                
                <div class="col-md-12 section-md-t3">
                  <div class="agent-info-box">
                    <div class="agent-title">
                     
                    </div> 
                    <div class="agent-content mb-3">
                     <h1 class="title-single" style="font-family: 'HindSiliguri-Bold';font-weight: 600;">কিভাবে করবো </h1>
                      <p class="content-d color-text-a">
                        জননেত্রী শেখ হাসিনার আদর্শে অনুপ্রাণিত হয়ে আমার "জয় বাংলা" লাকসাম-মনোহরগঞ্জ একটি সুশিক্ষিত, দক্ষ, পরিশ্রমী এবং রুচিশীল প্রজন্ম গড়ে তোলা।
                      </p>
                        <p class="content-d color-text-a">
                        <b>জনশক্তি উন্নয়ন:</b>
                        <ul>
                            <li>ক্যারিয়ার পরামর্শ সভা।</li>
                            <li>সবার জন্য দক্ষতা প্রশিক্ষণ।</li>
                            <li>প্রতিটি ইউনিয়নে দক্ষতা কেন্দ্র।</li>
                        </ul>
                      </p>
                       <p class="content-d color-text-a">
                        <b>জনগণের দোরগোড়ায় সরকারী সেবা:</b> 
                        <ul>
                            <li>এমপি / এমপি হেল্প ডেস্ক (প্রতি ১০,০০০ লোকের জন্য একটি হেল্প ডেস্ক, যেখানে ডেডিকেটেড কর্মীদের মাধ্যমে প্রত্যাশা / অভিযোগ রেকর্ড করা হয় এবং একটি নির্দিষ্ট সময়ের মধ্যে সমাধান করা হয়)</li>
                        </ul>
                      </p>
                      
                       <p class="content-d color-text-a">
                        <b>সর্বশেষ প্রযুক্তি এবং দক্ষতার উপর ভিত্তি করে কৃষি:</b> 
                        
                        <ul class="textul">
                            <li>কৃষি পরামর্শ সভা।</li>
                            <li>প্রতিটি কৃষককে আধুনিক প্রযুক্তি এবং কৌশলগুলির জন্য বছরে কমপক্ষে দুবার প্রশিক্ষণ দেওয়া।</li>
                            <li>কৃষি প্রযুক্তি পণ্য সহজলভ্যতা এবং সহজ ক্রয়ের ক্ষেত্রে বিশেষ সুবিধা।</li>
                            <li>কৃষি পণ্য সংরক্ষণের জন্য কমিউনিটি স্টোরেজ এবং হিমাগার।</li>
                            <li>আধুনিক সুবিধাসহ কৃষি পণ্যের জন্য বিশেষ বাজার প্রতিষ্ঠা।</li>
                            <li>অনলাইন বাজার / বাজার-স্থান খ্যাতি</li>
                        </ul>
    
                      </p> 
                      <p class="content-d color-text-a">
                        <b>জনস্বাস্থ্য:</b> লাকসাম-মনোহরগঞ্জের মানুষের স্বাস্থ্য সম্পর্কে সচেতনতা তৈরি করে স্বাস্থ্য কাঠামোটিকে একটি সংস্কৃতি হিসাবে গড়ে তুলতে চাই। সচেতনতার মাধ্যমে যে রোগগুলি প্রতিরোধযোগ্য এবং নিরাময়যোগ্য তা থেকে আমি মুক্তি পেতে চাই। এছাড়াও, আমি সামাজিক পরিষেবাগুলি এবং স্বেচ্ছাসেবীদের স্বাস্থ্যসেবা সরবরাহের প্রতিশ্রুতিতে আনতে চাই। আমরা নিশ্চিত করতে চাই যে জনস্বাস্থ্য পরিষেবাগুলি সঠিকভাবে উপলব্ধ সহজলভ্য আমরা বেসরকারী খাতে স্বাস্থ্যসেবার নামে অনৈতিক বাণিজ্য বন্ধ করতে চাই।
                      </p> 
                      <p class="content-d color-text-a">
                        <b>ব্যবসায় বাণিজ্য এবং শিল্প উন্নয়ন:</b> আমরা লাকসাম-মনোহরগঞ্জের ভৌগলিক ও জনশক্তি নির্ভর আর্থিক সম্ভাবনার পূর্ণ ব্যবহার করতে চাই। এছাড়াও আমরা জনগণকে এমন একটি শিল্প বিনিয়োগ বান্ধব পরিবেশ তৈরি করতে চাই যাতে দেশের নামী-বিদেশি বিনিয়োগকারীরা লাকসাম-মনোহরগঞ্জে শিল্প কারখানা ও বাজার স্থাপনে আগ্রহী হন।
                      </p>
                      <p class="content-d color-text-a">
                        <ul>
                            <li>যথাযথ ধর্মীয় শিক্ষা নিশ্চিত করা</li>
                            <li>মৌলবাদ ও জঙ্গিবাদমুক্ত বহুবচনবাদী সমাজ প্রতিষ্ঠা</li>
                            <li>সুশাসন, বিচার ও আইনী সহায়তা</li>
                            <li>দুর্যোগ ব্যবস্থাপনা এবং ঝুঁকি প্রশমন</li>
                        </ul>
                        <br>
    
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Agent Single End /-->
    
@endsection