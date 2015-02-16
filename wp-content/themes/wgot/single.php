<?php get_header();?>

<div id="main">

<?php get_sidebar();?>

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<?php require('post.php'); ?>
<?php comments_template(); // Get wp-comments.php template ?>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p align="center"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
</div>

<?php get_footer();?>
