<?php 

function myspore_customize_register( $wp_customize ) {
    
  //All our sections, settings, and controls will be added here
  
  //Remove Default Section Here
  $wp_customize->remove_section('title_tagline');
  $wp_customize->remove_section('colors');
  $wp_customize->remove_section('static_front_page');
  $wp_customize->remove_section( 'custom_css');
  
    function remove_customizer_settings( $wp_customize ){
  $wp_customize->remove_panel('nav_menus');
}

add_action( 'customize_register', 'remove_customizer_settings', 20 );
  
  //add new section Header
  $wp_customize->add_section('edit_header',array(
            'title'         => __('Header','myspore'),
            'priority'      => 10, 
            'transport'     => 'refresh',
    ));
  
  //add setting header description for section Header
  $wp_customize->add_setting('head_description',array(
            'default'       => 'Spore is a creative onepage wordpress theme for web developers who change the world.',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'company_textbox',array(
		'label' => __( 'New Description', 'myspore' ),
		'section' => 'edit_header',
		'settings' => 'head_description',
        
  )));
  
  //add setting button text in section Header
  $wp_customize->add_setting('button_text',array(
            'default'       => 'Learn More',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Header
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'button_textbox',array(
		'label' => __( 'Button Text', 'myspore' ),
		'section' => 'edit_header',
		'settings' => 'button_text',
        
  )));
  
  //add setting for background image in section Header
  $wp_customize->add_setting('header_background',array(
			'default'		=> get_stylesheet_directory_uri() . '/IMG/gallery-in-a-page.jpg',
			 'transport'     => 'refresh',
		));
  
  //add control for background image in section Header
  $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,'theme_header_bg',array(
            'label' => 'Header Background Image',
            'section' => 'edit_header',
            'settings' => 'header_background',
            'priority' => 2
  )));
  
  //add setting for logo in section Header
  $wp_customize->add_setting('header_logo',array(
			'default'		=> get_stylesheet_directory_uri() . '/IMG/logotop.svg',
			 'transport'     => 'refresh',
		)
	);
  
  //add control for background image in section Header
  $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,'theme_logo',array(
            'label' => 'Header Logo Image',
            'section' => 'edit_header',
            'settings' => 'header_logo',
            'priority' => 2
  )));
  
  //add new section Footer
  $wp_customize->add_section('edit_footer',array(
            'title'         => __('Footer','myspore'),
            'priority'      => 10, 
            'transport'     => 'refresh',
    ));
    
  //add setting footer author for section Footer
  $wp_customize->add_setting('footer_author',array(
            'default'       => 'cannelflow',
            'transport'     => 'refresh',
            
    ));
    
  //add control to footer author
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'footer_author_textbox',array(
		'label' => __( 'Footer Author', 'myspore' ),
		'section' => 'edit_footer',
		'settings' => 'footer_author',
        
  )));
  
  //add new section Social
  $wp_customize->add_section('edit_social',array(
            'title'         => __('Social Link','myspore'),
            'priority'      => 10, 
            'transport'     => 'refresh',
    ));
    
  //add setting behance link for section Social
  $wp_customize->add_setting('behance_link',array(
            'default'       => 'cannelflow',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Social
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'behance_link_textbox',array(
		'label' => __( 'Behance User Name', 'myspore' ),
		'section' => 'edit_social',
		'settings' => 'behance_link',
        
  )));
  
  //add setting drible link for section Social
  $wp_customize->add_setting('drible_link',array(
            'default'       => 'cannelflow',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Social
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'drible_link_textbox',array(
		'label' => __( 'Drible User Name', 'myspore' ),
		'section' => 'edit_social',
		'settings' => 'drible_link',
        
  )));   
    
  //add setting fb link for section Social
  $wp_customize->add_setting('fb_link',array(
            'default'       => 'BollyGossipp',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Social
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'fb_link_textbox',array(
		'label' => __( 'Facebook User Name', 'myspore' ),
		'section' => 'edit_social',
		'settings' => 'fb_link',
        
  )));
  
  //add setting google plus link for section Social
  $wp_customize->add_setting('gplus_link',array(
            'default'       => 'cannelflow',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Social
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'gplus_link_textbox',array(
		'label' => __( 'Google  Plus User Name', 'myspore' ),
		'section' => 'edit_social',
		'settings' => 'gplus_link',
        
  ))); 
  
  //add setting instagram link for section Social
  $wp_customize->add_setting('insta_link',array(
            'default'       => 'cannelflow',
            'transport'     => 'refresh',
            
    ));
    
  //add control to section Social
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,'insta_link_textbox',array(
		'label' => __( 'Instagram User Name', 'myspore' ),
		'section' => 'edit_social',
		'settings' => 'ins_link',
        
  )));   
    
}

add_action( 'customize_register', 'myspore_customize_register');

?>