<?php
function healthyfitnessgym_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'healthyfitnessgym_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'healthy-fitness-gym' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'healthy-fitness-gym' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 3000*2000','healthy-fitness-gym'),
			'priority' => 1,
			'panel' => 'healthyfitnessgym_frontpage_sections',
		)
	);



	$wp_customize->add_setting('healthyfitnessgym_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new healthyfitnessgym_Tab_Control($wp_customize, 'healthyfitnessgym_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'healthy-fitness-gym'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6',
				'slider_heading1',
				'slider_heading2',
				'slider_fblink',
				'slider_instalink',
				'slider_ytvideolink1',
				'slider_ytvideolink2',
				'slider_ytvideolink3',
				'slider_ytvideolink4'

            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'healthy-fitness-gym'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
				'slider_headingcolor',
				'slider_socialiconcolor',
				'slider_videobrdcolor'
            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// slider heading 1
	$wp_customize->add_setting(
    	'slider_heading1',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_heading1',
		array(
		    'label'   		=> __('Slider Heading 1','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// slider heading 2
	$wp_customize->add_setting(
    	'slider_heading2',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_heading2',
		array(
		    'label'   		=> __('Slider Heading 2','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// slider fblink
	$wp_customize->add_setting(
    	'slider_fblink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_fblink',
		array(
		    'label'   		=> __('Facebook Link','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// slider instalink
	$wp_customize->add_setting(
    	'slider_instalink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_instalink',
		array(
		    'label'   		=> __('Instagram Link','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// slider ytvideolink1
	$wp_customize->add_setting(
    	'slider_ytvideolink1',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_ytvideolink1',
		array(
		    'label'   		=> __('Video Link 1','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// slider ytvideolink2
	$wp_customize->add_setting(
    	'slider_ytvideolink2',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_ytvideolink2',
		array(
		    'label'   		=> __('Video Link 2','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// slider ytvideolink3
	$wp_customize->add_setting(
    	'slider_ytvideolink3',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_ytvideolink3',
		array(
		    'label'   		=> __('Video Link 3','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// slider ytvideolink4
	$wp_customize->add_setting(
    	'slider_ytvideolink4',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'slider_ytvideolink4',
		array(
		    'label'   		=> __('Video Link 4','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	






	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider heading Color
	$sliderheadingcolor = esc_html__('#fff', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'slider_headingcolor',
    	array(
			'default' => $sliderheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_headingcolor',
		array(
		    'label'   		=> __('Heading Color','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider socialicon Color
	$slidersocialiconcolor = esc_html__('#fff', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'slider_socialiconcolor',
    	array(
			'default' => $slidersocialiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_socialiconcolor',
		array(
		    'label'   		=> __('Social Icon Color','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider videobrd Color
	$slidervideobrdcolor = esc_html__('#992921', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'slider_videobrdcolor',
    	array(
			'default' => $slidervideobrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_videobrdcolor',
		array(
		    'label'   		=> __('Video Border Color','healthy-fitness-gym'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	
	
	
	/*=========================================
	aboutus Section
	=========================================*/
	$wp_customize->add_section(
		'aboutus_setting', array(
			'title' => esc_html__( 'AboutUs Section', 'healthy-fitness-gym' ),
			'priority' => 2,
			'panel' => 'healthyfitnessgym_frontpage_sections',
		)
	);

	$wp_customize->add_setting('healthyfitnessgym_aboutus_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new healthyfitnessgym_Tab_Control($wp_customize, 'healthyfitnessgym_aboutus_tabs', array(
	   'section' => 'aboutus_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'healthy-fitness-gym'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'aboutus_image',
            	'aboutus_heading',
				'aboutus_description',
            	'aboutus_readmorebtn_link'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'healthy-fitness-gym'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'aboutus_headingcolor',
				'aboutus_descriptioncolor',
				'aboutus_btntextcolor',
				'aboutus_btnbgcolor1',
				'aboutus_btnbgcolor2',
				'aboutus_btntexthovercolor'
            ),
     	)
	    
    	),
	))); 


	// aboutus_image
	$wp_customize->add_setting(
    	'aboutus_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_image',
	        array(
			    'label'   		=> __('Image','healthy-fitness-gym'),
				'description'=> __('Image Size Should Be 1390*877','healthy-fitness-gym'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_image'
	        )
	    )
	);


	// aboutus_heading
	$wp_customize->add_setting(
    	'aboutus_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_heading',
		array(
		    'label'   		=> __('Heading','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// aboutus_description
	$wp_customize->add_setting(
    	'aboutus_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_description',
		array(
		    'label'   		=> __('Description','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_readmorebtn_link
	$aboutusreadmorebtnlink = esc_html__('#', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_readmorebtn_link',
    	array(
			'default' => $aboutusreadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_readmorebtn_link',
		array(
		    'label'   		=> __('Read More Button Link','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	//style

	// aboutus heading Color
	$aboutusheadingcolor = esc_html__('#fff', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_headingcolor',
    	array(
			'default' => $aboutusheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_headingcolor',
		array(
		    'label'   		=> __('Heading Color','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus description Color
	$aboutusdescriptioncolor = esc_html__('#BBB8B8', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_descriptioncolor',
    	array(
			'default' => $aboutusdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btntext Color
	$aboutusbtntextcolor = esc_html__('#fff', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_btntextcolor',
    	array(
			'default' => $aboutusbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btnbg Color 1
	$aboutusbtnbgcolor1 = esc_html__('#DB5651', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_btnbgcolor1',
    	array(
			'default' => $aboutusbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color 1','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btnbg Color 2
	$aboutusbtnbgcolor2 = esc_html__('#992921', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_btnbgcolor2',
    	array(
			'default' => $aboutusbtnbgcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btnbgcolor2',
		array(
		    'label'   		=> __('Button BG Color 2','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btntexthover Color
	$aboutusbtntexthovercolor = esc_html__('#000', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'aboutus_btntexthovercolor',
    	array(
			'default' => $aboutusbtntexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntexthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','healthy-fitness-gym'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'healthy-fitness-gym' ),
			'priority' => 2,
			'panel' => 'healthyfitnessgym_frontpage_sections',
		)
	);



	$wp_customize->add_setting('healthyfitnessgym_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new healthyfitnessgym_Tab_Control($wp_customize, 'healthyfitnessgym_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'healthy-fitness-gym'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'service_heading',
            	'Service1',
				'service_icon1',
            	'Service2',
				'service_icon2',
            	'Service3',
				'service_icon3',
            	'Service4',
				'service_icon4',
            	'Service5',
				'service_icon5',
            	'Service6',
				'service_icon6',
				'Service7',
				'service_icon7',
            	'Service8',
				'service_icon8'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'healthy-fitness-gym'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_headingcolor',
				'service_boxiconcolorcolor',
				'service_boxiconbgcolor',
				'service_boxiconbghovercolor',
            	'service_boxtitlecolorcolor',
            	'service_boxdescriptioncolorcolor',
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'healthy-fitness-gym'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'healthy_fitness_gym_service_section_width',
	            'healthyfitnessgym_service_padding',
	            'healthy_fitness_gym_service_top_padding',
	            'healthy_fitness_gym_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new healthyfitnessgym_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'healthy-fitness-gym' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'healthy-fitness-gym' ),
                    'off' => __( 'No', 'healthy-fitness-gym' )
                ),
            )
        )
    );


	

    // service title
	$wp_customize->add_setting(
    	'service_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_heading',
		array(
		    'label'   		=> __('Heading','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// service 1 icon
	$wp_customize->add_setting(
    	'service_icon1',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_icon1',
		array(
		    'label'   		=> __('Icon 1','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	

	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service 2 icon
	$wp_customize->add_setting(
    	'service_icon2',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'service_icon2',
		array(
		    'label'   		=> __('Icon 2','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// service 3 icon
	$wp_customize->add_setting(
    	'service_icon3',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_icon3',
		array(
		    'label'   		=> __('Icon 3','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Service 4','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 4 icon
	$wp_customize->add_setting(
    	'service_icon4',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_icon4',
		array(
		    'label'   		=> __('Icon 4','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Service 5','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 5 icon
	$wp_customize->add_setting(
    	'service_icon5',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'service_icon5',
		array(
		    'label'   		=> __('Icon 5','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('Service 6','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 6 icon
	$wp_customize->add_setting(
    	'service_icon6',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'service_icon6',
		array(
		    'label'   		=> __('Icon 6','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 7
	$wp_customize->add_setting(
    	'Service7',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service7',
		array(
		    'label'   		=> __('Service 7','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 7 icon
	$wp_customize->add_setting(
    	'service_icon7',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'service_icon7',
		array(
		    'label'   		=> __('Icon 7','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	
	// Service 7
	$wp_customize->add_setting(
    	'Service7',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service7',
		array(
		    'label'   		=> __('Service 7','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 7 icon
	$wp_customize->add_setting(
    	'service_icon7',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'service_icon7',
		array(
		    'label'   		=> __('Icon 7','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 8
	$wp_customize->add_setting(
    	'Service8',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service8',
		array(
		    'label'   		=> __('Service 8','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// service 8 icon
	$wp_customize->add_setting(
    	'service_icon8',
    	array(
			'default' => 'fa fa-bicycle',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'service_icon8',
		array(
		    'label'   		=> __('Icon 8','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// style

	// service headingcolor color
	$serviceheadingcolor = esc_html__('#FFF', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxiconcolor color
	$serviceboxiconcolorcolor = esc_html__('#fff', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'service_boxiconcolorcolor',
    	array(
			'default' => $serviceboxiconcolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxiconcolorcolor',
		array(
		    'label'   		=> __('Icon Color','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxiconbg color
	$serviceboxiconbgcolor = esc_html__('#36404B', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'service_boxiconbgcolor',
    	array(
			'default' => $serviceboxiconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxiconbgcolor',
		array(
		    'label'   		=> __('Icon BG Color','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxiconbghover color
	$serviceboxiconbghovercolor = esc_html__('#992921', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'service_boxiconbghovercolor',
    	array(
			'default' => $serviceboxiconbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxiconbghovercolor',
		array(
		    'label'   		=> __('Icon BG Hover Color','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#20272D', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#707070', 'healthy-fitness-gym' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','healthy-fitness-gym'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	
	// layout setting
	$wp_customize->add_setting('healthy_fitness_gym_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'healthyfitnessgym_sanitize_choices',
    ));
    $wp_customize->add_control('healthy_fitness_gym_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','healthy-fitness-gym'),
        'choices' => array (
            'Box Width' => __('Box Width','healthy-fitness-gym'),
            'Full Width' => __('Full Width','healthy-fitness-gym')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('healthyfitnessgym_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('healthyfitnessgym_service_padding',array(
      'label' => __('Section Padding','healthy-fitness-gym'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('healthy_fitness_gym_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('healthy_fitness_gym_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','healthy-fitness-gym'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('healthy_fitness_gym_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('healthy_fitness_gym_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','healthy-fitness-gym'),
	    'section' => 'Service_setting',
    ));


	$wp_customize->register_control_type('healthyfitnessgym_Tab_Control');

}

add_action( 'customize_register', 'healthyfitnessgym_blog_setting' );

// service selective refresh
function healthyfitnessgym_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'healthyfitnessgym_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'healthyfitnessgym_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'healthyfitnessgym_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'healthyfitnessgym_blog_section_partials' );

// blog_title
function healthyfitnessgym_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function healthyfitnessgym_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function healthyfitnessgym_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


