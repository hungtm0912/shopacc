<?php
   session_start();
    if(session_destroy()) { 
         header('location: ../layout/layout.main.php');
   }
?>