<?php 
get_header(); 
?>

    <!-- Here have all header and menu section. location another-navigation.php -->
    <?php get_template_part("templates/common/another-navigation"); ?>
    
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	?>
        <!-- Hero Area Start Here -->
        <section class="service-main-area hero-bg">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-xl-12">
                    <div class="service-main-content blog-heading text-center">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End Here -->
    <section class="blog-body">
        <div class="container">
            <div class="row pt-100">
                <div class="col-xl-12">
                    <div class="blog-title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="blog-meta">
                        <span><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="user"><i class="fas fa-user"></i><?php echo _e(' by '); the_author(); ?></a></span>
                        <span><a href=""><i class="far fa-calendar-alt"></i><?php echo _e(' on '); the_date('j-F-Y'); ?></a></span>
                        <span><a href=""><i class="fas fa-comment"></i> <?php echo _e("Comments", "bestwpdevelopertd"); ?></a></span>
                    </div> <!-- comments -->

                    <!-- single blog image -->
                    <div class="single-blgo"></div>
                    <!-- comments -->

                    <!-- comments -->
                    <div class="blog-content">

                        <!-- Have content here -->
                        <?php the_content(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="share-post-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="share-post text-center">
                        <h4>Share :</h4>
                        <span><a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></span>
                        <span><a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fab fa-twitter"></i></a></span>
                        <span><a target="_blank" class="share-button share-linkedin" href="https://www.linkedin.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on linkedin"><i class="fab fa-linkedin-in"></i></a></span>
                        <span><a target="_blank" class="share-button share-pinterest" href="https://www.pinterest.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on pinterest"><i class="fab fa-pinterest-p"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="previous-next-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="previous-next-btn">
                        
                    <!-- The single page pagination -->
                        <?php
                        if ( is_attachment() ) {
                            // Parent post navigation.
                            the_post_navigation(
                                array(
                                    /* translators: %s: Parent post link. */
                                    'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'bestwpdevelopertd' ), '%title' ),
                                )
                            );
                        }
                                    $bwdbyferdaussktd_next_label     = esc_html__( '', 'bwdbyferdaussktd' );
                                    $bwdbyferdaussktd_previous_label = esc_html__( '', 'bwdbyferdaussktd' );
                                    the_post_navigation(
                                        array(
                                            'next_text' => '<p class="">' . $bwdbyferdaussktd_next_label . '</p><p class="previous-post">Previous Post</p>',
                                            'prev_text' => '<p class="">' . $bwdbyferdaussktd_previous_label . '</p><p class="next-post f-right">Next Post</p>',
                                        )
                                    );

                        ?>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ( !post_password_required() ): ?>
    <section class="comment-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="content">
                            <!-- Comment form dynamic -->
                            <?php 
                                // If comments are open or there is at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; endwhile; ?>
<?php get_footer(); ?>
