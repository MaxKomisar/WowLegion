
<style type="text/css">
body {
background: #000 url(images/kms_bg.jpg) no-repeat center top; color: #4f401c;<br />
}
.style4 {
	color: #EED568;
	font-family: Tahoma;
	font-size: 12px;
}
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
.style5 {
	font-family: "Trebuchet MS";
	font-weight: bold;
}
</style>
<div align="center">
  <table width="878" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    
    <tr>
      <td width="85" height="34"></td>
      <td width="20"></td>
      <td width="236">&nbsp;</td>
      <td width="423"></td>
      <td width="20"></td>
      <td width="94"></td>
    </tr>
    <tr>
      <td height="16"></td>
      <td></td>
      <td valign="top"><span class="style4"><a href="index.php" class="style4">&#1042;&#1077;&#1088;&#1085;&#1091;&#1090;&#1100;&#1089;&#1103; &#1085;&#1072; &#1075;&#1083;&#1072;&#1074;&#1085;&#1091;&#1102;</a></span></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    
    
    
    <tr>
      <td height="46">&nbsp;</td>
      <td colspan="4" valign="top" background="images/kms_bg4.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    
    
    <tr>
      <td height="375">&nbsp;</td>
      <td valign="top" background="images/kms_bg2.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td colspan="2" valign="top" background="images/kms_bg5.png">
<!--
<table width=500 border=0 align=center>
  <tr>
   <td><b>ник    </b></td>
   <td><b>время в игре    </b></td>
   <td><b>смертей    </b></td>
  </tr>
<? 
require_once ('./inc/config.php');
$con = mysql_connect("$ip", "$dblogin", "$dbpass") or die(mysql_error());    
mysql_select_db($dbc) or die(mysql_error());    

$resurs = mysql_query(" SELECT * FROM `characters` ORDER BY `totalKills` DESC LIMIT 0 , 20 ");    
echo "";    
while($rows = mysql_fetch_object($resurs))    
{        
        $name = $rows->name;    
        $time = $rows->totaltime;       
        $kill = $rows->totalKills;      
$time = intval ($time/60);
$min = $time%60;
$time = intval ($time/60);
$hours = $time%24;
$time = intval($time/24);  
$days = $time; 
        echo  "<tr><td>",$name,"</td><td>",$days,"д ",$hours,"ч ",$min,"м</td><td>",$kill,"</td></tr>";    
}    
echo "</table>";
 ?>


--> Нету столбца с количеством смертей

</td>
      <td valign="top" background="images/kms_bg3.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    <tr>
      <td height="46"></td>
      <td colspan="4" valign="top" background="images/kms_bg6.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="79"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
  </table>
</div>
