<p class="date"><span class="month"><?php the_time('M') ?></span><span class="day"><?php the_time('d') ?></span><span class="year"><?php the_time('Y') ?></span></p>

<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<div class="meta">
<p>by <em><?php the_author_nickname() ?></em> | <?php the_category(',') ?> <?php edit_post_link('edit this', '(', ')'); ?></p>
</div>

<div class="entry">
<?php the_content(__('Continue Reading &#187;')); ?>
<?php wp_link_pages(); ?>
</div>

<p class="comments"><?php comments_popup_link(__('Add a comment'), __('One response so far'), __('% responses so far'), "", ""); ?></p>

