<?php

// 
// url-former
function createLink($type, $url, $text)
{
  $str = $text;

  if ($url != '') {
    if (strrpos($url, "http") === FALSE)
    {
      if ($type[0] == 'M') {
         $url = "music/" . $url;
      } else {
         $url = "talk/" . $url;
      }

      $url = "/programming/" . $url . "/";
    }
    $str = "<a href=\"" . $url . "\">$str</a>";
  }
  return $str;
}

//
// table cell wrapper
function tableCell($str, $row_span, $col_span, $class)
{
  $cell = "        <td";

  if ($row_span > 1)
  {
     $cell .= " rowspan=\"$row_span\"";
  }

  if ($col_span > 1)
  {
     $cell .= " colspan=\"$col_span\"";
  }

  if ($class != "")
  {
     $cell .= " class=\"$class\"";
  }

  $cell .= ">$str</td>\n";

  return $cell;
}

//
// table cell generator
function timeCell($time, $row_span = 1)
{
  $out = "    <th";

  if ($row_span > 1)
  {
     $out .= " rowspan=\"$row_span\"";
  }

  $out .= ">$time</th>\n";

  echo $out;
}


//
// table cell generator
function showCell($idx, $row_span = 2, $extra_info = "", $extra_style = "")
{
  global $show;
  $out = "";

  if ($idx == 'TBA')
  {
    $out .= tableCell("TBA", $row_span, 1, "tba");
  }
  else
  {
    $class = "";

    if ($show[$idx]['type'] == 'T')
    {
       $class .= "talk ";
    }

    $cell_content = "";

    if ($extra_info == "S")
    {
       $class .= "stream";
    }
    else
    {
       $cell_content .= $extra_info;
    }

    $cell_content = createLink($show[$idx]['type'], $show[$idx]['link'], $show[$idx]['name']) . $cell_content;

    $out = tableCell($cell_content, $row_span, 1, $class);
  }
  echo $out;
}

//
// strea-only blocks
function streamCell($idx, $row_span = 2, $extra_info = "", $extra_style = "")
{
   showCell($idx, $row_span, 'S', $extra_style);
}

//
// grey off-air cells
function offAirCell($row_span = 1, $col_span = 1)
{
  $out = tableCell('Off-Air', $row_span, $col_span, 'offair');
  echo $out;
}

?>
