<?php get_header(); ?>
<div class="clearfix"></div>

<?php hotel_melbourne_breadcrumbs(); ?>	
<div class="clearfix"></div>	
<section class="blog-section">
	<div class="container ">
		<div class="row">

<?php get_template_part('post','archive-content'); ?>	

<?php get_sidebar(); ?>	

</div>
</section>		
<div class="cearfix"></div>	

<?php get_footer(); ?>

