<?php
include "data.inc.php";
require_once "lib.inc.php";
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<!--<meta http-equiv="refresh" content="3" />-->
			<title>
				Gossip
			</title>
			<link href="style.css" rel="stylesheet" />
			<link href="русинстиль.css" rel="stylesheet" />
			<link href="gossip.css" rel="stylesheet" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="popup_enter.js"></script>
			<script src="vkladki.js"></script>
						
		
		
		</head>
			<header>	
				<nav>
						<p class="logo">LOGO
						</p>
						<ul class="top_nav">
							<li id="home"><a href="#">home</a></li>
							<li id="new"><a href="#">cоздать</a></li>
							<li id="top_gsp"><a href="#">сплетни</a></li>
							<li id="top_auth"><a href="#">авторы</a></li>
						
							
						
						</ul>
					
						<form class="top_search">
						<input type="search" class="top_search_form" placeholder="поиск...">
						</form>
					
				</nav>
			</header>
			<div id="wrapper">
				<div id="content">
				  <?php
				   include 'leftMenu.inc.php';
				  ?>
				    
				  
				  
				  
				  
				  
				  
				  <!--<div id="gossips_panel">
				    <ul class="gossips_panel_list">
				      <li>
					<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a>
				      </li>
				      
				      <li>
					<a href="#">другая сплетня</a>
				      </li>
				      
				      <li>
					<a href="#">продаем аккаунты</a>
				      </li>
				      
				      <li>
					<a href="#">четвертая сплетня</a>
				      </li>
				      
				      <li>
					<a href="#">бей беги</a>
				      </li>
				      
				      <li>
					<a href="#">шестая сплетня</a>
				      </li>
				      
				      <li>
					<a href="#">еще одна</a> 
				      </li>
				      
				      <li>
					<a href="#">текст текст текст</a>
				      </li>
				      
				      <li>
					<a href="#">а у нас есть газ</a>
				      </li>
				    
				    </ul>
				  </div>-->
				  
				  <div id="main_gossip">
				    <div id="gossip_text">
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					    
				    </div>
				    
				    <div id="comments">
				    
				      
				      <textarea id="popup_toggle" class="comments_area" name="comments" placeholder="Введите ваш комментарий" maxlength="500" autocomplete="off"></textarea>

				      <button id="#" class="send_comment">Отправить</button>
				      <div class="attach_items">
					<div class="attach">добавить
					<ul class="attach_list">
					  <li>
					    <a href="#">документ</a>
					  </li>
					  <li>
					    <a href="#">видеозапись</a>
					  </li>
					  <li>
					    <a href="#">аудиозапись</a>
					  </li>
					  <li>
					    <a href="#">изображение</a>
					  </li>	      
					</ul>
					</div>
				      </div>
				      
				      
				      
				  <?
				   include "authWindow.inc.php";
				  ?>
				
				
				
				
				
				
				
				
				
				</div>
				</div>
				<footer>
					<div id="bottom">
						<ul class="bottom_nav">
							<li id="language"><a href="#">язык</a></li>
							<li id="button1"><a href="#">button1</a></li>
							<li id="button2"><a href="#">button2</a></li>
							<li id="button3"><a href="#">button3</a></li>
							<li id="button4"><a href="#">button4</a></li>
						</ul>
						<div class="copyright">OV &copy 2013</div>
						<div class="autors">author and author</div>
					</div>
				
				 </footer>
			
				
				
				
				
				
			</div>
</body>
</html>
			
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				