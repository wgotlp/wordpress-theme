<?php get_header();?>
<div id="main">

<?php get_sidebar();?>

<div id="content">
<h2>Search Results for "<?php echo $s; ?>"</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
  <?php require('post.php'); ?>
  </div>
  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <p class="centered"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
</div>

<?php get_footer();?>
