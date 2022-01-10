<?php 
get_header();
?>

<!-- Here have all header and menu section. location another-navigation.php -->
<?php get_template_part("templates/common/another-navigation"); ?>



<div class="container text-center mt-3">
    <main>
        <div class=message>
            <strong class="errornumber"><div class="fourerror">4</div>04</strong>
            <p class=title>OPSS!!THAT PAGE DOSEN'T EXIST!!</p>
            <p class=message-text>The page you are looking for might be removed or is temporally unavailable</p>
            <a  class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">GO BACK HOME</a>
        </div>
    </main>
    <div class=box-astronaut>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/astronaut.svg" alt="">
    </div>
</div>



<?php
get_footer();
?>