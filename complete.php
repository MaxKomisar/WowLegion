
<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
body {
background: #000 url(images/kms_bg.jpg) no-repeat center top; color: #4f401c;<br />
}
.style1 {
	font-family: Tahoma;
	font-weight: bold;
	font-size: 16px;
}
.style4 {
	font-size: 14px;
	font-family: Tahoma;
	font-weight: bold;
}
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
.style14 {color: #000000; }
.style16 {font-family: Tahoma; font-size: 14px;}
.style17 {font-family: Tahoma; color: #006633; font-size: 14px; }
.style18 {font-family: Tahoma; font-size: 12px; color: #000000; }
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
      <td valign="top" class="style7"><a href="index.php" class="style7">&#1042;&#1077;&#1088;&#1085;&#1091;&#1090;&#1100;&#1089;&#1103; &#1085;&#1072; &#1075;&#1083;&#1072;&#1074;&#1085;&#1091;&#1102;</a></td>
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

      <td valign="top" background="images/kms_bg5.png"><p align="center" class="style1"></p>

    <?php
require_once ('./inc/config.php');
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");
$realmd = mysql_connect("$dbip:$dbport", "$dblogin", "$dbpass", True);
mysql_selectdb("$rdb", $realmd);    
if (isset($_POST['account'])) {       
if ($_POST['account'] && strlen($_POST['account'])<=20 && strlen($_POST['account'])>=3 && strlen($_POST['password'])>=3 && $_POST['password'] && $_POST['password2'] && $_POST['password']==$_POST['password2']) {       
        if (!eregi("^[a-zA-Z0-9_]+$", $_POST['account']))       
          die ("<p>Error: SQL-Injection</p>");       
        if (!eregi("^[a-zA-Z0-9_]+$", $_POST['password']))       
          die ("<p>Error: SQL-Injection</p>");       
          $pass = ($_POST['password']);       
          $username = ($_POST['account']);       
          $result = mysql_query("SELECT * FROM account WHERE username='".$_POST['account']."' AND sha_pass_hash='$pass'", $realmd);       
          if (mysql_num_rows($result) != 0) {       
              echo "<center><p><font color=#CC0000><b>Такой аккаунт уже есть!</b></font></p></center>";       
          } else {       
              if (!mysql_query("INSERT INTO account (username, sha_pass_hash, email, expansion) VALUES ('$username', SHA1(CONCAT(UPPER('$username'),':',UPPER('$pass'))), '".$_POST['email']."', $tbc)", $realmd)) {echo "<blockquote>
          <p class=style4 align=center>Ошибка! </p>
          <p class=style4 align=center>Не верно заполнены некоторые поля! </p>
          <div align=center>

            <p class=style16 align=center>Возможные причины:</p>
            <div align=left><span class=style16>Не совпадают пароли;</span></div>

            <p class=style16 align=left>Некоторые поля остались пустыми;</p>
            <p class=style16 align=left>Не введен код подтверждения;</p>

            <p class=style16 align=left>Введены не допустимые символы.</p>
          </div>
          <p class=style14 align=center>&nbsp;</p>
          <p class=style14 align=center><a linkindex=1 href=/1.php class=style14><u>попробовать еще раз</u></a></p>

          <p class=style14 align=center>.</p>

        </blockquote>";} else {echo "<blockquote>
          <p class=style4 align=center>Регистрация прошла успешно!</p>
          <p class=style4 align=center>Поздравляем! Теперь вы начинающий мясник сервера! </p>
          <p class=style4 align=center>реалмлист: <span class=style17>set realmlist $realmlist</span></p>
          <p class=style4 align=center>версия: <span class=style17>$ver</span></p>
          <p class=style14 align=center><a linkindex=1 href=/ class=style14><u>вернуться на главную</u></a></p>

          <p class=style4 align=left>Полезные ссылки:</p>
          <p class=style9 align=left><a linkindex=2 href=/kms.php class=style14><u>Курс молодого мясника</u></a></p>
          <p class=style9 align=left><a linkindex=3 href=/support.php class=style14><u>Поддержка игроков</u></a></p>
          <p class=style9 align=left><span class=style18><a linkindex=4 href=/lk class=style18><u>Личный Кабинет</u></a></span></p>
        </blockquote>";}       
          }       
} else {       
          echo "<blockquote>
          <p class=style4 align=center>Ошибка! </p>
          <p class=style4 align=center>Не верно заполнены некоторые поля! </p>
          <div align=center>

            <p class=style16 align=center>Возможные причины:</p>
            <div align=left><span class=style16>Не совпадают пароли;</span></div>

            <p class=style16 align=left>Некоторые поля остались пустыми;</p>
            <p class=style16 align=left>Не введен код подтверждения;</p>

            <p class=style16 align=left>Введены не допустимые символы.</p>
          </div>
          <p class=style14 align=center>&nbsp;</p>
          <p class=style14 align=center><a linkindex=1 href=/1.php class=style14><u>попробовать еще раз</u></a></p>

          <p class=style14 align=center>.</p>

        </blockquote>";       
}       
}       

?> 

<!--Rip by Kefirok-->


      </td>
      <td valign="top" background="images/kms_bg3.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
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
<!--Rip by Kefirok-->
</div>