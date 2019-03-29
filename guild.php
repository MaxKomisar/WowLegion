
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
          
<div class="centerheadtext" align="center"> Гильдии сервера </div></div>
<div class="centertext"><div align="center"></div><br />
<?php include('conf.php'); ?>
<?php   

require_once "confi.php";     

<img src="templates/<?php echo $template ?>/images/text/<?php echo $text[61]?>"><br><br>
<center>
<body>
<table border=1>
<tr>
<td><b><? echo $text[31]?></b></td>
<td><b><? echo $text[32]?></b></td>
<td><b><? echo $text[33]?></b></td>
<td><b><? echo $text[34]?></b></td>
</tr>


$link = mysql_connect("$host", "$user", "$password") or die ("Нет соединения с хостом");
mysql_select_db ("$dbc") or die ("Нет соединения с базой");
mysql_query("SET NAMES $database_encoding");
$query = "SELECT DISTINCT guild.name AS guild_name, characters.name AS leader_name, guild.createdate AS guild_create_date, guild.BankMoney AS guild_bank_money FROM guild, characters WHERE  guild.leaderguid= characters.guid ORDER BY guild_name ASC";

$result = mysql_query ($query) or die ("Нет такой таблицы");

while($data=mysql_fetch_row($result))
{
$create = date("H:i:s d.m.Y", $data[2]);
$gold = floor($data[3]/10000);
$silver = floor(($data[3]-$gold*10000)/100);
$bronze = floor($data[3]-$gold*10000-$silver*100);
$data[2] = "$create";
$data[3] = "$gold <img src='images/gold.gif'> $silver <img src='images/silver.gif'> $bronze <img src='images/cooper.gif'>";
echo "<tr><td>",
implode ("</td><td>", $data), "</td></tr>";
}



</table>
</body>
</center>

</div><div class="centergran"></div>
<div class="centertext1" align="center">WoW Server</div>
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