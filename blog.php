<?php 
/**
* Template Name: Blog page
*/
the_post();
get_header(); 
?>

<!-- Here have all header and menu section. location another-navigation.php -->
<?php get_template_part("templates/common/another-navigation"); ?>


    <!-- Hero Area Start Here -->
    <section class="service-main-area hero-bg">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-xl-12">
                    <div class="service-main-content text-center">
                        <h1><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End Here -->
    <section class="blog-body-area">
        <div class="container-fluid">
            <?php 

            get_template_part("templates/blog-post/common-blog", get_post_format()); 

            ?>
            <div class="row">
                <div class="col-xl-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            
                            <!-- Post pagination -->
                            <?php
                                bestwpdevelopertd_blog_pagination();                                
                            ?>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>
