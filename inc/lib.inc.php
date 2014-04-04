<?php
//  автозагрузка при создании экземпляра класса
 function __autoload($name) {
  include "classes/".$name.".class.php";
 }
?>