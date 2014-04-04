<aside id='sidebar'>
 <div class='sidebar_search'>
  <form method='get' action='' id='sidebar_search'>
   <input type='search' placeholder='поиск...' />
  </form>
 </div>
  <div class='sidebar_menu_content'>
    <?php
      drawLeftMenu($leftMenu);
    ?>
  </div>
 <div class="sidebar_ent_reg">
  <button onclick="showAuthWindow(this);" class="sidebar_reg">
   Регистрация
  </button>
  <button onclick="showAuthWindow(this);" class="sidebar_enter">
   Войти
  </button>
 </div>
</aside>
