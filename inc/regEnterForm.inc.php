<div id="tabbed_box_1" class="tabbed_box">

  <div class="tabbed_area">
   <ul class="tabs">
    <li><a id="tab_1" class="" href="javascript:tabSwitch('tab_1', 'content_1');">Регистрация</a></li><!--почему тут нету класса?-->
		    
    <li><a id="tab_2" class="active" href="javascript:tabSwitch('tab_2', 'content_2');">Войти</a></li>
   </ul>


	    
  <div id="content_1" class="content" style="display:none;">
   <form action="" method="post">
    <ul class="reg_form">
					  
      <li><input type="text" name="name" placeholder="Введите ваше имя" class="reg_form_inp" autocomplete="off" required="required" /></li>
		  
      <li><input type="text" name="surname" placeholder="Введите вашу фамилию"  autocomplete="off" required="required" /></li>
				    
      <li><input type="email" name="email" placeholder="Введите ваш &quot;mail&quot;" autocomplete="off" required="required" /></li>
					    
      <li><input type="password" name="password" placeholder="Введите ваш пароль" autocomplete="off" required="required" /></li>
					    
      <li><input type="password" name="password" placeholder="Повторите ваш пароль" autocomplete="off" required="required" /></li>
					    
      <li><input class="reg_button" type="submit" value="Зарегистрировать" /></li>
					    
    </ul> 
   </form>
  </div>
					 
					
  <div id="content_2" class="content" style="display:block;">
   <form action="" method="post">
    <ul class="enter_form">
						  
      <li><input type="email" placeholder="Введите ваш &quot;mail&quot;" name="email" autocomplete="off" required="required" /></li>
					    
      <li><input type="password" placeholder="Введите пароль" name="password" autocomplete="off" required="required" /></li>
						    
      <li><input class="enter_button" type="submit" value="Войти" /></li>
						    
    </ul>
						    
   </form>    
  </div>

				
 </div>
			
</div>    

