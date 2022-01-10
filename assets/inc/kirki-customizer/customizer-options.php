<?php
function bestwpdevelopertd_home_page_customize( $wp_customize ){
    // Slider section
    $wp_customize->add_section('slider1_section', array(
        'title' => __('Slide Section', 'bestwpdevelopertd'),
    ));

    // Background color
    $wp_customize->add_setting('slider1_backgroud_color', array(
        'default' => '#090a21',
        'transport' => 'postMessage'
        // I can add here priroty
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'slider1_backgroud_ctrl_color', array(
        'label' => __('Backgroud Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_backgroud_color',
        'section' => 'slider1_section'
    )));
    // For background image
    $wp_customize->add_setting('slider1_backgroud_image', array(
        'default' => '#090a21'
        // I can add here priroty
    ));
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'audio_control', array(
        'label' => __( 'Background (Image)' ),
        'type' => 'media',
        'settings' => 'slider1_backgroud_image',
        'section' => 'slider1_section'
    ) ) );

    // Heading control
    $wp_customize->add_setting('slider1_heading', array(
        'default' => __('WELCOME TO', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('slider1_heading_ctrl', array(
        'label' => __('Heading', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'slider1_heading',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_heading_color', array(
        'default' => '#f1a34a'
    ));
    $wp_customize->add_control('slider1_heading_color_ctrl', array(
        'label' => __('Heading Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_heading_color',
        'section' => 'slider1_section'
    ));

    // Second Heading control
    $wp_customize->add_setting('slider1_heading2', array(
        'default' => __('BEST WP DEVELOPER', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('slider1_heading2_ctrl', array(
        'label' => __('Second Heading', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'slider1_heading2',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_heading2_color', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control('slider1_heading2_color_ctrl', array(
        'label' => __('Heading Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_heading2_color',
        'section' => 'slider1_section'
    ));

    // First description
    $wp_customize->add_setting('slider1_description', array(
        'default' => __('Your Business Speed Optimizer', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('slider1_description_ctrl', array(
        'label' => __('Description', 'bestwpdevelopertd'),
        'type' => 'textarea',
        'settings' => 'slider1_description',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_description_color', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control('slider1_description_ctrl_color', array(
        'label' => __('Description Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_description_color',
        'section' => 'slider1_section'
    ));
    
    // Second description
    $wp_customize->add_setting('slider1_description2', array(
        'default' => __('We’ll help to turn your business into fulfillment digitalized form and provide a clear strategy', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('slider1_description2_ctrl', array(
        'label' => __('Sub-description', 'bestwpdevelopertd'),
        'type' => 'textarea',
        'settings' => 'slider1_description2',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_description2_color', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control('slider1_description2_ctrl_color', array(
        'label' => __('Description Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_description2_color',
        'section' => 'slider1_section'
    ));

    // Button control
    $wp_customize->add_setting('slider1_button', array(
        'default' => __('Contact Us', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('slider1_button_ctrl', array(
        'label' => __('Button Text', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'slider1_button',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_button_link', array(
        'default' => 'https://www.bestwpdeveloper.com'
    ));
    $wp_customize->add_control('slider1_button_link_ctrl', array(
        'label' => __('Link', 'bestwpdevelopertd'),
        'type' => 'url',
        'settings' => 'slider1_button_link',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_button_color', array(
        'default' => 'linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4)'
    ));
    $wp_customize->add_control('slider1_button_color_ctrl', array(
        'label' => __('Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_button_color',
        'section' => 'slider1_section'
    ));

    $wp_customize->add_setting('slider1_button_bg_color', array(
        'default' => 'linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4)'
    ));
    $wp_customize->add_control('slider1_button_bg_color_ctrl', array(
        'label' => __('Background Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'slider1_button_bg_color',
        'section' => 'slider1_section'
    ));

    








    // Hero section (About section)
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'bestwpdevelopertd'),
    ));
    
    // Background color
    $wp_customize->add_setting('hero_backgroud_color', array(
        'default' => '#fff',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('hero_backgroud_ctrl_color', array(
        'label' => __('Backgroud Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_backgroud_color',
        'section' => 'hero_section'
    ));

    // Hero section heading
    $wp_customize->add_setting('hero_heading', array(
        'default' => __('About Best WP Developer', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('hero_heading_ctrl', array(
        'label' => __('Heading', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'hero_heading',
        'section' => 'hero_section'
    ));

    // Hero heading color
    $wp_customize->add_setting('hero_heading_color', array(
        'default' => 'rgb(0, 0, 0)',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('hero_heading_color_ctrl', array(
        'label' => __('Heading Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_heading_color',
        'section' => 'hero_section'
    ));

    // Hero description
    $wp_customize->add_setting('hero_description', array(
        'title' => __('The Best WP Developer is renowned worldwide with contributions given by thousands of capable developers and entrepreneurs worldwide. Our sustainability and adaptive business environment are very promising and also we trust in delivering services with initial technology trends for updates of all time. We believe, punctuality is the key to success and we’re no different. Our systematic and organized working method would never disappoint you. The IT solutions provided by us would guide you to achieve your ultimate goal ,whether it’s business or personal purpose. Keeping your quality is our first priority. It’s been 8 years and our experience has grown to the level where we won’t disappoint you and will provide you with the best digital services for business or personal.', 'bestwpdevelopertd'),
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('hero_description_ctrl', array(
        'label' => __('Description', 'bestwpdevelopertd'),
        'type' => 'textarea',
        'settings' => 'hero_description',
        'section' => 'hero_section'
    ));

    // Hero description color
    $wp_customize->add_setting('hero_description_color', array(
        'default' => 'rgb(53, 52, 52)',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('hero_description_color_ctrl', array(
        'label' => __('Description Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_description_color',
        'section' => 'hero_section'
    ));

    // Hero section first button
    $wp_customize->add_setting('hero_button', array(
        'default' => __('More About Us', 'bestwpdevelopertd'),
    ));
    $wp_customize->add_control('hero_button_ctrl', array(
        'label' => __('Button Text', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'hero_button',
        'section' => 'hero_section'
    ));

    $wp_customize->add_setting('hero_button_link', array(
        'default' => 'https://www.bestwpdeveloper.com'
    ));
    $wp_customize->add_control('hero_button_link_ctrl', array(
        'label' => __('Link', 'bestwpdevelopertd'),
        'type' => 'url',
        'settings' => 'hero_button_link',
        'section' => 'hero_section'
    ));

    $wp_customize->add_setting('hero_button_color', array(
        'default' => 'linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4)'
    ));
    $wp_customize->add_control('hero_button_color_ctrl', array(
        'label' => __('Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_button_color',
        'section' => 'hero_section'
    ));

    $wp_customize->add_setting('hero_button_bg_color', array(
        'default' => 'linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4)'
    ));
    $wp_customize->add_control('hero_button_bg_color_ctrl', array(
        'label' => __('Background Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_button_bg_color',
        'section' => 'hero_section'
    ));

    // Hero section second button
    $wp_customize->add_setting('hero_button2', array(
        'default' => __('Free Consultancy', 'bestwpdevelopertd'),
    ));
    $wp_customize->add_control('hero_button_ctrl2', array(
        'label' => __('Button Text', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'hero_button2',
        'section' => 'hero_section'
    ));

    $wp_customize->add_setting('hero_button_link2', array(
        'default' => 'https://www.bestwpdeveloper.com'
    ));
    $wp_customize->add_control('hero_button_link_ctrl2', array(
        'label' => __('Link', 'bestwpdevelopertd'),
        'type' => 'url',
        'settings' => 'hero_button_link2',
        'section' => 'hero_section'
    ));

    $wp_customize->add_setting('hero_button_color2', array(
        'default' => 'linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4)'
    ));
    $wp_customize->add_control('hero_button_color_ctrl2', array(
        'label' => __('Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_button_color2',
        'section' => 'hero_section'
    ));

    $wp_customize->add_setting('hero_button_bg_color2', array(
        'default' => 'linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4)'
    ));
    $wp_customize->add_control('hero_button_bg_color_ctrl2', array(
        'label' => __('Background Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'hero_button_bg_color2',
        'section' => 'hero_section'
    ));






    // Our Services section
    $wp_customize->add_section('services_section', array(
        'title' => __('Services Section', 'bestwpdevelopertd'),
    ));

    // Services Section Background Color
    $wp_customize->add_setting('services_section_bg_color', array(
        'default' => '#fff'
    ));
    $wp_customize->add_control('services_section_bg_color_ctrl', array(
        'label' => 'Background Color',
        'type' => 'color',
        'settings' => 'services_section_bg_color',
        'section' => 'services_section'
    ));

    // Services Heading
    $wp_customize->add_setting('services_setting_section', array(
        'default' => __('Our Services g', 'bestwpdevelopertd'),
        'transport'=>'postMessage'
    ));
    $wp_customize->add_control('services_ctrl', array(
        'label' => __('Heading', 'bestwpdevelopertd'),
        'type' => 'text',
        'settings' => 'services_setting_section',
        'section' => 'services_section'
    ));

    $wp_customize->add_setting('services_heading_color', array(
        'default' => '#000',
        'transport'=>'postMessage'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'services_heading_color_ctrl', array(
        'label' => __('Color', 'bestwpdevelopertd'),
        'type' => 'color',
        'settings' => 'services_heading_color',
        'section' => 'services_section'
    )));



   





// Last class no 
}
add_action('customize_register', 'bestwpdevelopertd_home_page_customize');







?>