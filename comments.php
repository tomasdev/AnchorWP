<?php if(comments_open()): ?>
    <section class="comments">
    
        <h1><?php echo get_comments_number() . pluralise(get_comments_number(), ' comment'); ?> <a href="#comment" title="Contribute to the discussion!">Add your own</a></h1>
    
        <?php if(have_comments()): ?>
        <ul class="commentlist">
            <?php wp_list_comments( array( 'callback' => 'anchor_comment' ) ); ?>
        </ul>
        <?php endif; ?>
        
        <form id="comment" class="commentform" method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
            <legend>Add your comments</legend>
            
            <?php if($user_ID) : ?>
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
            <?php else : ?>

                <?php /* echo comment_form_notifications(); */ ?>
                
                <p class="name">
                    <label for="name">Your name:</label>
                    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                </p>
                
                <p class="email">
                    <label for="email">Your email address:</label>
                    <em>Will never be published.</em>
                    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                </p>
            <?php endif; ?>
            
            <p class="textarea">
                <label for="text">Your comment:</label>
                <em>Allowed HTML: <code>&lt;a&gt;</code>, <code>&lt;b&gt;</code>, <code>&lt;blockquote&gt;</code>, <code>&lt;code&gt;</code>, <code>&lt;em&gt;</code>, <code>&lt;i&gt;</code>, <code>&lt;p&gt;</code> and <code>&lt;pre&gt;</code>.</em>
                <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
            </p>
            
            <p class="submit">
                <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />  
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            </p>
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    
    </section>
<?php else: ?>
<section class="comments">
    <h1>Comments are closed.</h1>
</section>
<?php endif; ?>