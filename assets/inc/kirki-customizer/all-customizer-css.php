<?php
// This function for all css class
function bestwpdevelopertd_customize_css(){
    ?>
        <style type="text/css">
            /** This section is slider section  */
            .hero-area{
                background-color: <?php echo get_theme_mod('slider1_backgroud_color', '#090a21'); ?>;
            }
            /** Hero section background color */
            .about-area{
                background-color: <?php echo get_theme_mod('hero_backgroud_color'); ?>;
            }
            .about-area-heading p{
                color: <?php echo get_theme_mod('hero_description_color'); ?>;
            }
            .about-scetion-title{
                color: <?php echo get_theme_mod('hero_heading_color', 'red'); ?>;
            }



            /** Our Services Section heading color */
            .testOneServices{
                color: <?php echo get_theme_mod('services_heading_color', 'red'); ?>;
            }
        </style>
    <?php
}
add_action('wp_head', 'bestwpdevelopertd_customize_css');























?>