<? require_once ('./inc/config.php'); 
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");
?>
<style type="text/css">
body {
background: #000 url(images/kms_bg.jpg) no-repeat center top; color: #4f401c;<br />
}
.style1 {
	font-family: Tahoma;
	font-weight: bold;
	font-size: 16px;
}
.style4 {font-size: 12px; font-family: Tahoma;}
.style7 {font-family: Tahoma; color: #DEBA5A; font-size: 12px;}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style8 {font-size: 12px; font-family: Tahoma; font-weight: bold; }
.style9 {font-size: 12px; font-family: Tahoma; color: #4F401C; }
.style10 {
	font-family: Tahoma;
	font-weight: bold;
	font-size: 14px;
}
</style>
<div align="center">
  <table width="878" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    
    <tr>
      <td width="85" height="23">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td width="659">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td width="94">&nbsp;</td>
    </tr>
    <tr>
      <td height="27">&nbsp;</td>
      <td>&nbsp;</td>
      <td valign="top" class="style7"><a linkindex="0" href="index.php" class="style7">Вернуться на главную</a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="46">&nbsp;</td>
      <td colspan="3" valign="top" background="images/kms_bg4.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    
    <!--Rip by Kefirok-->
    <tr>
      <td height="375">&nbsp;</td>
      <td valign="top" background="images/kms_bg2.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td valign="top" background="images/kms_bg5.png"><p align="center" class="style1">&#1044;&#1086;&#1089;&#1090;&#1080;&#1078;&#1077;&#1085;&#1080;&#1103;</p>
        <blockquote>
          
<div class="centerheadtext" align="center"> Рейтинг комманд арены </div></div>
<div class="centertext"><div align="center"></div><br />
<?php include('conf.php'); ?>
<?php   

require_once "confi.php";     

$j=1;
        $teamType = array(
                '2' => '2x2',
                '3' => '3x3',
                '5' => '5x5'
				);
				
$connect = mysql_connect($host,$user,$pass) OR DIE("Не возможно подключится к базе... пожалуйста настройте config.php'"); 
mysql_select_db($db,$connect) or die(mysql_error()); 
mysql_query("SET NAMES '$cod'"); 

if(!isset($_GET['guid'])){

$sql = mysql_query("SELECT * FROM `arena_team` ORDER by `name`");

echo "<center><table border=1 width=70%>
<tr>
<td>Название команды</td>
<td align=center>Тип команды</td>
<td align=center><center>Лидер команды</center></td>
<td>Фракция</td>
<td align=center>Рейтинг</td>

</tr>";
while ($row = mysql_fetch_array($sql)){
$query_num = mysql_query("SELECT COUNT(*) FROM `arena_team_member` WHERE `arenateamid`='$row[arenateamid]'");
$gleader = "SELECT name,race FROM `characters` WHERE `guid`='$row[captainguid]'";
$myrow = mysql_fetch_array(mysql_query($gleader));
$top = mysql_query("SELECT * FROM `arena_team_stats` WHERE `arenateamid`='$row[arenateamid]'");
$toprow = mysql_fetch_array($top);

if($myrow['race']=="1" or $myrow['race']=="3" or $myrow['race']=="4" or $myrow['race']=="7" or  $myrow['race']=="11"){
	
	$faction = "alliance";
	}else{
	$faction = "horde";}



echo "
<tr>
<td >
<p style='padding-left: 5px'><a href='?guid=".$row[arenateamid]."' >".$row['name']."</a></p>
</td>
<td  align=center><center>".$teamType[$row['type']]."</center></td>

<td><a href=".$wowd."/index.php?player=".$row[captainguid].">".$myrow['name']."</a></td>
<td align=center><center><img src=images/".$faction.".gif title=".$faction."></center></td>
<td align=right><p style='padding-right: 8px'>".$toprow['rating']."</p></td></tr>";

}
echo "\n<!-- Талица Арены  () -->\r\n"; 
echo "</table></center><br><br>";
}

if (@$_GET['guid'] ) { 

$name = "SELECT * FROM `arena_team` WHERE `arenateamid`='$_GET[guid]'";
$nrow = mysql_fetch_array(mysql_query($name));
$top = "SELECT * FROM `arena_team_stats` WHERE `arenateamid`='$_GET[guid]'";
$trow = mysql_fetch_array(mysql_query($top));
$member = "SELECT * FROM `arena_team_member` WHERE `arenateamid`='$_GET[guid]'";
$mrow = mysql_fetch_array(mysql_query($member));

$sql = mysql_query("SELECT * FROM `characters`, `arena_team_member` WHERE `characters`.`guid`=`arena_team_member`.`guid` and `arenateamid` = '".$_GET["guid"]."' ");
$row = mysql_fetch_array($sql);
$data = explode(' ',$row['data']);
$lvl = $data[$ver];	
$gender = dechex($data[36]);
$gender = str_pad($gender,8, 0, STR_PAD_LEFT);
$gender = $gender{3};
$guid = $row['guid'];
$race = $row['race'];
$class = $row['class'];
$online = $row['online'];
$j=1;

echo "<center>
<table border=0 width=60%>
<tr>
<td>
<table border=1 width=100%>
<tr><td>Название команды</td><td  >".$nrow['name']."</td></tr>
<tr><td>Рейтинг</td><td  >".$trow['rating']."</td></tr>
<tr><td>Тип команды</td><td  >".$teamType[$nrow['type']]."</td></tr>
<tr><td colspan=2 >Статистика за неделю</td></tr>
<tr><td>Сыграно: ".$trow['games']."</td><td  >Выиграли: ".$trow['wins']."</td></tr>
<tr><td colspan=2 >Общая статистика</td></tr>
<tr><td>Сыграно: ".$trow['played']."</td><td  >Выиграли: ".$trow['wins2']."</td></tr>


</table>
";

echo "\n<!-- Талица Арены  () -->\r\n";

echo "<table border=1 width=100%>
<tr>
<td align=center>#</td>
<td align=center>Имя игрока</td>
<td align=center>lvl</td>
<td align=center>Расса</td>
<td align=center>Класс</td>
<td align=center>Игр за неделю</td>
<td align=center>Выиграл за неделю</td>
<td align=center>Игр за сезон</td>
<td align=center>Выиграл за сезон</td>
<td align=center>Персональный рейтинг</td>
<td align=center>Онлайн</td>
</tr>
";

echo "<tr>
<td valign=center width=3%>$j</td>
<td align=center valign=center width=20%><a href='/wow/wowd/?player=".$guid."' style='color: #ff9900; font-family : Geneva; text-decoration : none;'>".$row[name]."</a></td>
<td width=20 align=center valign=center>$lvl</td>
<td align=center valign=center width=7%><img src=images/race/".$race."-".$gender.".gif></td>
<td align=center valign=center width=7%><img src=images/class/$class.gif></td>
<td align=center width=20%>".$mrow['played_week']."</td>
<td valign=center width=20%>".$mrow['wons_week']."</td>
<td valign=center width=10%>".$mrow['played_season']."</td>
<td valign=center width=10%>".$mrow['wons_season']."</td>
<td valign=center width=10%>".$mrow['personal_rating']."</td>
<td valign=center width=10%><center><img src='images/status/".$online.".gif' height='18' width='18'></center></td>
</tr>
";


echo "</table></td></tr></table></center><br><br><br>";

echo "<table border=1><tr><td><a href='index.php'>Назад/a></td></tr></table>";
} 
?>

</div><div class="centergran"></div>
<div class="centertext1" align="center">С Уважением Администрация</div>
<div class="centerniz"></div>
       

    
    <tr>
      <td height="46"></td>
      <td colspan="3" valign="top" background="images/kms_bg6.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="79"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</div>
<!--Rip by Kefirok-->