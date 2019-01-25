<!----------Services----------------------------------->
<?php
$melbourne_options=hotel_melbourne_theme_default_data();
$home_service_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
if($home_service_setting['service_section_enabled'] == 1 ) { ?>

  <section class="services-section service_ja" style="background: rgb(255,136,0,0.3);display:none;" data-aos="fade-up"  data-aos-duration="500">
     <div class="container" style="padding: 30px;text-align: center;">
       <div class="row" style="text-align: center;display: inline-flex;">
         <div class="circle one" data-aos="zoom-in" data-aos-duration="1000" style="background: url(<?php echo esc_url($home_service_setting['service_one_image']);  ?>) no-repeat;background-size: 100% 100%;">
           <div class="circle-overlay">
             <img src="<?php echo esc_url($home_service_setting['service_one_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
             <div class="service-icon show-title">
               <span>精子提供プログラム</span>
             </div>
             <div class="room-col">
               <div class="overly">
                 <span>
                   <a href="<?php echo esc_url($home_service_setting['service_one_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
                 </span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="row show-sm-circle" style="text-align: center;height: auto;display: inline-flex;">
         <div class="circle two"  data-aos="zoom-in" data-aos-duration="1000" style="background: url(<?php echo esc_url($home_service_setting['service_two_image']);  ?>) no-repeat;background-size: 100% 100%;">
           <div class="circle-overlay">
             <img src="<?php echo esc_url($home_service_setting['service_two_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
             <div class="service-icon show-title">
               <span>代理母プログラム</span>
             </div>
             <div class="room-col">
               <div class="overly">
                 <span>
                   <a href="<?php echo esc_url($home_service_setting['service_two_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
                 </span>
               </div>
             </div>
           </div>
         </div>
         <div class="circle three" data-aos="zoom-in" data-aos-duration="1500"  style="background: url(<?php echo esc_url($home_service_setting['service_three_image']);  ?>) no-repeat;background-size: 100% 100%;">
           <div class="circle-overlay">
             <img src="<?php echo esc_url($home_service_setting['service_three_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
             <div class="service-icon show-title">
               <span>卵子提供プログラム</span>
             </div>
             <div class="room-col">
               <div class="overly">
                 <span>
                   <a href="<?php echo esc_url($home_service_setting['service_two_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
                 </span>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
<div class="clearfix"></div>
<section class="services-section service_ja" style="background: rgb(255,255,255,0.5);display:none;" data-aos="fade-up"  data-aos-duration="500">
 <div class="container">
   <div class="row">
     <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="1000">
       <div class="home-gallery">
         <div class="section-title">
           <h1>体験談</h1>
         </div>
         <div class="row" style="min-height: 300px;margin:0;padding:20px;">
           <div class="col-md-6 col-sm-12">
             <img src="<?php echo esc_url($home_service_setting['service_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           </div>
           <div class="col-md-6 col-sm-12">
             <div class="margin-0 margin-sm-top-10">
               代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版
               代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版
             </div>
             <a class="main-btn control-form mlefttp-jp" href="<?php echo esc_url($home_service_setting['service_ex_link']); ?>">Read More <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="2000">
       <div class="home-gallery hg-mrg">
         <div class="section-title">
           <h1>Q &amp; A</h1>
         </div>
         <div class="row" style="min-height: 300px;margin:0;padding:20px;">
           <div class="col-md-6 col-sm-12">
             <img src="<?php echo esc_url($home_service_setting['service_qa_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           </div>
           <div class="col-md-6 col-sm-12">
             <ul style="line-height: 2.5;" class="margin-0 padding-0">
               <li>Question 1?</li>
               <li>Question 2?</li>
               <li>Question 3?</li>
               <li>Question 4?</li>
             </ul>
             <a class="main-btn control-form mrighttp-jp" href="<?php echo esc_url($home_service_setting['service_qa_link']); ?>" >Read More <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>

<!--star of 問い合わせ  -->
<section class="services-section service_ja" style="background: rgb(0,0,0,0.3);display:none;" data-aos="fade-up"  data-aos-duration="500">
 <div class="container show-mail-wechat">
   <div class="row">
     <div class="col-md-12 col-sm-12 service-box" data-aos="zoom-in" data-aos-duration="1000">
       <div class="home-gallery">
         <!-- <div class="section-title">
           <h1>問い合わせ</h1>
         </div> -->
         <div class="col-md-4 col-sm-12 service-box mail" style="text-align:center">
           <img src="<?php echo esc_url($home_service_setting['service_mail_image']); ?>" style="height:auto;width:60%;object-fit:unset !important;margin: 0 auto;" class="img-responsive myBtn" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div>
         <div class="col-md-4 col-sm-12 service-box" style="text-align:center;">
           <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>"  style="width:60%;height: auto;margin: 0 auto;object-fit:unset !important;" class="img-fluid">
         </div>
         <div class="col-md-4 col-sm-12 service-box wechat">
           <img src="<?php echo esc_url($home_service_setting['service_wechat_image']); ?>" class="wechat" style="height:auto;width:60%;object-fit:unset !important;margin: 0 auto;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <!-- <div class="show-bar-code">
             <i class="fa fa-close"></i>
             <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           </div> -->
         </div>
       </div>
     </div>
   </div>
 </div>
</section>

<!-- English Language  -->
<section class="services-section service_en" style="background: rgb(255,136,0,0.3);display:none;" data-aos="fade-up"  data-aos-duration="500">
   <div class="container" style="padding: 30px;text-align: center;">
     <div class="row" style="text-align: center;display: inline-flex;">
       <div class="circle one" data-aos="zoom-in" data-aos-duration="1000" style="background: url(<?php echo esc_url($home_service_setting['service_one_image']);  ?>) no-repeat;background-size: 100% 100%;">
         <div class="circle-overlay">
           <img src="<?php echo esc_url($home_service_setting['service_one_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="service-icon show-title">
             <span>Sperm provision program</span>
           </div>
           <div class="room-col">
             <div class="overly">
               <span>
                 <a href="<?php echo esc_url($home_service_setting['service_one_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
               </span>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="row show-sm-circle" style="text-align: center;height: auto;display: inline-flex;">
       <div class="circle two"  data-aos="zoom-in" data-aos-duration="1000" style="background: url(<?php echo esc_url($home_service_setting['service_two_image']);  ?>) no-repeat;background-size: 100% 100%;">
         <div class="circle-overlay">
           <img src="<?php echo esc_url($home_service_setting['service_two_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="service-icon show-title">
             <span>Surrogate mother program</span>
           </div>
           <div class="room-col">
             <div class="overly">
               <span>
                 <a href="<?php echo esc_url($home_service_setting['service_two_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
               </span>
             </div>
           </div>
         </div>
       </div>
       <div class="circle three" data-aos="zoom-in" data-aos-duration="1500"  style="background: url(<?php echo esc_url($home_service_setting['service_three_image']);  ?>) no-repeat;background-size: 100% 100%;">
         <div class="circle-overlay">
           <img src="<?php echo esc_url($home_service_setting['service_three_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="service-icon show-title">
             <span>Egg provision program</span>
           </div>
           <div class="room-col">
             <div class="overly">
               <span>
                 <a href="<?php echo esc_url($home_service_setting['service_two_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
               </span>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>
<div class="clearfix"></div>
<section class="services-section service_en" style="background: rgb(255,255,255,0.5);display:none;" data-aos="fade-up"  data-aos-duration="500">
<div class="container">
 <div class="row">
   <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="1000">
     <div class="home-gallery">
       <div class="section-title">
         <h1>experience</h1>
       </div>
       <div class="row" style="min-height: 300px;margin:0;padding:20px;">
         <div class="col-md-6 col-sm-12">
           <img src="<?php echo esc_url($home_service_setting['service_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div>
         <div class="col-md-6 col-sm-12">
           <div class="margin-0 margin-sm-top-10">
             AAAAAAAAAAAAAAAAAAAAAAAA
             AAAAAAAAAAAAAAAAAAAAAAAA
           </div>
           <a class="main-btn control-form mlefttp-en"  href="<?php echo esc_url($home_service_setting['service_ex_link']); ?>">Read More <i class="fa fa-arrow-right"></i></a>
         </div>
       </div>
     </div>
   </div>
   <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="2000">
     <div class="home-gallery hg-mrg">
       <div class="section-title">
         <h1>Q &amp; A</h1>
       </div>
       <div class="row" style="min-height: 300px;margin:0;padding:20px;">
         <div class="col-md-6 col-sm-12">
           <img src="<?php echo esc_url($home_service_setting['service_qa_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div>
         <div class="col-md-6 col-sm-12">
           <ul style="line-height: 2.5;" class="margin-0 padding-0">
             <li>Question 1?</li>
             <li>Question 2?</li>
             <li>Question 3?</li>
             <li>Question 4?</li>
           </ul>
           <a class="main-btn control-form mrighttp-en" href="<?php echo esc_url($home_service_setting['service_qa_link']); ?>" >Read More <i class="fa fa-arrow-right"></i></a>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</section>

<!--star of 問い合わせ  -->
<section class="services-section service_en" style="background: rgb(0,0,0,0.3);display:none;" data-aos="fade-up"  data-aos-duration="500">
<div class="container show-mail-wechat">
 <div class="row">
   <div class="col-md-12 col-sm-12 service-box" data-aos="zoom-in" data-aos-duration="1000">
     <div class="home-gallery">
       <!-- <div class="section-title">
         <h1>問い合わせ</h1>
       </div> -->
       <div class="col-md-4 col-sm-12 service-box mail" style="text-align:center">
         <img src="<?php echo esc_url($home_service_setting['service_mail_image']); ?>" style="height:auto;width:60%;object-fit:unset !important;margin: 0 auto;" class="img-responsive myBtn" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
       </div>
       <div class="col-md-4 col-sm-12 service-box" style="text-align:center;">
         <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>"  style="width:60%;height: auto;margin: 0 auto;object-fit:unset !important;" class="img-fluid">
       </div>
       <div class="col-md-4 col-sm-12 service-box wechat">
         <img src="<?php echo esc_url($home_service_setting['service_wechat_image']); ?>" class="wechat" style="height:auto;width:60%;object-fit:unset !important;margin: 0 auto;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         <!-- <div class="show-bar-code">
           <i class="fa fa-close"></i>
           <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div> -->
       </div>
     </div>
   </div>
 </div>
</div>
</section>

<!-- Chinese Language-->
<section class="services-section service_zh" style="background: rgb(255,136,0,0.3);display:none;" data-aos="fade-up"  data-aos-duration="500">
   <div class="container" style="padding: 30px;text-align: center;">
     <div class="row" style="text-align: center;display: inline-flex;">
       <div class="circle one" data-aos="zoom-in" data-aos-duration="1000" style="background: url(<?php echo esc_url($home_service_setting['service_one_image']);  ?>) no-repeat;background-size: 100% 100%;">
         <div class="circle-overlay">
           <img src="<?php echo esc_url($home_service_setting['service_one_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="service-icon show-title">
             <span>精子供应计划</span>
           </div>
           <div class="room-col">
             <div class="overly">
               <span>
                 <a href="<?php echo esc_url($home_service_setting['service_one_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
               </span>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="row show-sm-circle" style="text-align: center;height: auto;display: inline-flex;">
       <div class="circle two"  data-aos="zoom-in" data-aos-duration="1000" style="background: url(<?php echo esc_url($home_service_setting['service_two_image']);  ?>) no-repeat;background-size: 100% 100%;">
         <div class="circle-overlay">
           <img src="<?php echo esc_url($home_service_setting['service_two_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="service-icon show-title">
             <span>代孕妈妈计划</span>
           </div>
           <div class="room-col">
             <div class="overly">
               <span>
                 <a href="<?php echo esc_url($home_service_setting['service_two_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
               </span>
             </div>
           </div>
         </div>
       </div>
       <div class="circle three" data-aos="zoom-in" data-aos-duration="1500"  style="background: url(<?php echo esc_url($home_service_setting['service_three_image']);  ?>) no-repeat;background-size: 100% 100%;">
         <div class="circle-overlay">
           <img src="<?php echo esc_url($home_service_setting['service_three_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="service-icon show-title">
             <span>鸡蛋供应计划</span>
           </div>
           <div class="room-col">
             <div class="overly">
               <span>
                 <a href="<?php echo esc_url($home_service_setting['service_two_link']); ?>" <?php if( $portfolio_options['service_one_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-arrow-right"></i></a>
               </span>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>
<div class="clearfix"></div>
<section class="services-section service_zh" style="background: rgb(255,255,255,0.5);display:none;" data-aos="fade-up"  data-aos-duration="500">
<div class="container">
 <div class="row">
   <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="1000">
     <div class="home-gallery">
       <div class="section-title">
         <h1>经验</h1>
       </div>
       <div class="row" style="min-height: 300px;margin:0;padding:20px;">
         <div class="col-md-6 col-sm-12">
           <img src="<?php echo esc_url($home_service_setting['service_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div>
         <div class="col-md-6 col-sm-12">
           <div class="margin-0 margin-sm-top-10">
             价格版本价格版本价格价格版本价格版本价格版本价格版价格价格版本价格版本价格版本价格版价格价格版本价格版本价格版价格版本价格版本价格价格价格价格版本
              价格版本价格版本价格价格版本价格版本价格版本价格版价格价格版本价格版本价格版本价格版价格价格版本价格版本价格版价格版本
           </div>
           <a class="main-btn control-form mlefttp-ch" href="<?php echo esc_url($home_service_setting['service_ex_link']); ?>">Read More <i class="fa fa-arrow-right"></i></a>
         </div>
       </div>
     </div>
   </div>
   <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="2000">
     <div class="home-gallery hg-mrg">
       <div class="section-title">
         <h1>Q &amp; A</h1>
       </div>
       <div class="row" style="min-height: 300px;margin:0;padding:20px;">
         <div class="col-md-6 col-sm-12">
           <img src="<?php echo esc_url($home_service_setting['service_qa_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div>
         <div class="col-md-6 col-sm-12">
           <ul style="line-height: 2.5;" class="margin-0 padding-0">
             <li>Question 1?</li>
             <li>Question 2?</li>
             <li>Question 3?</li>
             <li>Question 4?</li>
           </ul>
           <a class="main-btn control-form mrighttp-ch" href="<?php echo esc_url($home_service_setting['service_qa_link']); ?>" >Read More <i class="fa fa-arrow-right"></i></a>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</section>

<!--star of 問い合わせ  -->
<section class="services-section service_zh" style="background: rgb(0,0,0,0.3);display:none;" data-aos="fade-up"  data-aos-duration="500">
<div class="container show-mail-wechat">
 <div class="row">
   <div class="col-md-12 col-sm-12 service-box" data-aos="zoom-in" data-aos-duration="1000">
     <div class="home-gallery">
       <!-- <div class="section-title">
         <h1>問い合わせ</h1>
       </div> -->
       <div class="col-md-4 col-sm-12 service-box mail" style="text-align:center">
         <img src="<?php echo esc_url($home_service_setting['service_mail_image']); ?>" style="height:auto;width:60%;object-fit:unset !important;margin: 0 auto;" class="img-responsive myBtn" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
       </div>
       <div class="col-md-4 col-sm-12 service-box" style="text-align:center;">
         <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>"  style="width:60%;height: auto;margin: 0 auto;object-fit:unset !important;" class="img-fluid">
       </div>
       <div class="col-md-4 col-sm-12 service-box wechat">
         <img src="<?php echo esc_url($home_service_setting['service_wechat_image']); ?>" class="wechat" style="height:auto;width:60%;object-fit:unset !important;margin: 0 auto;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         <!-- <div class="show-bar-code">
           <i class="fa fa-close"></i>
           <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div> -->
       </div>
     </div>
   </div>
 </div>
</div>
</section>


<!-- The Modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close gclose">&times;</span>
    <p style="font-size: 24px;" class="p_ja">問い合わせ</p>
    <p style="font-size: 24px;" class="p_en">Inquiry</p>
    <p style="font-size: 24px;" class="p_zh">查询</p>
    <?php echo do_shortcode( '[contact-form-7 id="83" title="Contact form 1"]' ); ?>
  </div>

</div>

<div id="wechat_Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close wclose">&times;</span>
    <p style="font-size: 24px;" class="p_ja">問い合わせ</p>
    <p style="font-size: 24px;" class="p_en">Inquiry</p>
    <p style="font-size: 24px;" class="p_zh">查询</p>
    <?php echo do_shortcode( '[contact-form-7 id="574" title="Contact form 1"]' ); ?>
  </div>

</div>
<!-- end of 問い合わせ  -->

<div class="clearfix"></div>
 <!---------section-collout--------------------->
 <?php } ?>


 <script>
 // Get the modal
 var modal = document.getElementById('myModal');
 var wechat_modal = document.getElementById('wechat_Modal');

 // Get the button that opens the modal
   //var btn = document.getElementsByClassName("myBtn")[0];

 // Get the <span> element that closes the modal
 var gspan = document.getElementsByClassName("gclose")[0];
 var wspan = document.getElementsByClassName("wclose")[0];

 // When the user clicks the button, open the modal
 $(".myBtn").on("click",function() {
    changeContentByLanguage(".dropdown-menu li.current-lang", ".lbl_ja", ".lbl_en",".lbl_zh");
    changeContentByLanguage(".dropdown-menu li.current-lang", ".p_ja", ".p_en", ".p_zh");
    modal.style.display = "block";
 });

 $(".wechat").on("click",function() {
    changeContentByLanguage(".dropdown-menu li.current-lang", ".lbl_ja", ".lbl_en",".lbl_zh");
    changeContentByLanguage(".dropdown-menu li.current-lang", ".p_ja", ".p_en", ".p_zh");
    wechat_modal.style.display = "block";
 });
 // When the user clicks on <span> (x), close the modal
 gspan.onclick = function() {
     modal.style.display = "none";
 }

 wspan.onclick = function() {
     wechat_modal.style.display = "none";
 }


 // ***********start for drag and drop***********
 //Make the DIV element draggagle:

 dragElement(document.getElementById("myModal"));
 dragElement(document.getElementById("wechat_Modal"));

 function dragElement(elmnt) {
   var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
   if (document.getElementById(elmnt.id + "header")) {
     /* if present, the header is where you move the DIV from:*/
     document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
   } else {
     /* otherwise, move the DIV from anywhere inside the DIV:*/
     elmnt.onmousedown = dragMouseDown;
   }

   function dragMouseDown(e) {
     // e = e || window.event;
     // e.preventDefault();
     // get the mouse cursor position at startup:
     pos3 = e.clientX;
     pos4 = e.clientY;
     document.onmouseup = closeDragElement;
     // call a function whenever the cursor moves:
     document.onmousemove = elementDrag;
   }

   function elementDrag(e) {
     e = e || window.event;
     e.preventDefault();
     // calculate the new cursor position:
     pos1 = pos3 - e.clientX;
     pos2 = pos4 - e.clientY;
     pos3 = e.clientX;
     pos4 = e.clientY;
     // set the element's new position:
     elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
     elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
   }

   function closeDragElement() {
     /* stop moving when mouse button is released:*/
     document.onmouseup = null;
     document.onmousemove = null;
   }
 }
 // ***********end for drag and drop***********

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
 document.addEventListener( 'wpcf7mailsent', function( event ) {
  // alert( "Fire!" );
}, false );

// show bar code image when click wechat icon
$("#wechat").on("click", function () {
  $(".show-bar-code").toggleClass("show");
});

$(".show-bar-code i.fa-close").on("click", function() {
  $(".show-bar-code").toggleClass("show");
});

$(".drop-down-menu li").on("click",function(){
  changeContentByLanguage($(this), ".service_ja", ".service_en", ".service_zh");
});
$('.tooltip').tooltipster({
   animation: 'fade',
   delay: 200,
   theme: 'tooltipster-punk',
   trigger: 'click'
});
function changeContentByLanguage(menu, attr_ja, attr_en, attr_zh){
  var language = $(menu).children("a").children("span").text();

  if(language == "English"){
    $(attr_ja).hide();
    $(attr_zh).hide();
    $(attr_en).show();
  }else if(language == "中文 (中国)"){
    $(attr_ja).hide();
    $(attr_zh).show();
    $(attr_en).hide();
  }else{
    $(attr_ja).show();
    $(attr_zh).hide();
    $(attr_en).hide();
  }
}
changeContentByLanguage(".dropdown-menu li.current-lang", ".service_ja", ".service_en", ".service_zh");
 </script>
