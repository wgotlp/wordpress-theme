<?php
/*
Template Name: Schedule
*/
?>
<?php
$show = array(
     'AW'    => array(type => 'M',  name => 'Afropop Worldwide',             link => 'http://www.afropop.org/wp/'),
     'AER'   => array(type => 'T',  name => 'Arts Express Radio',            link => 'arts-express-radio'),
     'AR'    => array(type => 'T',  name => 'Alternative Radio',             link => 'alternative-radio'),
     'AAR'   => array(type => 'M',  name => 'Artists Related',               link => 'artists-related'),
     'BIM'   => array(type => 'M',  name => 'Big Island Mix',                link => 'big-island-mix'),
     'BOTB'  => array(type => 'M',  name => 'Back of the Bus',               link => 'back-of-the-bus'),
     'BKD'   => array(type => 'M',  name => 'Black Kill Death',              link => 'black-kill-death'),
     'BB'    => array(type => 'T',  name => 'Building Bridges',              link => 'building-bridges'),
     'CMS'   => array(type => 'M',  name => 'Cramela Mix Show',              link => 'cramela-mix-show'),
     'CR'    => array(type => 'T',  name => 'CMC/Counterpoise',              link => 'counterpoise-reviews'),
     'COL'   => array(type => 'T',  name => 'Century of Lies',               link => 'http://www.drugtruth.net/cms/views/latest_col'),
     'COV'   => array(type => 'T',  name => 'Community/Voices',              link => 'a-community-of-voices'),
     'D'     => array(type => 'M',  name => 'Departure',                     link => 'departure'),
     'DN'    => array(type => 'T',  name => 'Democracy Now!',                link => 'democracy-now'),
     'EB'    => array(type => 'T',  name => 'Earthbeat',                     link => 'earthbeat'),
     'E2F'   => array(type => 'M',  name => 'Ecstasy to Frenzy',             link => 'ecstasy-to-frenzy'),
     'ES'    => array(type => 'T',  name => 'EcoShock',                      link => 'radio-ecoshock'),
     'FC'    => array(type => 'T',  name => 'Feminist Current',              link => 'http://feministcurrent.com/'),
     'FMAAD' => array(type => 'M',  name => 'Fear Me as a Dictator',         link => 'fear-me-as-a-dictator'),
     'GT'    => array(type => 'T',  name => 'Gallery Talk',                  link => 'gallery-talk'),
     'GC'    => array(type => 'T',  name => 'Good Company',                  link => 'good-company'),
     'HBTR'  => array(type => 'M',  name => 'Heartbeattrue Radio',           link => 'heartbeattrue-radio'),
     'HS'    => array(type => 'M',  name => 'Hippie Sessions',               link => 'hippie-sessions'),
     'IP'    => array(type => 'T',  name => 'Informativo',                   link => 'informativo-pacifica'),
     'IYE'   => array(type => 'M',  name => 'In Your Ear',                   link => 'in-your-ear'),
     'JV'    => array(type => 'M',  name => 'Jazzville',                     link => 'jazzville'),
     'JCS'   => array(type => 'M',  name => 'Joe & Craig',                   link => 'joe-craig-show'),
     'm'     => array(type => 'M',  name => '(music)',                       link => ''),
     'MAL'   => array(type => 'M',  name => 'Malum',                         link => 'malum'),
     'MM'    => array(type => 'M',  name => 'Music Mosaic',                  link => 'music-mosaic'),
     'MTS'   => array(type => 'M',  name => 'Mixtape Sessions',              link => 'mixtape-sessions'),
     'NL'    => array(type => 'M',  name => 'Noche Latina',                  link => 'noche-latina'),
     'RPMH'  => array(type => 'M',  name => 'Red Pony Music Hour',           link => 'red-pony-music-hour'),
     'RR'    => array(type => 'M',  name => 'Replay Radio',                  link => 'replay-radio'),
     'SM'    => array(type => 'M',  name => 'Sábado Musical',                link => 'sabado-musical'),
     'SCR'   => array(type => 'T',  name => 'Sierra Club Radio',             link => 'sierra-club-radio'),
     'S'     => array(type => 'T',  name => 'Stripped',                      link => 'stripped'),
     'SPR'   => array(type => 'T',  name => 'So Pro Radio',                  link => 'sopro-radio'),
     'SR'    => array(type => 'M',  name => 'Sweet Retreat',                 link => 'sweet-retreat'),
     'TBBA'  => array(type => 'M',  name => 'Things be Blowin\' Around',     link => 'things-be-blowin-around'),
     'TWO'   => array(type => 'T',  name => 'This Way Out',                  link => 'this-way-out'),
     'wc'    => array(type => 'M',  name => '(wildcard)',                    link => ''),
     'WPP'   => array(type => 'M',  name => 'WGOT Playlist Project',         link => ''),
     'WNR'   => array(type => 'T',  name => 'War News Radio',                link => 'war-news-radio'),
     'WV'    => array(type => 'T',  name => 'Writer\'s Voice',               link => 'writers-voice'),
     'YOHAF' => array(type => 'T',  name => 'Health &amp; Fitness',          link => 'your-own-health-fitness'),
     );

