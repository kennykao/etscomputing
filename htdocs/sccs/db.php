<?php
//-----connect and choose the database
$link = mysql_connect('cascades.ist.berkeley.edu:3320', 'ets_computing', 'temp4$etS38966');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db('ets_computing', $link);
if (!$db_selected) {
    die ('Can\'t use db: ' . mysql_error());
}
//---------------------------------------
?>
