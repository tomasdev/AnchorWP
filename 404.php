<?php get_header(); the_post(); ?>
<section class="content">
    <h1>Oh no, this page can&rsquo;t be found.</h1>

    <p>Unfortunately, the page at <code><?php echo $_SERVER['REQUEST_URI']; ?></code> 
    can't be found, but don't give up hope yet! You can always try going back to 
    the homepage, or searching.</p>
</section>
<?php get_footer(); ?>