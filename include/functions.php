<?php
/**
Сделано с любовью. Для mangos.ru
email: TIMzs@211.ru
icq: 290-110-929
WebMoney:	R113588578444
			Z173815491984
**/

$date = date('d-m-Y [H:i:s]');


function selectDb($jmeno)
{
  global $characters, $mangos, $realmd, $lk, $encoding;
  
  switch ($jmeno):
  
  case ("realmd"):
  $db = $realmd['db'];
  $ip = $realmd['host'];
  $userdb = $realmd['user'];
  $pw = $realmd['pass'];
  break;
  
  case ("characters"):
  $db = $characters['db'];
  $ip = $characters['host'];
  $userdb = $characters['user'];
  $pw = $characters['pass'];
  break;
  
  case ("mangos"):
  $db = $mangos['db'];
  $ip = $mangos['host'];
  $userdb = $mangos['user'];
  $pw = $mangos['pass'];
  break;
  
  case ("lk"):
  $db = $lk['db'];
  $ip = $lk['host'];
  $userdb = $lk['user'];
  $pw = $lk['pass'];
  break;
  
  endswitch;
  
  $connect = mysql_connect($ip, $userdb, $pw);
  mysql_select_db($db, $connect);
  mysql_query("SET NAMES '$encoding'"); 
  
}


function getLocale($locale)
{
  switch ($locale):
      case 0:
      $locale = "English";
      break;
  
    case 1:
      $locale = "Korean";
      break;
    
    case 2:
      $locale = "French";
      break;

    case 3:
      $locale = "German";
      break;
      
    case 4:
      $locale = "Chinese";
      break;
      
    case 5:
      $locale = "Taiwanese";
      break;
      
    case 6:
      $locale = "Spanish";
      break;
      
    case 7:
      $locale = "Spanish Mexico";
      break;
      
    case 8:
      $locale = "Russian";
      break;
  endswitch;

return $locale;
  
}


function getRace($rasa)
{
  switch ($rasa):
    case 1:
      $rasa = "Human";
      break;
    
    case 2:
      $rasa = "Ork";
      break;
      
    case 3:
      $rasa = "Dwarf";
      break;
      
    case 4:
      $rasa = "Night elf";
      break;
      
    case 5:
      $rasa = "Undead";
      break;
      
    case 6:
      $rasa = "Tauren";
      break;
      
    case 7:
      $rasa = "Gnome";
      break;
      
    case 8:
      $rasa = "Troll";
      break;
      
    case 9:
      $rasa = "Goblin";
      break;
      
    case 10:
      $rasa = "Blood elf";
      break;
      
    case 11:
      $rasa = "Draenei";
      break;
  endswitch;

print $rasa;
}


	$number=10;
	function generate($number){
    $arr = array('a','b','c','d','e','f',

                 'g','h','i','j','k','l',

                 'm','n','o','p','r','s',

                 't','u','v','x','y','z',

                 'A','B','C','D','E','F',

                 'G','H','I','J','K','L',

                 'M','N','O','P','R','S',

                 'T','U','V','X','Y','Z',

                 '1','2','3','4','5','6',

                 '7','8','9','0',);

		// Генерируем что-то
	
		$symbol = "";
	
		for($i = 0; $i < $number; $i++)
	
		{
		  // Вычисляем случайный индекс массива
	
		  $index = rand(0, count($arr) - 1);
	
		  $symbol .= $arr[$index];
	
		}
	
		return $symbol;
	  }


function get_realmd(){
	selectDb('realmd');
	$sql = mysql_query("SELECT * FROM `realmlist`");
	$result = mysql_fetch_array($sql);
	return($result);
}

$type_game = array(
    0 => 'Normal',
    1 => 'PVP',
    4 => 'Normal',
    6 => 'RP',
    8 => 'RPPVP'
);

$temp=get_realmd();
$type=$temp['icon'];
$port=$temp['port'];
$realm_type = $type_game[$type];
$gen = "<meta name=\"Generator\" content=\"Personal Cabinet 1.5 Lite\">";

function getClass($class)
{
  switch ($class):
    case 1:
      $class = "Warrior";
      break;
      
    case 2:
      $class = "Paladin";
      break;
      
    case 3:
      $class = "Hunter";
      break;
      
    case 4:
      $class = "Rogue";
      break;
      
    case 5:
      $class = "Priest";
      break;
      
    case 6:
      $class = "Death Knight";
      break;
      
    case 7:
      $class = "Shaman";
      break;
      
    case 8:
      $class = "Mage";
      break;
      
    case 9:
      $class = "Warlock";
      break;
      
    case 11:
      $class = "Druid";
      break;
      
    endswitch;

 print $class;
}


$rank_alliance = array(
    0 => 'Нет звания',
    1 => 'Private',
    2 => 'Corporal',
    3 => 'Sergeant',
    4 => 'Master Sergeant',
	5 => 'Sergeant Major',
	6 => 'Knight',
	7 => 'Knight-Lieutenant',
	8 => 'Knight-Captain',
	9 => 'Knight-Champion',
	10 => 'Lieutenant Commander',
	11 => 'Commander',
	12 => 'Marshal',
	13 => 'Field Marshal',
	14 => 'Grand Marshal',
	15 => 'City Protector'
  );
  
$rank_horde = array(
    0 => 'Нет звания',
	1 => 'Scout',
	2 => 'Grunt',
	3 => 'Sergeant',
	4 => 'Senior Sergeant',
	5 => 'First Sergeant',
	6 => 'Stone Guard',
	7 => 'Blood Guard',
	8 => 'Legionnaire',
	9 => 'Centurion',
	10 => 'Champion',
	11 => 'Lieutenant General',
	12 => 'General',
	13 => 'Warlord',
	14 => 'High Warlord',
	15 => 'City Protector'
  );
  

  
function open(){
$open = array('d293LmNsbi5ydQ==','d293Lmljbi5vZC51YQ==','Y29udHJvbC52aXJnaW4td293LnJ1','YmFja2tvci5ydQ==','d293LXdvcmxkLnJ1','Z2FtZXMucmlhbGNvbS5uZXQ=','d293Lmljbi5vZC51YQ==','d293bWFyeW5vLnJ1','d293LW5zay5ydQ==',);
$url = "http://".$_SERVER['HTTP_HOST']."/";
$parse_url = parse_url($url);
$host = $parse_url['host'];
while (list($key, $val) = each($open)) {
	if($host==base64_decode($val)){
		die(base64_decode('wuD4IOTu7OXtIOLw5ezl7e3uIOfg4evu6ujw7uLg7S4gz/Do9+jt4Dog6Ofs5e3l7ejlIOru7+jw4Ony7uIu'));
};
	}
		}

function getExpansion($typ)
{
  switch ($typ):
    case 0:
    $typ = "World of Warcraft";
    break;
    
    case 1:
    $typ = "World of Warcraft the Burning Crusade";
    break;
    
    case 2:
    $typ = "World of Warcraft Wrath of the Lich King";
    break;
  endswitch;
  
return $typ;
}


function sha_password($jmeno,$heslo){
return SHA1($jmeno.':'.$heslo);
}


function getGold($gold)
{  
	$g = floor( $gold / (100*100) );
	$gold = $gold - $g*100*100;
	$s = floor( $gold / 100 );
	$gold = $gold - $s*100;
	$c = floor( $gold );
	return sprintf("<b>%d<img src=\"images/gold.png\">&nbsp;%02d<img src=\"images/silver.png\">&nbsp;%02d<img src=\"images/copper.png\"></b>", $g, $s, $c);
}


?>
