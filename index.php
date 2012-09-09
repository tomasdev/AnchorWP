<?php get_header(); ?>
<section class="content">

    <?php if(is_search()) {?><h1>You searched for &ldquo;<?php the_search_query(); ?>&rdquo;.</h1><?php } ?>
    
    <?php if(have_posts()): ?>
        <?php if(is_search()) {?><p>We found <?php echo $wp_query->post_count; ?> <?php echo pluralise($wp_query->post_count, 'result'); ?> for &ldquo;<?php the_search_query(); ?>&rdquo;</p><?php } ?>
        <ul class="items wrap">
            <?php while( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <time datetime="<?php the_date('c'); ?>"><?php echo relative_time( get_the_time('c') ); ?></time>
                    <h2><?php the_title(); ?></h2>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>

        <?php if ( $wp_query->max_num_pages > 1 ) : ?>
            <p><?php previous_posts_link(); ?> <?php next_posts_link(); ?></p>
        <?php endif; ?>
    <?php else: ?>
        <?php if (is_search()): ?>
            <p>Unfortunately, there's no results for &ldquo;<?php the_search_query(); ?>&rdquo;. Did you spell everything correctly?</p>
        <?php else: ?>
            <p>Looks like you have some writing to do!</p>
        <?php endif; ?>
    <?php endif; ?>

</section>
<?php get_footer(); ?>