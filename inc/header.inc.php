<nav>
 <p class="logo">LOGO</p>
  <?php
   $html = new HTML();
   if(!$html->drawHorMenu($topMenu,'top')){
    echo ERR_DRAW_MENU;
   }
  ?>
  <form class="top_search" method="get" action="">
   <input type="search" class="top_search_form" placeholder="поиск...">
  </form>
</nav>




