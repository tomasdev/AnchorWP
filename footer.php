        <div class="wrap">
            <footer id="bottom">
                <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</small>
                    
                <ul role="navigation">
                    <li><a href="<?php bloginfo('rss_url'); ?>">RSS</a></li>
                    <?php if(twitter_account()): ?>
                    <li><a href="http://twitter.com/<?php echo twitter_account(); ?>">@<?php echo twitter_account(); ?></a></li>
                    <?php endif; ?>
                    
                    <li><a href="<?php echo admin_url(); ?>" title="Administer your site!">Admin area</a></li>
                   
                    <li><a href="/" title="Return to my website.">Home</a></li>
                </ul>
                
                <a id="attribution" title="Powered by WordPress" href="//wordpress.org">Powered by WordPress</a>
            </footer>
        </div>

        <script>var base = '<?php echo theme_url(); ?>';</script>
        <script src="<?php echo theme_url('js/main.js'); ?>"></script>
<?php wp_footer(); ?>
    </body>
</html>
