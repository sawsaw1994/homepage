<?php
function asiathemes_service_customizer( $wp_customize ) {
 
//Service section panel
$wp_customize->add_panel( 'melbourne_service_options', array(
		'priority'       => 2,
		'capability'     => 'edit_theme_options',
		'title'      => __('Service Settings', 'hotel-melbourne'),
	) );

	
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service Heading ', 'hotel-melbourne'),
		'panel'  => 'melbourne_service_options',
		'priority'   => 50,
   	) );
	
	
	//Hide Index Service Section
	
	$wp_customize->add_setting(
    'melbourne_option[service_section_enabled]',
    array(
        'default' => 1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[service_section_enabled]',
    array(
        'label' => __('Hide Home Service Section','hotel-melbourne'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
	$wp_customize->add_setting(
    'melbourne_option[service_heading_title]',
    array(
        'default' => __('Why Choose Us','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[service_heading_title]',
    array(
        'label' => __('Service Heading Title','hotel-melbourne'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	// Service title headung Description
	$wp_customize->add_setting(
    'melbourne_option[service_heading_description]',
    array(
        'default' => __('Lorem ipsum dolor sit amet.','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[service_heading_description]',
    array(
        'label' => __('Service Heading Title Description','hotel-melbourne'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
//service section one
	$wp_customize->add_section( 'service_section_one' , array(
		'title'      => __('Service Section one', 'hotel-melbourne'),
		'panel'  => 'melbourne_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	$wp_customize->add_setting(
		'melbourne_option[service_one_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa-desktop',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'melbourne_option[service_one_icon]', array(
        'label'   => __('Service icon', 'hotel-melbourne'),
		'style' => 'background-color: red',
        'section' => 'service_section_one',
        'type'    => 'text',
		'description'=>__('Add More <a href="http://fontawesome.io/icons/" target="_blank">FontAwesome Icons</a>','hotel-melbourne'),
    ));		
		
	$wp_customize->add_setting(
    'melbourne_option[service_one_title]',
    array(
        'default' => __('Responsive','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[service_one_title]',
    array(
        'label' => __('Title one','hotel-melbourne'),
        'section' => 'service_section_one',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'melbourne_option[service_one_description]',
    array(
        'default' => __('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.','hotel-melbourne'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[service_one_description]',
    array(
        'label' => __('Description One','hotel-melbourne'),
        'section' => 'service_section_one',
        'type' => 'text',	
    )
);
//Second service

$wp_customize->add_section( 'service_section_two' , array(
		'title'      => __('Service Section Two', 'hotel-melbourne'),
		'panel'  => 'melbourne_service_options',
		'priority'   => 200,
   	) );


$wp_customize->add_setting(
    'melbourne_option[service_two_icon]',
    array(
        'type' =>'option',
		'default' => 'fa-leaf',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 
    )	
);
$wp_customize->add_control(
    'melbourne_option[service_two_icon]',
    array(
        'label' => __('Icon Two Like: fa-group','hotel-melbourne'),
        'section' => 'service_section_two',
        'type' => 'text',
		'description'=>__('Add More <a href="http://fontawesome.io/icons/" target="_blank">FontAwesome Icons</a>','hotel-melbourne'),
    )
);

$wp_customize->add_setting(
    'melbourne_option[service_two_title]',
    array(
        'default' => __('Print Design','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control(
    'melbourne_option[service_two_title]',
    array(
        'label' => __('Title two' ,'hotel-melbourne'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'melbourne_option[service_two_description]',
    array(
        'default' => __('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.','hotel-melbourne'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option',
    )	
);
$wp_customize->add_control(
		'melbourne_option[service_two_description]',
		array(
        'label' => __('Description two','hotel-melbourne'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);
//Third Service section
$wp_customize->add_section( 'service_section_three' , array(
		'title'      => __('Service Section Three', 'hotel-melbourne'),
		'panel'  => 'melbourne_service_options',
		'priority'   => 300,
   	) );


$wp_customize->add_setting(
    'melbourne_option[service_three_icon]',
    array(
        'default' => 'fa-cogs',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		
    )	
);
$wp_customize->add_control(
'melbourne_option[service_three_icon]',
    array(
        'label' => __('Icon three  Like: fa-group','hotel-melbourne'),
        'section' => 'service_section_three',
        'type' => 'text',
		'description'=>__('Add More <a href="http://fontawesome.io/icons/" target="_blank">FontAwesome Icons</a>','hotel-melbourne'),
		
    )
);

$wp_customize->add_setting(
    'melbourne_option[service_three_title]',
    array(
        'default' => __('Easy to Customize','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'melbourne_option[service_three_title]',
    array(
        'label' => __('Title three','hotel-melbourne'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'melbourne_option[service_three_description]',
    array(
        'default' => __('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'melbourne_option[service_three_description]',
    array(
        'label' => __('Description three','hotel-melbourne'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);

class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="pro-box">
		<a href="<?php echo esc_url( __('https://asiathemes.com/hotel-details/', 'hotel-melbourne'));?>" target="_blank" class="button" id="review_pro"><?php _e( 'Add more service get the Pro','hotel-melbourne' ); ?></a>
	 
	<div>
    <?php
    }
}
//Pro service section
$wp_customize->add_section( 'service_section_pro' , array(
		'title'      => __('Add More service', 'hotel-melbourne'),
		'panel'  => 'melbourne_service_options',
		'priority'   => 700,
   	) );


$wp_customize->add_setting(
     'melbourne_option[service_pro]',
    array(
        //'default' => __('','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control( new WP_service_Customize_Control( $wp_customize, 'melbourne_option[service_pro]', array(	
		'label' => __('Discover hotel-melbourne Pro','hotel-melbourne'),
        'section' => 'service_section_pro',
		'setting' => 'melbourne_option[service_pro]',
    ))
);

}
add_action( 'customize_register', 'asiathemes_service_customizer' );
?>