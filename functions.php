<?php 
/**
 * Custom theme functions (helpers taken from original source code)
 */

function theme_url($str = '') {
    return get_template_directory_uri() . '/' . $str;
}

function twitter_account() {
    $options = anchor_get_theme_options();
    return $options['twitter_account'];
}

function anchor_comment($comment, $args, $depth) {
    switch ($comment->comment_type) {
        case 'pingback' :
        case 'trackback' :
        break;
        default:
            $author = $comment->comment_author;
            if($author_url = $comment->comment_author_url) {
                $author = '<a href="' . $author_url . '" target="_blank">' . $author . '</a>';
            }
        ?>
            <li class="comment" id="comment-<?php $comment->comment_ID; ?>">
                <h2><?php echo $author; ?></h2>
                <time><?php echo relative_time($comment->comment_date); ?></time> 
                
                <div class="content">
                    <?php echo $comment->comment_content; ?>
                </div>
            </li>
        <?php
        break;
    }
}

require( get_template_directory() . '/inc/wp-reset.php' );
require( get_template_directory() . '/inc/theme-helpers.php' );
require( get_template_directory() . '/inc/theme-menu.php' );
require( get_template_directory() . '/inc/theme-options.php' );