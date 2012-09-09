<?php get_header(); the_post(); ?>
<section class="content" id="article-<?php echo $post->ID; ?>">
    <h1><?php the_title(); ?></h1>
    <article>
        <?php the_content(); ?>
    </article>
</section>

<?php comments_template(); ?>

<section class="footnote">
    <p>This article is my <?php echo numeral($post->ID); ?> oldest. It is <?php echo count_words(get_the_content()); ?> words long. 
    <?php /*echo article_custom_field('attribution'); */ ?></p>
</section>
<?php get_footer(); ?>