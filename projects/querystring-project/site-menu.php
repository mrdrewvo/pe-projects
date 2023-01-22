<?php

   function isPage($name) {
   
      $page = $_GET["page"];

      if ($page == $name) {
         
         echo 'class="active"';
      } 
   }

?>

<nav class="site-menu">
  <a href="?page=home" <?=isPage("home")?>>Home</a>
  <a href="?page=list" <?=isPage("list")?>>Cake Menu</a>
  <a href="?page=create" <?=isPage("create")?>>Add New Cake</a>
</nav>