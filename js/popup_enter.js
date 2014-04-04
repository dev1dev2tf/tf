function showAuthWindow(e){
 var popup=document.getElementById('popup_overlay');
 popup.style.display='block';
 if (e.className=='sidebar_reg')
  tabSwitch('tab_1', 'content_1');//вкладка регистрации, если эл.класс = регистр.
 else
  tabSwitch('tab_2', 'content_2');//вкладка вход в остальных случаях
}
function regWindowClose(){
 var popup=document.getElementById('popup_overlay');
 popup.style.display='none';
}