<?php

   function isPage($name) {
   
      $page = null;

      if ( isset($page) ) {
      
         $page = $_GET["page"];
      } else {

         $page = "home"; // defaults class "active" if no query string
      }

      if ($page == $name) {
         
         echo 'class="active"'; // assigns class "active" on the current page
      }
   }
?>

<nav class="site-menu">
  <a href="?page=home" <?=isPage("home")?>>Home</a>
  <a href="?page=list" <?=isPage("list")?>>Cake Menu</a>
  <a href="?page=create" <?=isPage("create")?>>Add New Cake</a>
</nav>