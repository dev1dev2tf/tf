<?php
//------------------------------------//
// верхнее, нижнее горизонтальное меню//
//------------------------------------//
function drawHorMenu($menu,$psn){
 switch ($psn){//проверка какое меню топ или бот
 case 'top':
  echo "<ul class='top_nav'>";
  break;
 case 'bot':
  echo "<ul class='bottom_nav'>";
  break;
 default:
  return false;//если какая-то чушь то функция прерывается, вернет фолс
  break;
 }
 
 foreach ($menu as $value){
  echo "<li id=''><a href='{$value['href']}'>{$value['link']}</a></li>";
 }
  echo "</ul>";
 return true;
}


//------------//
// левое меню //
//------------//
function drawLeftMenu($menu){
 foreach ($menu as $subM){
  echo "<ul class='sidebar_menu'>";
  foreach ($subM as $key=>$subMIt){
   if ($key==='profile_section'){//проверка на название секции
    echo "<div class='profile_section'>$subMIt</div>";
   } else if ($key==='section')/*(!is_array($subMIt))*/{//проверка на секцию
    echo "<div class='section'>$subMIt</div>";
   } else {
    echo "<li><a href='{$subMIt['href']}'>
	   <span class='sidebar_ico'></span>	
	   <span class='sidebar_menu_item'>
	    {$subMIt['link']}
	   </span>
	  </a></li>";
   }           
  }
    echo "</ul>";
 }
 return true;
}


//----------------//
// свежие сплетни //
//----------------//
function drawFreshGossips($gossipArray){
 echo "<ul class='news_stripe'>";
 foreach ($gossipArray as $gossip) {
  echo "<li><a href='{$gossip['href']}'>{$gossip['text']}t</a></li>";
 }
 echo "</ul>";
 return true;
}
?>