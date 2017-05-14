<div id="recentaired">
<h2><a href="/category/playlists/">Recently Aired</a></h2>
<ul>
<?php
global $post;
$myposts = get_posts('numberposts=10&category=13');
foreach($myposts as $post) :
  setup_postdata($post);
?>
<li><?php the_time('n/d') ?>: 
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
endforeach;
$post = 0;
?>
</ul>
</div>
