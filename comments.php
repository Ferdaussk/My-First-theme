<div class="comments">
    <h2 class="comments-title">
        <?php
        $bestwpdevelopertd_cn = get_comments_number();
        if ( 1 == $bestwpdevelopertd_cn ) {
            _e( "1 Comment", "bestwpdevelopertd" );
        } else {
            echo $bestwpdevelopertd_cn . " " . __( "Comments", "bestwpdevelopertd" );
        }
        ?>
    </h2>
    <div class="comments-list">
        <?php
        wp_list_comments();
        ?>
        <div class="comments-pagination">
            <?php
            the_comments_pagination( array(
                'screen_reader_text' => __( 'Pagination', 'bestwpdevelopertd' ),
                'prev_text'          => '<' . __( 'Previous Comments', 'bestwpdevelopertd' ),
                'next_text'          => '>' . __( 'Next Comments', 'bestwpdevelopertd' ),
            ) );
            ?>
        </div>
        <?php
        if ( ! comments_open() ) {
            _e( "Comments are closed.", "bestwpdevelopertd" );
        }
        ?>
    </div>

    <div class="comments-form">
        <?php
        comment_form();
        ?>
    </div>
</div>

