<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/locale/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php $bg_color = $this->get_current_color();?>
<?php $len = strlen( $this->int_arr());?>
<?php $cta = $this->getCallToAction(); ?>

<script src="<?php echo CHT_PLUGIN_URL ?>assets/js/cht-front-script.js?<?php echo rand();?>" settings='
{
  "object_settings":{
    "isPRO": 0,
    "position":"<?php echo (get_option('cht_position'));?>",
    "social":<?php echo $this->int_arr()?>,
    "pos_side":"<?php echo empty(get_option('positionSide')) ? 'right' : get_option('positionSide');?>",
    "bot":"<?php echo (get_option('cht_bottom_spacing')) ? get_option('cht_bottom_spacing') : '25';?>",
    "side": "<?php echo (get_option('cht_side_spacing')) ? get_option('cht_side_spacing') : '25';?>",
    "device":"<?php echo $this->device();?>",
    "color":"<?php echo ($bg_color) ? $bg_color : '#A886CD'; ?>",
    "widget_size":"<?php echo (get_option('cht_widget_size')) ? get_option('cht_widget_size'): '54';?>",
    "widget_type":"<?php echo get_option('widget_icon');?>",
    "widget_img":"<?php echo $this->getCustomWidgetImg();?>",
    "cta":"<?php echo $cta; ?>",
    "link_active":"<?php echo get_option('cht_credit') ?>",
    "active":"<?php echo (get_option('cht_active') && $len>2) ? 'true' : 'false' ?>"
  }
}'>
</script>
