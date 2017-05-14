<div id="recentaired">
<!--<h2><a href="/listen-live/">Now Playing</a></h2>
<ul><li id="onair"><?php require('schedule/functions.php');
$name = liveShow();
$pos = strpos($name, ' - ');

if ($pos === FALSE) {
   $program = $name;
 }
 else {
    $program = '<strong> ' . substr($name, 0, $pos) . '</strong> - <a href="/listen-live/">' . substr($name, $pos + 3, strlen($name) - ($pos + 3)) . '</a>';
//    $program = '<a href="/listen-live/">' . substr($name, $pos + 3, strlen($name) - ($pos + 3)) . '</a>';
 }

echo $program; ?></li></ul>-->
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
