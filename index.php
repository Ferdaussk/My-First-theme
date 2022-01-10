<?php get_header(); ?>
    <!-- Header Area Start Here -->

    <header>
        <div class="header-area sticky" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Bwb.png" alt="best wp developer"></a>
                        </div>
                    </div>

                    <!-- Here have all header menu section. location index-navigation.php -->
                    <?php get_template_part("templates/common/index-navigation"); ?>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->
    <main>
        <!-- Hero Area Start Here -->
        <div class="hero-area">
            <div class="container h-100">
                <div class="row  h-100 align-items-center">
                    <div class="col-xl-8 offset-xl-2">
                    <div class="hero-content text-center">
                            <!-- <h1><span>welcome to</span> best wp developer</h1> -->
                            <h1 class="slider1-heading" style="color:<?php echo get_theme_mod('slider1_heading2_color'); ?>"><span><?php echo get_theme_mod('slider1_heading'); ?></span> <?php echo get_theme_mod('slider1_heading2'); ?></h1>
                            <h4 style="color:<?php echo get_theme_mod('slider1_description_color'); ?>"><?php echo get_theme_mod('slider1_description') ?></h4>
                            <p style="color:<?php echo get_theme_mod('slider1_description2_color'); ?>"><?php echo get_theme_mod('slider1_description2') ?></p>
                            <a  class="button" style="background: <?php echo get_theme_mod('slider1_button_bg_color'); ?>; color: <?php echo get_theme_mod('slider1_button_color'); ?>" href="<?php echo get_theme_mod('slider1_button_link'); ?>"><?php echo get_theme_mod('slider1_button'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End Here -->
        <!-- About Area Start Here -->
        <section class="about-area pt-100 pb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="about-area-heading">
                            <h2 class="section-title about-scetion-title text-center"><?php echo get_theme_mod('hero_heading'); ?></h2>
                            <p class="about-description"><?php echo get_theme_mod('hero_description'); ?></p>
                            <div class="dual-button text-center">
                                <a href="<?php echo get_theme_mod('hero_button_link'); ?>" class="button btn1" style="color: <?php echo get_theme_mod('hero_button_color'); ?>; background: <?php echo get_theme_mod('hero_button_bg_color'); ?> "><?php echo get_theme_mod('hero_button'); ?></a>
                                <a href="<?php echo get_theme_mod('hero_button_link2'); ?>" class="button btn2" style="color: <?php echo get_theme_mod('hero_button_color2'); ?>; background: <?php echo get_theme_mod('hero_button_bg_color2'); ?> "><?php echo get_theme_mod('hero_button2'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here -->
        <!-- Service Area Start Here -->
        <section class="services-area pb-70 pt-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="section-title service-title text-center">
                            <h2 class="testOneServices"><?php echo get_theme_mod('services_setting_section'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-100">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="best-web-design-services">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-pen-fancy"></i>
                                    </div>
                                    <h3>website design</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="website-development">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <h3>website development</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="wordpress-development-services">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fab fa-wordpress"></i>
                                    </div>
                                    <h3>wordpress</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="ecommerce-website-development-company">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <h3>e-commerce development</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="shopify-development-company">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fab fa-shopify"></i>
                                    </div>
                                    <h3>shopify development</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="website-speed-optimization">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </div>
                                    <h3>website speed optimization</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="website-maintenance-service">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <h3>website maintenance service</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="apps-development">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <h3>apps development</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="seo-service-agency">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <h3>seo services</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="graphic-design-service">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-pen-nib"></i>
                                    </div>
                                    <h3>graphic design</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="digital-marketing-agency-in-usa">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <h3>digital marketing</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30">
                        <a href="web-consultancy">
                            <div class="single-service text-center">
                                <div class="service-content">
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h3>consultancy</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>  
        <!-- Service Area End Here -->
        <!-- Working Process Start Here -->
        <section class="working-process pt-100 pb-70 grey-bg">
            <div class="container">
                <div class="row pb-100">
                    <div class="col-xl-12">
                        <div class="section-title working-section-title working-title text-center">
                            <h2>working process</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-100 process-row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                        <div class="single-process one text-center">
                            <h3>submit requirement</h3>
                            <p>first, you have to submit your all requirements to us.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                        <div class="single-process two text-center">
                            <h3>project discussion</h3>
                            <p>after getting your requirements, best-wp-developer will discuss the project</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                        <div class="single-process three text-center">
                            <h3>working action plan</h3>
                            <p>discussion between us, best-wp-developer will finalize the action plan.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                        <div class="single-process four text-center">
                            <h3>secure payment</h3>
                            <p>secure payment with 100% money-back guarantee via paypal</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                        <div class="single-process five text-center">
                            <h3>design and development</h3>
                            <p>finally, we will start to design and develop your project</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30 ">
                        <div class="single-process six text-center">
                            <h3>project delivery</h3>
                            <p>after the final check and <span>QC</span>, best-wp-developer will deliver your project</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working Process End Here -->
        <!-- Portfolio Area Start Here -->
        <section class="portfolio mt-70">
            <div class="container">
                <div class="row">        
                    <div class="col-xl-12">
                        <div class="section-title portfolio-title text-center">
                            <h2>Working portfolio</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-70">
                    <div class="item-menu pb-40">
                        <ul>
                            <li class="active" data-filter="*">all</li>
                            <li data-filter=".E-commerce">E-commerce</li>
                            <li data-filter=".Agency">Agency</li>
                            <li data-filter=".Corporate">Corporate</li>
                            <li data-filter=".Organization">Organization</li>
                        </ul>
                    </div>
                    <div class="item-details">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item webdesign">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/designerkidzandbeyond.com_-1.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://designerkidzandbeyond.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Organization">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/fintc.dk_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="http://fintc.dk/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item E-commerce">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/kemia.ca_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://kemia.ca/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item webdesign seo">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/loustauabogados.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://loustauabogados.com/en/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item webdevelopment graphics">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/masterkeys.fr_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://masterkeys.fr/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Agency">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/maxerience.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://maxerience.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Agency">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/mubbsher.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://mubbsher.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Agency">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/paivaconsulting.ca_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://paivaconsulting.ca/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Organization">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.backpacksofmercy.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.backpacksofmercy.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item E-commerce">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.ecointeriors.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.ecointeriors.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Agency">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.hertrich.photo_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.hertrich.photo/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Organization">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.karinvandenbosch.nl_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.karinvandenbosch.nl/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Organization">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.legs4africa.org_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.legs4africa.org/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item E-commerce">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.mamir-home.de_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.mamir-home.de/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item E-commerce">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.mechcad.net_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.mechcad.net/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Corporate">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.shinify.se_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://www.shinify.se/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Organization">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/www.themillionairenextdoor.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://themillionairenextdoor.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 mb-30 item Agency">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/gandwcraftsman.com_.jpg" alt="best wp developer">
                                </div>
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a href="https://gandwcraftsman.com/" target="_blank"><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
    <!-- Portfolio Area End Here -->
        <!-- Clients Feedback Start Here -->
        <section class="clients-feedback pt-100 pb-70 mt-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title feedback-title text-center">
                                <h2>clients feedback</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-70">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="first-feedback">
                                <iframe  height="315" src="https://www.youtube.com/embed/eEGEsNXeEPk" title="YouTube video player" style="border:0;"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="second-feedback">
                                <iframe  height="315" src="https://www.youtube.com/embed/7-aLTjJw_NY" title="YouTube video player" style="border:0;"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="third-feedback">
                                <iframe height="315" src="https://www.youtube.com/embed/Xju5uP4gbfM" title="YouTube video player" style="border:0;"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="fourth-feedback">
                                <iframe  height="315" src="https://www.youtube.com/embed/iVDlpTSWsZ0" title="YouTube video player" style="border:0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="review-btn button text-center">
                            <a href="https://www.facebook.com/bestwpdeveloper/reviews/">Check Review</a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Clients feedback End Here -->
        <!-- Faq Area Start Here -->
        <section class="faq-area ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title faq-section-title text-center">
                            <h2>FAQ</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-70">
                    <div class="col-xl-6 col-lg-6 col-md-12  col-sm-12 mb-30">
                        <div class="left-faq">
                            <div id="left-accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link" class="arrow" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Would you please describe your services?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#left-accordion">
                                        <div class="card-body">
                                            We are a WordPress web design and development company. All over the world, we are providing services very smartly within time. Without web design and development, we also provide graphic design, apps development, and so many other things. We are very much proud especially of the clients because they have always appreciated our work. We are very dedicated to our services and client satisfaction is our main priority always. Best WP developer is committed to you to give the best services always.<a href="www.bestwpdeveloper.xyz">For other support.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            If we don't like the project design what kind of procedure you will provide us?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#left-accordion">
                                        <div class="card-body">
                                            First of all, which part of the design you don't like just inform us. We will try our best to do according to your demand. But if we can't do your project according to your demand, the Best WP Developer will give you a full refund.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can you give delivery the emergency project very fast?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#left-accordion">
                                        <div class="card-body">
                                            Definitely, If you need, we can deliver your project very fast. But usually, we submit the client's project very fast because We have enough expert web developers who are dedicated to their job. So, please don't worry about that. If you need very urgent, you can contact with us directly. We will provide better services for you to get fast services.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            How many days will you take to complete a project?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#left-accordion">
                                        <div class="card-body">
                                            Time and day will depend on the project. But we are very fast to submit your project. We never miss the project deadline, because we have many expert developers.  They are very dedicated to any project. So, if you want to know your project time please contact with us.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            How do you complete project gradually would you please describe it?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#left-accordion">
                                        <div class="card-body">
                                            Yes, why not you have the right to know how we will handle your project. Our Working Process
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            Will you help to purchase domain and hosting?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#left-accordion">
                                        <div class="card-body">
                                            Sure, if you don't have any domain and hosting you can get help from us to purchase your domain and hosting.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingseven">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                            I have a domain but I don't have hosting so what can I do now?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#left-accordion">
                                        <div class="card-body">
                                            It's not a problem now you can buy hosting and redirect to the domain. If you can't do it just contact us we will help you.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeight">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                            Will you help me to fix a bug on my existing website?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#left-accordion">
                                        <div class="card-body">
                                            Sure, we will help you to fix the bug in your website and we also will help you to rebuild if you need it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="right-faq">
                            <div id="right-accordion">
                                <div class="card">
                                    <div class="card-header" id="headingnine">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapsenine" aria-expanded="true" aria-controls="collapsenine">
                                            Is there any guarantee of your services?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#right-accordion">
                                        <div class="card-body">
                                            Yes, We always give you 100% guarantee money back. As you will pay on PayPal, you will get the refund policy on PayPal. So please don't worry about that. Because it is our business, we always try to keep honesty in our business all the time.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            If we don't like the project design what kind of procedure you will provide us?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#right-accordion">
                                        <div class="card-body">
                                            First of all, which part of the design you don't like just inform us. We will try our best to do according to your demand. But if we can't do your project according to your demand, the Best WP Developer will give you a full refund.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingeleven">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                            Can you give delivery the emergency project very fast?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#right-accordion">
                                        <div class="card-body">
                                            Definitely, If you need, we can deliver your project very fast. But usually, we submit the client's project very fast because We have enough expert web developers who are dedicated to their job. So, please don't worry about that. If you need very urgent, you can contact with us directly. We will provide better services for you to get fast services.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingtwelve">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                            How many days will you take to complete a project?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve" data-parent="#right-accordion">
                                        <div class="card-body">
                                            Time and day will depend on the project. But we are very fast to submit your project. We never miss the project deadline, because we have many expert developers.  They are very dedicated to any project. So, if you want to know your project time please contact with us.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingthirteen">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
                                            How do you complete project gradually would you please describe it?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsethirteen" class="collapse" aria-labelledby="headingthirteen" data-parent="#right-accordion">
                                        <div class="card-body">
                                            Yes, why not you have the right to know how we will handle your project. Our Working Process
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfourteen">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
                                            Will you help to purchase domain and hosting?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefourteen" class="collapse" aria-labelledby="headingfourteen" data-parent="#right-accordion">
                                        <div class="card-body">
                                            Sure, if you don't have any domain and hosting you can get help from us to purchase your domain and hosting.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfifteen">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
                                            I have a domain but I don't have hosting so what can I do now?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefifteen" class="collapse" aria-labelledby="headingfifteen" data-parent="#right-accordion">
                                        <div class="card-body">
                                            It's not a problem now you can buy hosting and redirect to the domain. If you can't do it just contact us we will help you.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingsixteen">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
                                            Will you help me to fix a bug on my existing website?
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="collapsesixteen" class="collapse" aria-labelledby="headingsixteen" data-parent="#right-accordion">
                                        <div class="card-body">
                                            Sure, we will help you to fix the bug in your website and we also will help you to rebuild if you need it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="free-consultancy text-center pt-30">
                            <a href="web-consultancy" class="button">Get Free Consultancy</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Area End Here -->
    </main>
<?php get_footer(); ?>
