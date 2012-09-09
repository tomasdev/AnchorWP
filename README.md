# AnchorWP

Two awesome guys ([@idiot](http://twitter.com/idiot) and [@_craigchilds](http://twitter.com/_craigchilds)) created a really nice simple CMS called [Anchor CMS](https://github.com/anchorcms/anchor-cms).

It comes with a default theme (and everything here is about that theme) which I found really beautiful from a visual point of view, but also really simple from a programmer perspective.

So I decided to transform it to a WordPress theme.

##### Why?
Simply because it's one of the most used blogging platforms (with Tumblr and Blogger) and I have a bunch of blogs (including my personal one) that would really look nice with this aesthetic. Also because of the license, which is [WTFPL](http://sam.zoy.org/wtfpl/COPYING).

## Documentation
Simply [download a zipfile](https://github.com/tomasdev/AnchorWP/zipball/master) and copy the folder contents to your `wp-content/themes` folder. Then go ahead to your `wp-admin` panel and activate it.

Feel free to contribute to this repository with either pull requests, issues or comments!

## TO-DOs
* Line 19 comments.php: There's no WP equivalent to `comment_form_notifications()` to display errors after form submission.
* Line 13 single.php: `article_custom_field('attribution');` should be replaced with WordPress [custom post fields](http://codex.wordpress.org/Custom_Fields).
* Line 6 inc/theme-menu.php: Fix the condition, it's never working. It should show the message for logged-in administrators.
* There is no screenshot.png for the theme preview.
* It would be nice to be able to see comments' authors avatars (currently no room for that).
* It would be nice to take advantage of comments' authors URL (currently not showing up in the form).
* It would be nice to have a public domain with this theme implemented to let the users check it out.

## Idea
1. I have done a bunch of Tumblr templates, and I think it might also be converted to those formats, but I have no time to do that…
2. Idem #1 for Blogger