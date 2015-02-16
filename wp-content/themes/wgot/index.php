<?php get_header();?>

<div id="main">

<?php get_sidebar();?>
<?php require('latestlist.php'); ?>

<div id="content">
<?php 
/* exclude posts in the playlist category but keep paging working */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
  'cat' => '-13',
  'paged' => $paged
);
query_posts($args);

if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<?php require('post.php'); ?>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p class="nav"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
</div>

<?php get_footer();?>
