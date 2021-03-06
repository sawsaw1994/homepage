<?php get_header(); ?>
<div class="clearfix"></div>
<?php hotel_melbourne_breadcrumbs(); ?>
<script type="text/javascript">
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<div class="clearfix"></div>
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-area" data-aos="fade-up"  data-aos-duration="1500">
					<div class="room-col">
						<div class="overly">
							<span>
								<a href="<?php the_permalink(); ?>" class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<?php the_post();
								$default_img = array('class' => "img-responsive");
								if(has_post_thumbnail()) :?>
						<?php the_post_thumbnail('',$default_img); ?>
						<?php endif; ?>
					</div>

					<div class="blog-info">
						<div class="blog-detail-description">
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
	<!-----user------------------->
				<!-- <article class="blog-author" data-aos="fade-up"  data-aos-duration="1500">
					<div class="media ">
						<div class="pull-left">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ),'class="img-responsive img-circle"' ); ?>

						</div>
						<div class="media-body">
							<h6><?php the_author_link(); ?></h6>
							<p><?php echo get_the_author_meta( 'description' );if(!get_the_author_meta('description')) _e('No description.
															Please update your profile.','hotel-melbourne'); ?></p>
						</div>
					</div>
				</article> -->
				<?php comments_template( '', true );?>
		</div>
		<!-- <?php get_sidebar(); ?> -->
	</div>
  </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
<script>
var item = $(".navbar-nav li.current-menu-item").children("a").text();
if(item == "問い合わせ"){changeContentByLanguage(".dropdown-menu li.current-lang", ".lbl_ja", ".lbl_en",".lbl_zh");
  changeContentByLanguage(".dropdown-menu li.current-lang", ".lbl_ja", ".lbl_en",".lbl_zh");
}else if(item == "Inquiry"){
  changeContentByLanguage(".dropdown-menu li.current-lang", ".lbl_ja", ".lbl_en",".lbl_zh");
}else if(item == "查询"){
  changeContentByLanguage(".dropdown-menu li.current-lang", ".lbl_ja", ".lbl_en",".lbl_zh");
}

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
</script>