require('schedule/functions.php');

?>
<?php get_header();?>
<div id="main">
<div id="content">

<div id="schedule">
<h2>Program Schedule</h2>

<p id="note">Updated: <?php echo date( "M d, Y", filemtime(__FILE__) ) ?>. 
Legend: Music Program | <strong>Talk Program</strong> | <span class="onair">On Air + Stream</span> | <span class="stream">Stream Only</span></p>

<table id="caltable" border="0">
<colgroup id="time" span="1"></colgroup>
<colgroup id="date" span="7"></colgroup>
<thead>
<tr>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
</tr>
</thead>
<tbody>
<tr>
<?php
        timeCell('12:00am');

	streamCell('E2F', 4);
	showCell('AAR');
	streamCell('AAR');
	showCell('HBTR');
	streamCell('NL');
	showCell('MAL');
	streamCell('CMS');
?>
</tr>
<tr>
<?php  timeCell('12:30'); ?>
</tr>
<tr>
<?php
        timeCell('1:00');
	showCell('E2F', 4);
	streamCell('HS');
	showCell('CMS', 4);
	streamCell('AW');
	showCell('AAR');
	streamCell('RR');
?>
</tr>
<tr>
<?php
	timeCell('1:30');
?>
</tr>
<tr>
<?php
        timeCell('2:00');

	streamCell('m', 7);
	streamCell('SPR');
	streamCell('AAR');
	showCell('HS');
	streamCell('SR');
?>
</tr>
<tr>
<?php   timeCell('2:30'); ?>
</tr>
<tr>
<?php
        timeCell('3:00');

	showCell('JV', 4);
	streamCell('NL');
	showCell('RR');
	streamCell('D');
	showCell('MTS');
	streamCell('wc');
?>
</tr>
<tr>
<?php   timeCell('3:30'); ?>
</tr>

<tr>
<?php
        timeCell('4:00');

	streamCell('m', 3);
	showCell('AW');
	streamCell('BIM');
	showCell('MM');
	streamCell('MTS');
?>
</tr>
<tr>
<?php
	timeCell('4:30');
 ?>
</tr>
<tr>
<?php
        timeCell('5am<br />-<br />7am');

	streamCell('m', 1);
	streamCell('m', 1);
	streamCell('m', 1);
	streamCell('m', 13);
	streamCell('m', 13);
?>
</tr>
<tr>
<?php
        timeCell('7:00');

	streamCell('DN');
	streamCell('DN');
	streamCell('DN');
	streamCell('DN');
	streamCell('DN');
?>
</tr>
<tr>
<?php
        timeCell('7:30');
?>
</tr>
<tr>
<?php
        timeCell('8:00');

	streamCell('YOHAF');
	streamCell('RPMH');
	streamCell('CR');
	streamCell('GC', 1);
	streamCell('HBTR');
?>
</tr>
<tr>
<?php
        timeCell('8:30');

	streamCell('TWO', 1);
?>
</tr>
<tr>
<?php
        timeCell('9:00');

	streamCell('S', 4);
	streamCell('ES');
	streamCell('YOHAF');
	streamCell('CR');
	streamCell('AER');
?>
</tr>
<tr>
<?php
        timeCell('9:30');
?>
</tr>

<tr>
<?php
        timeCell('10:00');

	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
?>
</tr>
<tr>
<?php
        timeCell('10:30');
	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
