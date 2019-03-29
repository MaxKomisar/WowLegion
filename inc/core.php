<?php
include('config.php');

$characters = mysql_connect("$host:$port", "$login", "$pass", True); 
mysql_selectdb("$dbc", $characters);
$sql = mysql_query("SELECT count(`guid`) FROM `characters` WHERE `online` = 1;", $characters); 
$online = "".mysql_result($sql, 0, 0).""; 
$allianceonline = mysql_query ("select count(*) from characters where online = 1 and race in (1,3,4,7,11)");
$allianceonline = mysql_result ($allianceonline,0);
$hordeonline = mysql_query ("select count(*) from characters where online = 1 and race in (2,5,6,8,10)");
$hordeonline = mysql_result ($hordeonline,0);
$fp = @fsockopen("$host", $portg, $errno, $errstr, 1); 
if($fp >= 1){ 
    $gamen = '<img src=images/On.png width=90 height=15> '; 
} else { 
    $gamen = '<img src=images/Off.png width=90 height=15> '; 
}   




  

mysql_selectdb ("$rdb"); 
$we = mysql_query ("select count(*) from account");
$we = mysql_result ($we,0);

?>
