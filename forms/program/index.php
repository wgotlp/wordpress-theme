<?php
session_start();

define('NUMSAMPLES', 5);
$mode  = filter_input( INPUT_POST, 'mode', FILTER_SANITIZE_STRING );

$fields   = array( 'title', 
                   'type', 
                   'description', 
                   'sample', 
                   'comments', 
                   'duration', 
                   'name', 
                   'phone', 
                   'address', 
                   'email', 
                   'team', 
                   'experience'
                   );

$duration = array( 'dlt30' => 'Less than 30 minutes',  
                   'd30' => '30 minutes',
                   'd60' => '1 hour',
                   'd120' => '2 hours',
                   'dgt120' => 'more than 2 hours'
                   );

$type     = array( 'music' => 'Music',
                   'talk' => 'Talk' 
                   );

if (!isset($mode))
{
   $mode = 'edit';

   foreach ($fields as $f)
   {
      unset($_SESSION[$f]);
   }
}

$_SESSION['mode'] = $mode;

// fetch any fields we might have stored
if (isset($_POST['title']))
{
   $_SESSION['title']           = trim(filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING ));
   $_SESSION['type']            = filter_input( INPUT_POST, 'type', FILTER_SANITIZE_STRING );
   $_SESSION['duration']        = filter_input( INPUT_POST, 'duration', FILTER_SANITIZE_STRING );
   $_SESSION['description']     = trim(filter_input( INPUT_POST, 'description', FILTER_SANITIZE_STRING ));
   $_SESSION['comments']        = trim(filter_input( INPUT_POST, 'comments', FILTER_SANITIZE_STRING ));
   $_SESSION['name']            = trim(filter_input( INPUT_POST, 'name', FILTER_SANITIZE_STRING ));
   $_SESSION['phone']           = trim(filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_STRING ));
   $_SESSION['address']         = trim(filter_input( INPUT_POST, 'address', FILTER_SANITIZE_STRING ));
   $_SESSION['email']           = trim(filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL ));
   $_SESSION['team']            = trim(filter_input( INPUT_POST, 'team', FILTER_SANITIZE_STRING ));
   $_SESSION['experience']      = trim(filter_input( INPUT_POST, 'experience', FILTER_SANITIZE_STRING ));

   // clear any that were not set
   foreach ($_SESSION as $k => $s)
   {
      if ($s == '')
         unset($_SESSION[$k]);
   }

   // get the sample songs / artists if they are set
   if (isset($_POST['sample']))
   {
      $_SESSION['sample'] = array();
      $fs = $_POST['sample'];

      for ($i = 0; $i < count($fs); $i++) 
      {
         $is = trim(filter_var( $fs[$i], FILTER_SANITIZE_STRING ));

         if ($is != '')
         {
            $_SESSION['sample'][] = $is;
         }
      }
   }
   else
   {
      unset($_SESSION['sample']);
   }
}

/* debug */
if (isset($debug)) {
   foreach ($_SESSION as $k => $s)
   {
      if (is_array($s))
      {
         for ($i = 0; $i < count($s); $i++)
         {
            echo "<!-- " . ($i + 1) . ": " . html_entity_decode( $s[$i], ENT_QUOTES, 'UTF-8') . " -->\n";
         }
      }
      else {
         echo "<!-- SESSION[$k]: '$s' -->\n";
      }
   }
   foreach ($_POST as $k => $s)
   {
      echo "<!-- POST[$k] -> '$s' -->\n";
   }
}

//
// function to mark a radio checked if the value was set
function setCheckedIfSet($field, $option)
{
   if (isset($_SESSION[$field]) && ($_SESSION[$field] == $option))
      return 'checked="checked" ';
   return "";
}

