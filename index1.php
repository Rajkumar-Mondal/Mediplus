<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>a:hover ul.a.dropdown-item a.nav-link div.dropdown-menu{
    display: block;	/* Display the dropdown */
}</style>


  </head>
<body>

   <nav class="navbar sticky-top navbar-light bg-light nav nav-tabs">
    <a class="navbar-brand" href="#">available doctors,
    have a look</a>
    <?php
    session_start();
    //session is a way to store information (in variables) to be used across multiple pages.
    
?>
  <a href="index.php" class="nav-item nav-link bg-warning">home</a>
  </nav>
<br>
<p class="container">
  <?php
  include('hospital.php');
  //echo "hio";
  $s=new hospital();
   // echo "hi";

  $s->show();
  ?>

</p>
<?php

 include('footer.php'); 
 ?>