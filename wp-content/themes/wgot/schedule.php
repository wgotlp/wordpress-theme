<?php
/*
Template Name: Schedule
*/
?>
<?php
$show = array(
     'mes'   => array(type => 'M',  name => 'Música en Español',             link => ''),
     'wc'    => array(type => 'M',  name => '(wildcard)',                    link => ''),
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
     'EU'    => array(type => 'T',  name => 'Economic Update',               link => ''),
     'GC'    => array(type => 'T',  name => 'Good Company',                  link => 'good-company'),
     'HBTR'  => array(type => 'M',  name => 'Heartbeattrue Radio',           link => 'heartbeattrue-radio'),
     'HS'    => array(type => 'M',  name => 'Hippie Sessions',               link => 'hippie-sessions'),
     'IP'    => array(type => 'T',  name => 'Informativo',                   link => 'http://www.kpfk.org/index.php/programs/116-informativopacifica'),
     'JV'    => array(type => 'M',  name => 'Jazzville',                     link => 'jazzville'),
     'JCS'   => array(type => 'M',  name => 'Joe & Craig',                   link => 'joe-craig-show'),
     'LOI'   => array(type => 'M',  name => 'Last One In',                   link => 'last-one-in'),
     'MAL'   => array(type => 'M',  name => 'Malum',                         link => 'malum'),
     'MS'    => array(type => 'M',  name => 'Mixtape Sessions',              link => 'mixtape-sessions'),
     'NL'    => array(type => 'M',  name => 'Noche Latina',                  link => 'noche-latina'),
     'PWS'   => array(type => 'T',  name => 'Pow Wow Show',                  link => 'http://thepowwowshow.net/'),
     'RR'    => array(type => 'M',  name => 'Rad Radio',                     link => ''),
     'RSR'   => array(type => 'M',  name => 'Rootstock Radio',               link => 'https://www.rootstock.coop/radio/'),
     'RPMH'  => array(type => 'M',  name => 'Red Pony Music Hour',           link => 'red-pony-music-hour'),
     'SM'    => array(type => 'M',  name => 'Sábado Musical',                link => 'sabado-musical-2'),
     'SCR'   => array(type => 'T',  name => 'Sierra Club Radio',             link => 'http://www.sierraclub.org/radio/'),
     'S'     => array(type => 'T',  name => 'Stripped',                      link => 'stripped'),
     'SMH'   => array(type => 'M',  name => 'Stripped Music Hour',           link => 'stripped'),
     'SHA'   => array(type => 'M',  name => 'Shadows',                       link => ''),
     'SR'    => array(type => 'M',  name => 'Sweet Retreat',                 link => 'sweet-retreat'),
     'TBBA'  => array(type => 'M',  name => 'Things be Blowin\' Around',     link => 'things-be-blowin-around'),
     'TMSS'  => array(type => 'T',  name => 'The Michael Slate Show',        link => 'http://www.kpfk.org/index.php/programs/51-michael-slate'),
     'TIG'   => array(type => 'T',  name => '(wildcard)',                    link => ''),
     'TWO'   => array(type => 'T',  name => 'This Way Out',                  link => 'http://www.thiswayout.org/'),
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

   musicCell(14);
   showCell('TMSS');
   musicCell(12);
   showCell('SR');
   musicCell(12);
   showCell('MAL');
   showCell('SHA');
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
   showCell('wc', 4);
   showCell('CMS', 4);
   showCell('TBBA', 4);
   showCell('SM');
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

   musicCell(14);
?>
</tr>
<tr>
<?php
   timeCell('2:30');

?>
</tr>
<tr>
<?php
   timeCell('3:00');

   showCell('JV', 4);
   showCell('AW');
   showCell('HS');
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

   showCell('BIM');
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
   timeCell('5:00');

   musicCell(4);
   showCell('RR');
   showCell('LOI');
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

   showCell('EU');
   showCell('HBTR');
   showCell('YOHAF');
   showCell('D');
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

   showCell('AR');
   showCell('EU');
   showCell('RSR', 1);
   showCell('WS');
   showCell('CR');
   showCell('TBBA', 4);
?>
</tr>
<tr>
<?php
   timeCell('7:30');

   showCell('TWO', 1);
?>
</tr>
<tr>
<?php
   timeCell('8:00');

   showCell('DN');
   showCell('DN');
   showCell('DN');
   showCell('DN');
   showCell('DN');
?>
</tr>
<tr>
<?php
   timeCell('8:30');

?>
</tr>
<tr>
<?php
   timeCell('9:00');

   musicCell(6, 5);
   showCell('HBTR');
   showCell('AER');
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

   showCell('WV');
   showCell('JV', 4);
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

   showCell('EU');
?>
</tr>
<tr>
<?php
   timeCell('11:30');
   
?>
</tr>
<tr>
<?php
   timeCell('12:00pm');

   showCell('IP', 1);
   showCell('IP', 1);
   showCell('IP', 1);
   showCell('IP', 1);
   showCell('IP', 1);
   showCell('IP', 1);
   showCell('RPMH');
?>
</tr>
<tr>
<?php
   timeCell('12:30');

   showCell('mes', 1);
   showCell('mes', 1);
   showCell('mes', 1);
   showCell('mes', 1);
   showCell('mes', 1);
   showCell('mes', 1);
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
   showCell('SM');
   showCell('AR');
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

   showCell('CMS', 4);
   showCell('D');
   showCell('JCS');
   showCell('BB', 1);
   showCell('CR');
   showCell('TWO', 1);
   showCell('HBTR');
?>
</tr>
<tr>
<?php
   timeCell('2:30');

   showCell('RSR', 1);
   showCell('COL', 1);
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

   showCell('DN');
   showCell('DN');
   showCell('DN');
   showCell('DN');
   showCell('DN');
   showCell('AR');
   showCell('mes');
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

   musicCell();
   showCell('D');
   showCell('S');
   showCell('BB', 1);
   showCell('CR');
   showCell('RR');
   showCell('RPMH');
?>
</tr>
<tr>
<?php
   timeCell('5:30');

   showCell('RSR', 1);
?>
</tr>
<tr>
<?php
   timeCell('6:00');

   showCell('CMS', 4);
   showCell('AW');
   showCell('SMH');
   showCell('JCS');
   showCell('RPMH');
   showCell('SR');
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

   showCell('WS');
   showCell('JV', 4);
   showCell('WV');
   showCell('AR');
   showCell('LOI');
   showCell('CMS', 4);
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
   showCell('ES');
   showCell('AW');
   showCell('AW');
?>
</tr>
<tr>
<?php
   timeCell('8:30');
   
?>
</tr>
<tr>
<?php
   timeCell('9:00');

   showCell('NL');
   showCell('HS');
   showCell('PWS', 4);
   showCell('RR');
   showCell('RR');
   showCell('S');
   showCell('NL');
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

   showCell('S');
   showCell('SR');
   showCell('LOI');
   showCell('BIM');
   showCell('SMH');
   showCell('IP', 1);
?>
</tr>
<tr>
<?php
   timeCell('10:30');

   musicCell(1);
?>
</tr>
<tr>
<?php
   timeCell('11:00');

	showCell('SMH');
	showCell('SHA');
	showCell('HS');
	showCell('BIM');
	showCell('D');
	showCell('BIM');
	showCell('mes');
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
