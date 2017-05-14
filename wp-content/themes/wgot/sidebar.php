<div id="sidebar">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

<h2><?php _e('Site Search'); ?></h2>
<form id="searchform" method="get" action="<?php bloginfo('siteurl')?>/">
<fieldset>
 <input type="text" name="s" id="s" class="textbox" value="<?php echo wp_specialchars($s, 1); ?>" />
 <input id="btnSearch" type="submit" name="submit" value="<?php _e('Go'); ?>" />
</fieldset>
</form>

<?php if (!is_home() && !is_page('calendar') && !is_page('contact-us') && (in_category('13') || is_tag())) {
         if ( function_exists('wp_tag_cloud') ) : ?>
<h2>Programs</h2>
<?php wp_tag_cloud('smallest=8&largest=8&format=list'); ?>
<?php endif; } ?>

<h2><?php _e('Station Info'); ?></h2>
<ul>
<?php wp_list_pages('title_li=&depth=2&exclude=6284' ); ?>
</ul>

<h2><?php _e('Post by Type'); ?></h2>
<ul>
<?php wp_list_categories('hierarchical=true&depth=3&title_li=&show_count=0');?>
</ul>

<h2><?php _e('Get Involved'); ?></h2>
<ul>
<?php wp_list_pages('title_li=&depth=1&child_of=6284' ); ?>
</ul>

<h2>Support Us</h2>
<ul id="donate">
<li><a href="http://www.cafepress.com/wgot947/" title="WGOT-LP gear is available at CafePress">CafePress</a></li>
</ul>

<h2>Site Users</h2>
<ul>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
<?php endif; ?>

</div><!-- sidebar -->

