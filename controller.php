<?php

include_once('hospital.php');
$s=new hospital();
if(isset($_POST['registerd']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$age=$_POST['age'];
$special=$_POST['special'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$addr=$_POST['addr'];
$s->assign($username,$password,$name,$age,$addr,$phno,$gender);

$s->insert_doctor($special);
//echo $_SESSION['username'];
}
if(isset($_POST['registerp']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$addr=$_POST['addr'];
$special=$_POST['special'];
$s->assign($username,$password,$name,$age,$addr,$phno,$gender);
$s->insert_patient();
    ?>
        <script>
        window.location = "index.php";
        </script>
        <?php
        //echo $_SESSION['username'];
}
if(isset($_POST['book']))
{
    session_start();//session is a way to store information (in variables) to be used across multiple pages.

    if(!isset($_SESSION['username'])){
        ?>
        <script>alert("login first");
        window.location = "login.php";
        </script>
        <?php
    }
    else
    {
        $username=$_SESSION['username'];
        $doctor=$_POST['doctor'];

        $s->appointment($username,$doctor);

    }
  
}
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $s->login($username,$password);
}
if(isset($_GET['filter']))
{
    session_start();//session is a way to store information (in variables) to be used across multiple pages.

    if(!isset($_SESSION['username'])){
        ?>
        <script>alert("login first");
        window.location = "login.php";
        </script>
        <?php
    }
    else
    {
    $special=$_GET['special'];
    $s->filter($special);
    }
}
?>