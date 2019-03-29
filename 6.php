
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
          
<div class="centerheadtext" align="center"> Зал позора </div></div>
<div class="centertext"><div align="center"></div><br />
<?php include('conf.php'); ?>
<?php   

require_once "conf.php";     

$ConnectDB = mysql_connect("$host", "$login", "$pass") or die ("Нет соединения с MySQL");   
mysql_select_db("$dbr") or die ("Нет соединения с базой $dbr"); 
echo "<h2>Забаненные аккаунты</h2>"; 
echo "<table width=\"100%\" border=\"1\" align=\"center\"><tr> 
<td align=\"center\" width=\"20%\">забанен:</td> 
<td align=\"center\" width=\"20%\">Бан установлен:</td> 
<td align=\"center\" width=\"20%\">Забанил:</td> 
<td align=\"center\" width=\"20%\">Причина:</td> 
<td align=\"center\" width=\"20%\">Бан до:</td> 
</tr></table>"; 
$i=0; 
$data = mysql_query("SELECT * FROM account_banned WHERE active = 1 ORDER BY bandate DESC LIMIT 100",$ConnectDB); 
@$row = mysql_fetch_array($data[$i]); { 
while($row = mysql_fetch_array($data)) { 
$banid = $row['id']; 
$usern = mysql_query("SELECT * FROM account WHERE id= $banid LIMIT 1",$ConnectDB); 
$rowuser = mysql_fetch_array($usern); 
$banuser = $rowuser['username']; 
$bandate = date("H:i:s d.m.Y", $row['bandate']); 
$bannedby = $row['bannedby']; 
$banreason = $row['banreason']; 
$unbandate = date("H:i:s d.m.Y", $row['unbandate']); 
echo "<font color=\"beer\"> 
<table width=\"100%\" border=\"1\" align=\"center\"><tr> 
<td align=\"center\" width=\"20%\">$banuser</td> 
<td align=\"center\" width=\"20%\">$bandate г.</td> 
<td align=\"center\" width=\"20%\">$bannedby</td> 
<td align=\"center\" width=\"20%\">$banreason</td> 
<td align=\"center\" width=\"20%\">$unbandate г.</td> 
</tr></table></font>"; 
$i++; 
} 
} 
//теперь выборка по IP адресам 
echo "<h2>БАНЫ по IP </h2><br>"; 
echo "<table width=\"100%\" border=\"1\" align=\"center\"><tr> 
<td align=\"center\" width=\"20%\">IP:</td> 
<td align=\"center\" width=\"20%\">Бан установлен:</td> 
<td align=\"center\" width=\"20%\">Забанил:</td> 
<td align=\"center\" width=\"20%\">Причина:</td> 
<td align=\"center\" width=\"20%\">Бан до:</td> 
</tr></table>"; 
$u=0; 
$bannedip = mysql_query("SELECT * FROM ip_banned ORDER BY bandate DESC LIMIT 100"); 
@$row = mysql_fetch_array($bannedip[$u]); { 
while($row = mysql_fetch_array($bannedip)) { 

$banip = $row['ip']; 
$bandate = date("H:i:s d.m.Y", $row['bandate']); 
$bannedby = $row['bannedby']; 
$banreason = $row['banreason']; 
$unbandate = date("H:i:s d.m.Y", $row['unbandate']); 
echo "<font color=\"beer\"> 
<table width=\"100%\"border=\"1\" align=\"center\"><tr> 
<td align=\"center\" width=\"20%\">$banip</td> 
<td align=\"center\" width=\"20%\">$bandate г.</td> 
<td align=\"center\" width=\"20%\">$bannedby</td> 
<td align=\"center\" width=\"20%\">$banreason</td> 
<td align=\"center\" width=\"20%\">$unbandate г.</td> 
</tr></table></font>"; 
$u++; 
} 
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