?>
</tr>
<tr>
<?php
        timeCell('11:00');

	streamCell('TBBA', 4);
	streamCell('WV');
	streamCell('E2F', 4);
	streamCell('TBBA', 4);
	streamCell('JV', 4);
?>
</tr>
<tr>
<?php
        timeCell('11:30');
?>
</tr>
<tr>
<?php
        timeCell('12:00');

	streamCell('COL');
?>
</tr>
<tr>
<?php
        timeCell('12:30');
?>
</tr>
<tr>
<?php
        timeCell('1:00');

	showCell('DN');
	showCell('DN');
	showCell('DN');
	showCell('DN');
	showCell('DN');
	showCell('IP', 1);
	showCell('AR');
?>
</tr>
<tr>
<?php
        timeCell('1:30');
	showCell('SM', 1);
?>
</tr>
<tr>
<?php
        timeCell('2:00');

	showCell('CMS', 4);
	showCell('E2F', 4);
	showCell('WV');
	showCell('BB', 1);
	showCell('CR');
	showCell('GC', 1);
	showCell('HBTR');

?>
</tr>
<tr>
<?php
        timeCell('2:30');

	showCell('SCR', 1);
	showCell('TWO', 1);
?>
</tr>
<tr>
<?php
        timeCell('3:00');

	showCell('HS');
	showCell('MTS');
	showCell('RPMH');
	showCell('YOHAF');
	showCell('NL');
?>
</tr>
<tr>
<?php
        timeCell('3:30');
?>
</tr>
<tr>
<?php
        timeCell('4:00');

	streamCell('DN');
	streamCell('DN');
	streamCell('DN');
	streamCell('DN');
	streamCell('DN');
	showCell('AR');
	streamCell('TBBA', 4);
?>
</tr>
<tr>
<?php
        timeCell('4:30');
?>
</tr>
<tr>
<?php
        timeCell('5:00');

	streamCell('AER');
	streamCell('wc');
	streamCell('BB', 1);
	streamCell('AW');
	streamCell('JCS');
	showCell('SPR');
?>
</tr>
<tr>
<?php
        timeCell('5:30');

	streamCell('SCR', 1);
?>
</tr>
<tr>
<?php
        timeCell('6:00');

	streamCell('D');
	streamCell('BIM');
	streamCell('HS');
	streamCell('MTS');
	streamCell('wc');
	showCell('SR');
	streamCell('CMS', 4);
?>
</tr>
<tr>
<?php
        timeCell('6:30');
?>
</tr>
<tr>
<?php
        timeCell('7:00');

	streamCell('JCS');
	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
	showCell('RR');
?>
</tr>
<tr>
<?php
        timeCell('7:30');

	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
	streamCell('IP', 1);
?>
</tr>
<tr>
<?php
        timeCell('8:00');

	showCell('MAL');
	showCell('JCS');
	showCell('JV', 4);
	showCell('ES');
	showCell('TBBA', 4);
	showCell('S');
	streamCell('RR');
?>
</tr>
<tr>
<?php   timeCell('8:30'); ?>
</tr>
<tr>
<?php
        timeCell('9:00');

	showCell('NL');
	streamCell('HBTR');
	streamCell('GC', 1);
	streamCell('S');
	streamCell('MAL');
?>
</tr>
<tr>
<?php
        timeCell('9:30');
	streamCell('TWO', 1);
?>
</tr>
<tr>
<?php
        timeCell('10:00');

	showCell('S', 4);
	streamCell('MAL');
	showCell('AW');
	streamCell('SR');
	showCell('BIM');
	streamCell('NL');
	streamCell('JV', 4);
?>
</tr>
<tr>
<?php
        timeCell('10:30');
?>
</tr>
<tr>
<?php
        timeCell('11:00');

	streamCell('D');
	showCell('RPMH');
	streamCell('RPMH');
	showCell('D');
	streamCell('CMS');
?>
</tr>
<tr>
<?php
        timeCell('11:30');
 ?>

</tr>
</tbody>

</table>

<p id="foot" class="hide">Also available in <a href="/forms/WGOT-Schedule.pdf" target="_blank"><acronym>PDF</acronym></a> format.</p>

</div>
</div>

<?php get_footer();?>
