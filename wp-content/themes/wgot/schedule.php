<?php
/*
Template Name: Schedule
*/
?>
<?php

abstract class ProgramBlockLengths
{
   const LEN_030 = 1;
   const LEN_060 = 2;
   const LEN_120 = 4;
    // etc.
}

$show = array(
     // len is not specified for these so you must pass one of the above LEN_ constants if the block is not 1-hour long
     'mes'   => array(type => 'M',  name => 'Música en Español',             link => ''),
     'wc'    => array(type => 'M',  name => '(wildcard)',                    link => ''),

     'AER'   => array(type => 'T',  name => 'Arts Express Radio',            len => LEN_060,  link => 'http://wbai.org/program.php?program=164'),
     'AR'    => array(type => 'T',  name => 'Alternative Radio',             len => LEN_060,  link => 'http://www.alternativeradio.org/'),
     'AW'    => array(type => 'M',  name => 'Afropop Worldwide',             len => LEN_060,  link => 'http://www.afropop.org/'),
     'BIM'   => array(type => 'M',  name => 'Big Island Mix',                len => LEN_060,  link => 'big-island-mix'),
     'BB'    => array(type => 'T',  name => 'Building Bridges',              len => LEN_030,  link => 'http://buildingbridgesradio.blogspot.com/'),
     'CMS'   => array(type => 'M',  name => 'Cramela Mix Show',              len => LEN_120,  link => 'cramela-mix-show'),
     'CR'    => array(type => 'T',  name => 'CMC/Counterpoise',              len => LEN_060,  link => 'counterpoise-reviews'),
     'COL'   => array(type => 'T',  name => 'Century of Lies',               len => LEN_030,  link => 'http://www.drugtruth.net/cms/views/latest_col'),
     'D'     => array(type => 'M',  name => 'Departure',                     len => LEN_060,  link => 'departure'),
     'DN'    => array(type => 'T',  name => 'Democracy Now!',                len => LEN_060,  link => 'http://www.democracynow.org/'),
     'ES'    => array(type => 'T',  name => 'EcoShock',                      len => LEN_060,  link => 'http://www.ecoshock.org/'),
     'EU'    => array(type => 'T',  name => 'Economic Update',               len => LEN_060,  link => 'http://www.democracyatwork.info/economicupdate'),
     'HBTR'  => array(type => 'M',  name => 'Heartbeattrue Radio',           len => LEN_060,  link => 'heartbeattrue-radio'),
     'HS'    => array(type => 'M',  name => 'Hippie Sessions',               len => LEN_060,  link => 'hippie-sessions'),
     'IP'    => array(type => 'T',  name => 'Informativo',                   len => LEN_030,  link => 'http://www.kpfk.org/index.php/programs/116-informativopacifica'),
     'JV'    => array(type => 'M',  name => 'Jazzville',                     len => LEN_120,  link => 'jazzville'),
     'JCS'   => array(type => 'M',  name => 'Joe & Craig',                   len => LEN_060,  link => 'joe-craig-show'),
     'LOI'   => array(type => 'M',  name => 'Last One In',                   len => LEN_060,  link => 'last-one-in'),
     'MAL'   => array(type => 'M',  name => 'Malum',                         len => LEN_060,  link => 'malum'),
     'NL'    => array(type => 'M',  name => 'Noche Latina',                  len => LEN_060,  link => 'noche-latina'),
     'PWS'   => array(type => 'T',  name => 'Pow Wow Show',                  len => LEN_120,  link => 'http://thepowwowshow.net/'),
     'RR'    => array(type => 'M',  name => 'Rad Radio',                     len => LEN_060,  link => ''),
     'RSR'   => array(type => 'M',  name => 'Rootstock Radio',               len => LEN_030,  link => 'https://www.rootstock.coop/radio/'),
     'RPMH'  => array(type => 'M',  name => 'Red Pony Music Hour',           len => LEN_060,  link => 'red-pony-music-hour'),
     'SM'    => array(type => 'M',  name => 'Sábado Musical',                len => LEN_060,  link => 'sabado-musical-2'),
     'S'     => array(type => 'T',  name => 'Stripped',                      len => LEN_060,  link => 'stripped'),
     'SMH'   => array(type => 'M',  name => 'Stripped Music Hour',           len => LEN_060,  link => 'stripped'),
     'SHA'   => array(type => 'M',  name => 'Shadows',                       len => LEN_060,  link => ''),
     'SR'    => array(type => 'M',  name => 'Sweet Retreat',                 len => LEN_060,  link => 'sweet-retreat'),
     'TBBA'  => array(type => 'M',  name => 'Things be Blowin\' Around',     len => LEN_120,  link => 'things-be-blowin-around'),
     'TMSS'  => array(type => 'T',  name => 'The Michael Slate Show',        len => LEN_060,  link => 'http://www.kpfk.org/index.php/programs/51-michael-slate'),
     'TWO'   => array(type => 'T',  name => 'This Way Out',                  len => LEN_030,  link => 'http://www.thiswayout.org/'),
     'WS'    => array(type => 'M',  name => 'Woodsongs Radio',               len => LEN_060,  link => ''),
     'WV'    => array(type => 'T',  name => 'Writer\'s Voice',               len => LEN_060,  link => 'http://www.writersvoice.net/'),
     'YOHAF' => array(type => 'T',  name => 'Health &amp; Fitness',          len => LEN_060,  link => 'http://www.yourownhealthandfitness.org/'),
     );

require('schedule/functions.php');

?>
<?php get_header();?>
<div id="main">
<div id="content">

<div id="schedule">
<h2>Program Schedule</h2>

<p id="note">Updated: <?php echo date( "M d, Y", filemtime(__FILE__) ) ?>. 
Legend: <span class="music">Music Program</span> <span class="talk">Talk Program</span></p>

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
   showCell('CMS');
   showCell('TBBA');
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

   showCell('JV');
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
   showCell('RSR');
   showCell('WS');
   showCell('CR');
   showCell('TBBA');
?>
</tr>
<tr>
<?php
   timeCell('7:30');

   showCell('TWO');
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
   showCell('JV');
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

   showCell('IP');
   showCell('IP');
   showCell('IP');
   showCell('IP');
   showCell('IP');
   showCell('IP');
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

   showCell('CMS');
   showCell('D');
   showCell('JCS');
   showCell('BB');
   showCell('CR');
   showCell('TWO');
   showCell('HBTR');
?>
</tr>
<tr>
<?php
   timeCell('2:30');

   showCell('RSR');
   showCell('COL');
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
   showCell('BB');
   showCell('CR');
   showCell('RR');
   showCell('RPMH');
?>
</tr>
<tr>
<?php
   timeCell('5:30');

   showCell('RSR');
?>
</tr>
<tr>
<?php
   timeCell('6:00');

   showCell('CMS');
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
   showCell('JV');
   showCell('WV');
   showCell('AR');
   showCell('LOI');
   showCell('CMS');
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
   showCell('PWS');
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
   showCell('IP');
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
