<?php
/**
* @Theme Name	:	Hotel-Melbourne
* @file         :	home-slider.php
* @package      :	melbourne
* @author       :	asiathemes
* @license      :	license.txt
* @filesource   :	wp-content/themes/melbourne/home-slider.php
*/
?>
<!-- Slider Section -->
<?php
$melbourne_options=hotel_melbourne_theme_default_data();
$slider_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
if($slider_setting['home_banner_enabled'] == 1 ) {

$slideshowSpeed=$slider_setting['slideshowSpeed'];
?>
<script type="text/javascript">
		jQuery(window).load(function(){
		  jQuery('.flexslider').flexslider({
			animation: "slide",
			animationSpeed: 1500,
			direction: "vertical",

			directionNav: true,
			prevText: "Previous",
			nextText: "Next",
			controlNav: true,

			slideshowSpeed: "<?php echo $slideshowSpeed - 1500; ?>",
			pauseOnHover: true,
			slideshow: true,
			start: function(slider){
			  jQuery('body').removeClass('loading');
			}
		  });


			$("ul.slides").on('click', "li.flex-prev,li.flex-next", function(){
        this.changeBackgroundImage();
    	})



		});

		$(function () {
				this.changeBackgroundImage();
		});

		setInterval(function(){
			this.changeBackgroundImage();
	  }, 1000);

		function changeBackgroundImage() {
			$("ul.slides li").each(function(){
				var srcPath = $('.flex-active-slide').find('img').attr('src');
				if($(this).hasClass('flex-active-slide')) {
					$('.wrapper').css({
	 					 "background": `url(${srcPath}) no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0)`
	 				 });
				}
			});
		}
</script>
<!--Flex Slider-->
	<div class="flexslider" style="position: inherit;top:0;">
		<marquee behavior="scroll" scrollamount="3" direction="right"
    onmouseover="this.stop();" onmouseout="this.start();">
       <ul id="ticker">
          <span>this is first title this is first titlthis is first titlethis is first title</span>
          <span>this is second titlethis is first titlethis is first titlethis is first titlethis is first title</span>
          this is third title
          this is fourth title
          &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
						for($i=0;$i<=100;$i++) {
							echo "&nbsp;";
						}
					?>
					this is fifth title
      </ul>

		</marquee>
		<!-- <marquee direction="right" loop=0 style="position: absolute;top: 52%;">左から右へ</marquee> -->
		<!-- <marquee id="myMarquee" scrollamount="30" loop="1">Hi There!</marquee> -->
        <div class="flex-viewport">
			<ul class="slides"  style="display: none;">
				<li>
				<?php if($slider_setting['slider_image_one'] !='') { ?>
				<img src="<?php echo esc_url($slider_setting['slider_image_one']); ?>" width="3264" height="2448" sizes="100vw"  class="img-responsive" alt="<?php echo esc_attr($slider_setting['slider_image_title_one']); ?>">
			<?php } ?>

					  <div class="slide-caption text-center">
					  <?php if($slider_setting['slider_image_title_one'] !='') { ?>
						<h1 class="animated bounceInLeft"><?php echo esc_attr($slider_setting['slider_image_title_one']); ?>.</b></h1>
					<?php } ?>
						   <div class="main-btn-div">
						   <?php if($slider_setting['slider_button_text'] !='') { ?>
						     <a class="main-btn" href="<?php if($slider_setting['slider_image_link'] !='') { echo esc_url($slider_setting['slider_image_link']); } ?>" <?php if($slider_setting['slider_button_tab'] ==1) { echo "target='_blank'"; } ?> ><i class="fa fa-key"></i><?php echo esc_attr($slider_setting['slider_button_text']) ?></a>
							 <?php } ?>
						   </div>
                    </div>
				</li>

					<li>
				<?php if($slider_setting['slider_image_two'] !='') { ?>
				<img src="<?php echo esc_url($slider_setting['slider_image_two']); ?>" width="3264" height="2448" sizes="100vw"  class="img-responsive" alt="<?php echo esc_attr($slider_setting['slider_image_title_two']); ?>">
			<?php } ?>

					  <div class="slide-caption text-center">
					  <?php if($slider_setting['slider_image_title_two'] !='') { ?>
						<h1 class="animated bounceInLeft"><?php echo esc_attr($slider_setting['slider_image_title_two']); ?>.</b></h1>
					<?php } ?>
						   <div class="main-btn-div">
						   <?php if($slider_setting['slider_button_text'] !='') { ?>
						     <a class="main-btn" href="<?php if($slider_setting['slider_image_link'] !='') { echo esc_url($slider_setting['slider_image_link']); } ?>" <?php if($slider_setting['slider_button_tab'] ==1) { echo "target='_blank'"; } ?> ><i class="fa fa-key"></i><?php echo esc_attr($slider_setting['slider_button_text']) ?></a>
							 <?php } ?>
						   </div>
                    </div>
				</li>

				<li>
				<?php if($slider_setting['slider_image_three'] !='') { ?>
				<img src="<?php echo esc_url($slider_setting['slider_image_three']); ?>" width="3264" height="2448" sizes="100vw" class="img-responsive" alt="<?php echo esc_attr($slider_setting['slider_image_title_three']); ?>">
			<?php } ?>

					  <div class="slide-caption text-center">
					  <?php if($slider_setting['slider_image_title_one'] !='') { ?>
						<h1 class="animated bounceInLeft"><?php echo esc_attr($slider_setting['slider_image_title_three']); ?>.</b></h1>
					<?php } ?>
						   <div class="main-btn-div">
						   <?php if($slider_setting['slider_button_text'] !='') { ?>
						     <a class="main-btn" href="<?php if($slider_setting['slider_image_link'] !='') { echo esc_url($slider_setting['slider_image_link']); } ?>" <?php if($slider_setting['slider_button_tab'] ==1) { echo "target='_blank'"; } ?> ><i class="fa fa-key"></i><?php echo esc_attr($slider_setting['slider_button_text']) ?></a>
							 <?php } ?>
						   </div>
                    </div>
				</li>
			</ul>
		</div>
	</div>
	<!--/Flex Slider-->
<div class="clearfix"></div>
<?php } ?>