//
// function to get the text from a text area if it's set
function outputIfSet($field, $idx = 0)
{
   if (isset($_SESSION[$field]))
   {
      if (is_array($_SESSION[$field]))
      {
         if (isset($_SESSION[$field][$idx]))
         {
            return $_SESSION[$field][$idx];
         }
      }
      else 
      {
         return $_SESSION[$field];
      }
   }
   return "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="viewport" content="width=500" />
<title>WGOT Program Proposal</title>
<style type="text/css" media="all"><!-- 
@import "styles.css";
--></style>
<link media="only screen and (max-device-width: 480px)" href="/wp-content/themes/wgot/mobile.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="proposal.js"></script>
</head>

<body onload="setMode(true, 5)">

<div id="header">
  <img src="/wp-content/themes/wgot/img/fist.png" alt="WGOT-LP tower &amp; fist logo" />
  <h1><a href="/">WGOT-LP 94.7 FM Program Proposal</a></h1>
</div>

<div id="menu">
<ul>
  <li class="page_item page-item-1"><a href="/" title="Home">Home</a></li>
  <li class="page_item page-item-2"><a href="/about/" title="About">About</a></li>
  <!-- li class="page_item page-item-5972"><a href="/listen-live/">Listen Live</a></li -->
  <li class="page_item page-item-37"><a href="/programming/" title="Our Programs">Programs</a></li>
  <li class="page_item page-item-2089"><a href="/schedule/">Schedule</a></li>
</ul>
</div>


<div id="main">
<div id="content">

<?php if ($_SESSION['mode'] == 'edit') { ?>
<form id="proposal" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

<h2>Program Info</h2>

<fieldset>
<label for="title">Proposed Show Title:</label>
<input type="text" name="title" id="title" value="<?php echo outputIfSet('title'); ?>" />
</fieldset>

<fieldset>
<label>Show Type:</label>
<fieldset id="type">
<?php 
      foreach ($type as $k => $d)
      {?>
<input type="radio" name="type" id="<?php echo $k; ?>" value="<?php echo $k; ?>" onclick="setSampleFieldMode(<?php echo NUMSAMPLES; ?>)" <?php echo setCheckedIfSet('type', $k); ?>/>
<label for="<?php echo $k; ?>"><?php echo $d; ?></label>
<?php } ?>
</fieldset>
</fieldset>

<fieldset id="duration">
<label>Preferred length:</label>
<?php 
      foreach ($duration as $k => $d)
      {?>
<fieldset><input type="radio" name="duration" id="<?php echo $k; ?>" value="<?php echo $k; ?>" <?php echo setCheckedIfSet('duration', $k); ?>/>
<label for="<?php echo $k; ?>"><?php echo $d; ?></label></fieldset>
<?php } ?>
</fieldset>

<fieldset>
<label for="description">Program Description:</label>
<textarea name="description" rows="5" cols="80" id="description"><?php echo outputIfSet('description'); ?></textarea>
</fieldset>

<fieldset id="samples">
<label>If submitting a Music show, please give <?php echo NUMSAMPLES; ?> examples (title
&amp; artist) of songs that you would play:</label>

<ol>
<?php for ($i = 0; $i < NUMSAMPLES; $i++) { ?>
  <li><input type="text" id="sample<?php echo $i ?>" name="sample[]" value="<?php echo outputIfSet('sample', $i); ?>" /></li>
<?php } ?>
</ol>
</fieldset>

<fieldset>
<label for="comments">Additional comments about the program (if
any):</label>
<textarea name="comments" id="comments" rows="5" cols="40"><?php echo outputIfSet('comments'); ?></textarea>
</fieldset>

<h2>Contact Info</h2>

<fieldset>
<label for="name">Name(s):</label>
<input type="text" name="name" id="name" value="<?php echo outputIfSet('name'); ?>" />
</fieldset>

<fieldset>
<label for="phone">Phone (10-digit):</label>
<input type="text" name="phone" id="phone" maxlength="14" value="<?php echo outputIfSet('phone'); ?>" />
</fieldset>

<fieldset>
<label for="address">Address:</label>
<input type="text" name="address" id="address" value="<?php echo outputIfSet('address'); ?>" />
</fieldset>

<fieldset>
<label for="email">E-mail:</label>
<input type="text" name="email" id="email" value="<?php echo outputIfSet('email'); ?>"/>
</fieldset>

<fieldset>
<label for="team">List additional team members (if any):</label>
<textarea name="team" id="team" rows="5" cols="40"><?php echo outputIfSet('team'); ?></textarea>
</fieldset>

<fieldset>
<label for="experience">List any radio or related experience:</label>
<textarea name="experience" id="experience" rows="5" cols="40"><?php echo outputIfSet('experience'); ?></textarea>
</fieldset>

<fieldset id="act">
<input type="hidden" name="mode" value="confirm" />
<input type="submit" name="submit" value="Submit" onclick="return checkValues();" />
</fieldset>
</form>
<?php } else if ($_SESSION['mode'] == 'confirm') { ?>

<div id="proposal">

<h2>Confirm Program Info</h2>

<p>Below is the information you are about to submit. Please confirm
that it is correct and click <cite>Send</cite>.</p>

<dl>
  <dt>Title:</dt>
  <dd><?php echo outputIfSet('title'); ?></dd>

<?php
      if (isset($_SESSION['type'])) {?>
  <dt>Type:</dt>
  <dd><?php echo $type[$_SESSION['type']]; ?></dd>
<?php } ?>

<?php
      if (isset($_SESSION['duration'])) {?>
  <dt>Duration:</dt>
  <dd><?php echo $duration[$_SESSION['duration']]; ?></dd>
<?php } ?>

  <dt>Description:</dt>
  <dd><?php echo outputIfSet('description'); ?></dd>

<?php if ($_SESSION['type'] == 'music') { ?>
  <dt>Song samples:</dt>
  <dd><ol>
<?php
      if (isset($_SESSION['sample'])) {
         foreach ($_SESSION['sample'] as $s) { ?>
      <li><?php echo $s; ?></li>
<?php    }
      } ?>
  </ol></dd>
<?php } ?>

  <dt>Name:</dt>
  <dd><?php echo outputIfSet('name'); ?></dd>

  <dt>Phone:</dt>
  <dd><?php echo outputIfSet('phone'); ?></dd>

  <dt>Address:</dt>
  <dd><?php echo outputIfSet('address'); ?></dd>

  <dt>E-Mail</dt>
  <dd><?php echo outputIfSet('email'); ?></dd>

  <dt>Additional team members:</dt>
  <dd><?php echo outputIfSet('team'); ?></dd>

  <dt>Radio related experience:</dt>
  <dd><?php echo outputIfSet('experience'); ?></dd>

</dl>

<div id="act">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
<input type="hidden" name="mode" value="edit" />
<input type="submit" name="submit" value="Edit" />
</fieldset>
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
<input type="hidden" name="mode" value="send" />
<input type="submit" name="submit" value="Send" />
</fieldset>
</form>
</div>
</div>
<div style="clear: both;"></div>

<?php } else if ($_SESSION['mode'] == 'send') { 

   $output = "Form submitted at " . date("g:i:s a, D, M jS, Y") . "\n\n";
   foreach ($fields as $f) {
      $output .= "$f:\n";

      $s = $_SESSION[$f];
      if (is_array($s)) 
      {
         for ($i = 0; $i < count($s); $i++)
         {
            $output .= ($i + 1) . ": " . html_entity_decode( $s[$i], ENT_QUOTES, 'UTF-8') . "\n";
         }
         $ouput .= "\n";

      } else {

         if ($f == 'duration')
         {
            $output .= $duration[$s];
         }
         else if ($f == 'type')
         {
            $output .= $type[$s];
         }
         else
         {
            $output .= html_entity_decode( $s, ENT_QUOTES, 'UTF-8' );
         }
         $output .= "\n";
      }
      $output .= "\n";
   }

   $filename = date("Ymd-Hisu") . ".txt";
   $handle = fopen("/home/wgot/forms/" . $filename, 'x+');

   $status = true;
   if ($handle) {
      if (fwrite($handle, $output) === false) {
         $status = false;
      }

      fclose($handle);

      // email notification
      $from_email = "social@wgot.org";
      $headers = 'From: ' . $from_email . "\r\n" .
        'Reply-To: ' . $from_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
      mail("proposals@wgot.org", "Form submission", $output, $headers);
   }
   else {
      $status = false;
   }
?>

<div id="proposal">
<?php
      if ($status) { ?>
<h2>Information submitted</h2>

<p>Thank you for your submission. You will be contacted shortly.</p>

<div><a href="/">Home</a></div>
<?php } else { ?>
<h2>Error submitting data</h2>

<p>There was an error submitting the data. The incident will be reported.</p>
<?php } ?>
</div>

<?php } else { ?>
   <p>Form error.</p>
<?php } ?>

</div>
</div>

<div id="footer">
<p><strong>WGOT-LP 94.7 FM</strong> is a 501[c][3] Non-profit. Powered
by <a href="http://wordpress.org/">WordPress</a>.</p>
</div>

</body>
</html>
