<?php
/*
Template Name: Schedule
*/
?>
<?php
$show = array(
     'AER'   => array(type => 'T',  name => 'Arts Express Radio',            link => 'http://wbai.org/program.php?program=164'),
     'AR'    => array(type => 'T',  name => 'Alternative Radio',             link => 'http://www.alternativeradio.org/'),
     'AW'    => array(type => 'M',  name => 'Afropop Worldwide',             link => 'http://www.afropop.org/'),
     'BIM'   => array(type => 'M',  name => 'Big Island Mix',                link => 'big-island-mix'),
     'BB'    => array(type => 'T',  name => 'Building Bridges',              link => 'http://buildingbridgesradio.blogspot.com/'),
     'CMS'   => array(type => 'M',  name => 'Cramela Mix Show',              link => 'cramela-mix-show'),
     'CR'    => array(type => 'T',  name => 'CMC/Counterpoise',              link => 'counterpoise-reviews'),
     'COL'   => array(type => 'T',  name => 'Century of Lies',               link => 'http://www.drugtruth.net/cms/views/latest_col'),
     'D'     => array(type => 'M',  name => 'Departure',                     link => 'departure'),
     'DN'    => array(type => 'T',  name => 'Democracy Now!',                link => 'http://www.democracynow.org/'),
     'E2F'   => array(type => 'M',  name => 'Ecstasy to Frenzy',             link => 'ecstasy-to-frenzy'),
     'ES'    => array(type => 'T',  name => 'EcoShock',                      link => 'http://www.ecoshock.org/'),
     'GC'    => array(type => 'T',  name => 'Good Company',                  link => 'good-company'),
     'HBTR'  => array(type => 'M',  name => 'Heartbeattrue Radio',           link => 'heartbeattrue-radio'),
     'HS'    => array(type => 'M',  name => 'Hippie Sessions',               link => 'hippie-sessions'),
     'IP'    => array(type => 'T',  name => 'Informativo',                   link => 'http://www.kpfk.org/index.php/programs/116-informativopacifica'),
     'JV'    => array(type => 'M',  name => 'Jazzville',                     link => 'jazzville'),
     'JCS'   => array(type => 'M',  name => 'Joe & Craig',                   link => 'joe-craig-show'),
     'LOI'   => array(type => 'M',  name => 'Last One In',                   link => 'last-one-in'),
     'm'     => array(type => 'M',  name => '(music)',                       link => ''),
     'MAL'   => array(type => 'M',  name => 'Malum',                         link => 'malum'),
     'MS'    => array(type => 'M',  name => 'Mixtape Sessions',              link => 'mixtape-sessions'),
     'NL'    => array(type => 'M',  name => 'Noche Latina',                  link => 'noche-latina'),
     'RR'    => array(type => 'M',  name => 'Rad Radio',                     link => ''),
     'RPMH'  => array(type => 'M',  name => 'Red Pony Music Hour',           link => 'red-pony-music-hour'),
     'SM'    => array(type => 'M',  name => 'Sábado Musical',                link => 'sabado-musical-2'),
     'SCR'   => array(type => 'T',  name => 'Sierra Club Radio',             link => 'http://www.sierraclub.org/radio/'),
     'S'     => array(type => 'T',  name => 'Stripped',                      link => 'stripped'),
     'SR'    => array(type => 'M',  name => 'Sweet Retreat',                 link => 'sweet-retreat'),
     'TBBA'  => array(type => 'M',  name => 'Things be Blowin\' Around',     link => 'things-be-blowin-around'),
     'TMSS'  => array(type => 'T',  name => 'The Michael Slate Show',        link => 'http://www.kpfk.org/index.php/programs/51-michael-slate'),
     'TIG'   => array(type => 'T',  name => '(wildcard)',                    link => ''),
     'TWO'   => array(type => 'T',  name => 'This Way Out',                  link => 'http://www.thiswayout.org/'),
     'wc'    => array(type => 'M',  name => '(wildcard)',                    link => ''),
     'WPP'   => array(type => 'M',  name => 'WGOT Playlist Project',         link => ''),
     'WS'    => array(type => 'M',  name => 'Woodsongs Radio',               link => ''),
     'WV'    => array(type => 'T',  name => 'Writer\'s Voice',               link => 'http://www.writersvoice.net/'),
     'YOHAF' => array(type => 'T',  name => 'Health &amp; Fitness',          link => 'http://www.yourownhealthandfitness.org/'),
     );

require('schedule/functions.php');

?>
<?php get_header();?>
<div id="main">
<div id="content">

<div id="schedule">
<h2>Program Schedule</h2>

<p id="note">Updated: <?php echo date( "M d, Y", filemtime(__FILE__) ) ?>. 
Legend: Music Program | <strong>Talk Program</strong><!-- | <span class="onair">On Air + Stream</span> | <span class="stream">Stream Only</span>--></p>

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

	offAirCell(11, 1);
	showCell('TMSS');
	offAirCell(11, 1);
	showCell('SR');
	offAirCell(11, 1);
	showCell('MAL');
	offAirCell(11, 1);
?>
</tr>
<tr>
<?php   timeCell('12:30');

?>
</tr>
<tr>
<?php
        timeCell('1:00');
	showCell('E2F', 4);
	showCell('CMS', 4);
	showCell('TBBA', 4);
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

?>
</tr>
<tr>
<?php   timeCell('2:30'); ?>
</tr>
<tr>
<?php
        timeCell('3:00');

	showCell('JV', 4);
	showCell('WV');
	showCell('HS');
?>
</tr>
<tr>
<?php   timeCell('3:30'); ?>
</tr>

<tr>
<?php
        timeCell('4:00');

	showCell('AW');
	showCell('WS');
?>
</tr>
<tr>
<?php
	timeCell('4:30');
 ?>
</tr>
<tr>
<?php
        timeCell('5am<br />-<br />1pm');

	offAirCell(1, 1);
	offAirCell(1, 1);
	offAirCell(1, 1);
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
	showCell('WS', 2);
	showCell('S');
	showCell('BB', 1);
	showCell('CR');
	showCell('TWO', 1);
	showCell('HBTR');

?>
</tr>
<tr>
<?php
        timeCell('2:30');

	showCell('SCR', 1);
	showCell('TIG', 1);
?>
</tr>
<tr>
<?php
        timeCell('3:00');

	showCell('AW');
	showCell('HS');
	showCell('HBTR');
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

	offAirCell(8, 1);
	offAirCell(8, 1);
	offAirCell(8, 1);
	offAirCell(8, 1);
	offAirCell(8, 1);
	showCell('AR');
	offAirCell(16, 1);
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

	showCell('RR');
?>
</tr>
<tr>
<?php
        timeCell('5:30');

?>
</tr>
<tr>
<?php
        timeCell('6:00');

	showCell('SR');
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

	showCell('LOI');
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

	showCell('MAL');
	showCell('JCS');
	showCell('JV', 4);
	showCell('ES');
	showCell('AR');
	showCell('S');
?>
</tr>
<tr>
<?php   timeCell('8:30'); ?>
</tr>
<tr>
<?php
        timeCell('9:00');

	showCell('NL');
	offAirCell(6, 1);
	offAirCell(6, 1);
	showCell('RR');
	offAirCell(6, 1);
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

	showCell('S', 4);
	showCell('HBTR');
	showCell('BIM');
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

	showCell('RPMH');
	showCell('D');
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

<?php get_footer(); ?>
