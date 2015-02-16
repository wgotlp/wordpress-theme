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
<!--
<h2>Events</h2>
<?php
the_widget("WP_Widget_KO_Calendar",
           array(
                 'title' => 'Events Calendar',
                 'url' => 'http://www.google.com/calendar/feeds/wgot.org_uhsg10erec001lfjtgbq9q5tm0%40group.calendar.google.com/public/full',
                 ),
           array('before_widget' => '<div class="calendarwidget">',
                 'after_widget' => '</div>',
                 'before_title' => '<div class="calendartitle">',
                 'after_title' => '</div>'
                 ));
?>
-->
</div>
