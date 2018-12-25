<!----------Services----------------------------------->
<?php
$melbourne_options=hotel_melbourne_theme_default_data();
$home_service_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
if($home_service_setting['service_section_enabled'] == 1 ) { ?>

  <section class="services-section" style="background: rgb(255,136,0,0.3);" data-aos="fade-up"  data-aos-duration="500">
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
<section class="services-section" style="background: rgb(255,255,255,0.5);" data-aos="fade-up"  data-aos-duration="500">
 <div class="container">
   <div class="row">
     <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="1000">
       <div class="home-gallery">
         <div class="section-title">
           <h1>体験談</h1>
         </div>
         <div class="row" style="min-height: 250px;margin:0;padding:20px;">
           <div class="col-md-6 col-sm-12">
             <img src="<?php echo esc_url($home_service_setting['service_image']); ?>" style="height:fit-content;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           </div>
           <div class="col-md-6 col-sm-12">
             <div class="margin-0 margin-sm-top-10">
               代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版
               代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版代金版
             </div>
             <a class="main-btn control-form" style="margin-top: 10px;" href="<?php echo esc_url($home_service_setting['service_ex_link']); ?>">Read More <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 col-sm-6 service-box" data-aos="zoom-in" data-aos-duration="2000">
       <div class="home-gallery">
         <div class="section-title">
           <h1>Q &amp; A</h1>
         </div>
         <div class="row" style="min-height: 250px;margin:0;padding:20px;">
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
             <a class="main-btn control-form" style="margin-top: 10px;" href="<?php echo esc_url($home_service_setting['service_qa_link']); ?>" >Read More <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>

<!--star of 問い合わせ  -->
<section class="services-section" style="background: rgb(0,0,0,0.3);" data-aos="fade-up"  data-aos-duration="500">
 <div class="container show-mail-wechat">
   <div class="row">
     <div class="col-md-8 col-sm-12 service-box" data-aos="zoom-in" data-aos-duration="1000">
       <div class="home-gallery">
         <!-- <div class="section-title">
           <h1>問い合わせ</h1>
         </div> -->
         <div class="col-md-6 col-sm-12 service-box mail" style="text-align:center">
           <img src="<?php echo esc_url($home_service_setting['service_mail_image']); ?>" id="myBtn" style="height:fit-content;margin: 0 auto;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
         </div>
         <div class="col-md-6 col-sm-12" style="text-align:center;">
           <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>"  style="width:100%;height: 80%;margin: 0 auto;object-fit:unset !important;" class="img-fluid">
         </div>
       </div>
     </div>
     <div class="col-md-4 col-sm-12 service-box" data-aos="zoom-in" data-aos-duration="1000">
       <div class="home-gallery">
         <!-- <div class="section-title">
           <h1>WECHAT</h1>
         </div> -->
         <div class="col-md-12 col-sm-12 service-box wechat">
           <img src="<?php echo esc_url($home_service_setting['service_wechat_image']); ?>" id="wechat" style="height:fit-content;margin: 0 auto;" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           <div class="show-bar-code">
             <i class="fa fa-close"></i>
             <img src="<?php echo esc_url($home_service_setting['service_wechat_barcode_image']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
           </div>
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
    <span class="close">&times;</span>
    <p style="font-size: 24px;">問い合わせ</p>
    <?php echo do_shortcode( '[contact-form-7 id="83" title="Contact form 1"]' ); ?>
  </div>

</div>
<!-- end of 問い合わせ  -->

<div class="clearfix"></div>
 <!---------section-collout--------------------->
 <?php } ?>


 <script>
 // Get the modal
 var modal = document.getElementById('myModal');

 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

 // When the user clicks the button, open the modal
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     modal.style.display = "none";
 }

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

 </script>
