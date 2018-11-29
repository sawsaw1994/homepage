<?php
function hotel_melbourne_theme_default_data()
  	{
	return $melbourne_option=array(

	'front_page_enabled' => 1,

	'header_text_enabled' => 1,
	'header_info_phone' =>get_theme_mod('header_info_phone',__('(2)245 23 68','hotel-melbourne')),
	'header_info_mail'=> get_theme_mod('header_info_mail',__('exampl@gmail.com','hotel-melbourne')),

	'melbourne_custom_css'=> '',

	//Slider settings
	'home_banner_enabled' => 1,
	'slideshowSpeed' => 2000,
	'slider_image_one' => get_template_directory_uri().'/images/slide/slider1.jpg',
	'slider_image_title_one' => get_theme_mod('slider_image_title_one',__('melbourne Responsive','hotel-melbourne')),
	'slider_image_description_one' => get_theme_mod('slider_image_description_one',__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne')),

	'slider_image_two' => get_template_directory_uri().'/images/slide/slider2.jpg',
	'slider_image_title_two' => get_theme_mod('slider_image_title_two',__('melbourne Responsive','hotel-melbourne')),
	'slider_image_description_two' => get_theme_mod('slider_image_description_two',__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne')),

	'slider_image_three' => get_template_directory_uri().'/images/slide/slider3.jpg',
	'slider_image_title_three' => get_theme_mod('slider_image_title_three',__('melbourne Responsive','hotel-melbourne')),
	'slider_image_description_three' => get_theme_mod('slider_image_description_three',__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne')),

	'slider_button_text' => get_theme_mod('slider_button_text',__('More Details!','hotel-melbourne')),
	'slider_image_link' => '#',
	'slider_button_tab' => 1,

	//Service section settings
	'service_section_enabled' => 1,
	'service_heading_title' => get_theme_mod('service_heading_title',__('Why Choose Us','hotel-melbourne')),
	'service_heading_description' => get_theme_mod('service_heading_description',__('Lorem ipsum dolor sit amet.','hotel-melbourne')),

	'service_one_icon' => 'fa-desktop',
	'service_one_title'=>get_theme_mod('service_one_title',__('プログラマー１','hotel-melbourne')),
	'service_one_description' => get_theme_mod('service_one_description',__('プログラマー３ プログラマー３ プログラマー３プログラマー３プログラマー３プログラマー３ プログラマー３プログラマー３プログラマー３ プログラマー３プログラマー３ プログラマー３ プログラマー３プログラマー３ プログラマー３','hotel-melbourne')),
  'service_one_image' => get_template_directory_uri().'/images/programmer/pro1.png',
  'service_one_link' => get_site_url().'/programmer1',
	'service_one_new_tab' => 0,

	'service_two_icon' => 'fa-leaf',
	'service_two_title'=>get_theme_mod('service_two_title',__('プログラマー２','hotel-melbourne')),
	'service_two_description' => get_theme_mod('service_two_description',__('プログラマー３ プログラマー３ プログラマー３プログラマー３プログラマー３プログラマー３ プログラマー３プログラマー３プログラマー３ プログラマー３プログラマー３ プログラマー３ プログラマー３プログラマー３ プログラマー３','hotel-melbourne')),
  'service_two_image' => get_template_directory_uri().'/images/programmer/pro2.png',
  'service_two_link' => get_site_url().'/programmer2',
  'service_two_new_tab' => 0,

  'service_ex_link' => get_site_url().'/ex',
  'service_qa_link' => get_site_url().'/qa',

	'service_three_icon' => 'fa-cogs',
	'service_three_title'=>get_theme_mod('service_three_title',__('プログラマー３','hotel-melbourne')),
	'service_three_description' => get_theme_mod('service_three_description',__('プログラマー３ プログラマー３ プログラマー３プログラマー３プログラマー３プログラマー３ プログラマー３プログラマー３プログラマー３ プログラマー３プログラマー３ プログラマー３ プログラマー３プログラマー３ プログラマー３','hotel-melbourne')),
  'service_three_image' => get_template_directory_uri().'/images/programmer/pro3.png',
  'service_three_link' => get_site_url().'/programmer3',
  'service_three_new_tab' => 0,
  'service_image' => get_template_directory_uri().'/images/slide/image.png',
  'service_qa_image' => get_template_directory_uri().'/images/slide/qa.png',
  'service_mail_image' => get_template_directory_uri().'/images/mail.png',
  'service_wechat_image' => get_template_directory_uri().'/images/wechat.png',
  'service_wechat_barcode_image' => get_template_directory_uri().'/images/barcode.jpg',

	//Project Portfolio Section
	'enable_home_portfolio' => 1,
	'portfolio_title_one' => get_theme_mod('portfolio_title_one',__('会社概要','hotel-melbourne')),
	'portfolio_title_desc_one' => get_theme_mod('portfolio_title_desc_one',__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','hotel-melbourne')),

	'upload_image_one' => get_template_directory_uri().'/images/gallery/coe.png',
  'upload_coe_link' => get_site_url().'/coe',
  'upload_company_image' => get_template_directory_uri().'/images/gallery/company.png',
  'upload_company_link' => get_site_url().'/会社概要',
	'portfolio_image_one_title' => get_theme_mod('portfolio_image_one_title',__('CEOメッセージ','hotel-melbourne')),
	'portfolio_price_one' => get_theme_mod('portfolio_price_one',__('最も重要な経営資源は“人”であり、お客様との“信頼関係”、すなわち“人と人とのつながり”であると確信しております。

現在は、会社の基盤作りや、人材育成(Oracle/AIX/Linux/VMware構築勉強会など)に全力を挙げています。

人員は正社員やビジネスパートーナー様の社員などを含めて現在約100名以上稼働しており、８割程が女性です。','hotel-melbourne')),
	'portfolio_time_section_one' => get_theme_mod('portfolio_time_section_one',__('','hotel-melbourne')),
	'portfolio_button_text_one' => get_theme_mod('portfolio_button_text_one',__('Remore','hotel-melbourne')),
	'portfolio_image_one_link' => '#',
	'portfolio_new_tab' => 1,

	'upload_image_two' => get_template_directory_uri() .'/images/gallery/2.jpg',
	'portfolio_image_two_title' => get_theme_mod('portfolio_image_two_title',__('会社情報','hotel-melbourne')),
	'portfolio_price_two' => get_theme_mod('portfolio_price_two',__('500.00$/-','hotel-melbourne')),
	'portfolio_time_section_two' => get_theme_mod('portfolio_time_section_two',__('Night / Day','hotel-melbourne')),
	'portfolio_button_text_two' => get_theme_mod('portfolio_button_text_two',__('Remore','hotel-melbourne')),
	'portfolio_image_two_link' => '#',
	'portfolio_two_new_tab' => 1,

	'upload_image_three' => get_template_directory_uri() .'/images/gallery/3.jpg',
	'portfolio_image_three_title' => get_theme_mod('portfolio_image_three_title',__('melbourne Responsive','hotel-melbourne')),
	'portfolio_price_three' => get_theme_mod('portfolio_price_three',__('10000.00$/-','hotel-melbourne')),
	'portfolio_time_section_three' => get_theme_mod('portfolio_time_section_three',__('Per Hour','hotel-melbourne')),
	'portfolio_button_text_three' => get_theme_mod('portfolio_button_text_three',__('View Room 3','hotel-melbourne')),
	'portfolio_image_three_link' => '#',
	'portfolio_three_new_tab' => 1,
  'portfolio_qa_one_link' => get_site_url().'/qa',

  'upload_image_questionandanswer' => get_template_directory_uri() .'/images/gallery/qa.jpg',
	'portfolio_image_qa_link' => get_site_url().'/qa',
	'portfolio_three_new_tab' => 0,
  'portfolio_qa_one_link' => get_site_url().'/qa',

	//Home Latest Blog Post
	'home_blog_enabled' => 1,
	'blog_heading_title' => get_theme_mod('blog_heading_title',__('Latest News','hotel-melbourne')),
	'blog_description' => get_theme_mod('blog_description',__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','hotel-melbourne')),
	'post_display_count' => 4,

	'footer_customization_text' => get_theme_mod('footer_customization_text',__('@ 2018 ','hotel-melbourne')),
	'footer_customization_develop' => get_theme_mod('footer_customization_develop',__(' Developed By','hotel-melbourne')),
	'develop_by_name' => get_theme_mod('develop_by_name',__('Star SE ','hotel-melbourne')),
	'develop_by_link' => get_theme_mod('develop_by_link',__('http://star-se.co.jp/','hotel-melbourne')),
	'header_social_media_enabled' => 1,
	'social_media_twitter_link' => '#',
	'social_media_facebook_link' => '#',
	'social_media_google_link' => '#',
	'social_media_linkedin_link' => '#',
	'facebook_media_enabled' => 0,
	'twitter_media_enabled' => 0,
	'linkedin_media_enabled' => 0,
	'google_media_enabled' => 0,
	//Title strip image
	'footer_bg_image'=> HOTEL_MELBOURNE_DIR_URI.'/images/bedroom.jpg',

	);
  	}
  ?>
