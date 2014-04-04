<?php
//динамическое окно сплетен
$freshGossips = array (
			array('text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Vivamus cursus lorem ut ipsum mattis, quis vulputate augue venenatis.
					  Sed varius purus elit, vel dignissim elit dictum sed. 
					  Aenean volutpat orci dapibus, eleifend elit sodales, eleifend arcu.
					  Proin at euismod leo, at feugiat elit.',
			      'href'=>''),
			array('text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Vivamus cursus lorem ut ipsum mattis, quis vulputate augue venenatis.
					  Sed varius purus elit, vel dignissim elit dictum sed. 
					  Aenean volutpat orci dapibus, eleifend elit sodales, eleifend arcu.
					  Proin at euismod leo, at feugiat elit.',
			      'href'=>''),
			array('text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Vivamus cursus lorem ut ipsum mattis, quis vulputate augue venenatis.
					  Sed varius purus elit, vel dignissim elit dictum sed. 
					  Aenean volutpat orci dapibus, eleifend elit sodales, eleifend arcu.
					  Proin at euismod leo, at feugiat elit.',
			      'href'=>''),
			array('text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Vivamus cursus lorem ut ipsum mattis, quis vulputate augue venenatis.
					  Sed varius purus elit, vel dignissim elit dictum sed. 
					  Aenean volutpat orci dapibus, eleifend elit sodales, eleifend arcu.
					  Proin at euismod leo, at feugiat elit.',
			      'href'=>''),
			array('text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					  Vivamus cursus lorem ut ipsum mattis, quis vulputate augue venenatis.
					  Sed varius purus elit, vel dignissim elit dictum sed. 
					  Aenean volutpat orci dapibus, eleifend elit sodales, eleifend arcu.
					  Proin at euismod leo, at feugiat elit.',
			      'href'=>'')
		      );

//сообщение об ошибке
define ('ERR_DRAW_MENU', 'Извините, данные в разработке...');

// топ меню 
$topMenu = array(
		  array('link'=>'home', 'href'=>'index.php'),
		  array('link'=>'создать', 'href'=>'create.php'),
		  array('link'=>'cплетни', 'href'=>'gossip.php'),
		  array('link'=>'авторы', 'href'=>'authors.php')
		  
		);
// бот меню		
$botMenu = array(
		  array('link'=>'язык', 'href'=>'#'),
		  array('link'=>'кнопка1', 'href'=>'#'),
		  array('link'=>'кнопка2', 'href'=>'#'),
		  array('link'=>'кнопка3', 'href'=>'#'),
		  array('link'=>'кнопка4', 'href'=>'#'),
		);	
		
//боковое левое меню
$leftMenu = array(	
		  array(
	     			'profile_section'=>'Your Name',
				array('link'=>'Сообщения', 'href'=>'messages.php'),
				array('link'=>'Знакомые', 'href'=>'friends.php'),
				array('link'=>'Мои сплетни', 'href'=>'myGossips.php'),
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>'')
			),	
		  array(
				'section'=>'Дополнительное меню 1',
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>'')
			),
		  array(
				'section'=>'Дополнительное меню 2',
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>''),
				array('link'=>'', 'href'=>''),
				
			)
		);
?>