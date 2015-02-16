<?php get_header();?>
<div id="main">
<?php get_sidebar();?>
<div id="content">

   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<p class="date">
<span class="month"><?php the_time('M') ?></span>
<span class="day"><?php the_time('d') ?></span>
<span class="year"><?php the_time('Y') ?></span>
</p>

<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<div class="meta">
<p>Published by <em><?php the_author_nickname() ?></em> <?php edit_post_link('edit this', '(', ')'); ?></p>
</div>

<div class="entry">
<?php the_content(__('Continue Reading &#187;')); ?> 
<?php wp_link_pages(); ?>
<?php $sub_pages = wp_list_pages( 'depth=2&title_li=&echo=0&child_of=' . $id );?>
<?php if ($sub_pages <> "" ){?>

<ul>
<?php echo $sub_pages; ?>
</ul>
<?php }?>
</div>

<p class="comments">
<?php comments_popup_link(__('No responses yet'), __('One response so far'), __('% responses so far'), "", ""); ?>
</p>
<?php comments_template(); // Get wp-comments.php template ?>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p class="nav"><?php posts_nav_link(' - ','&#171; Prev','Next &#187;') ?></p>
</div>

<?php get_footer();?>
