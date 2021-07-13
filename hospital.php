
<html lang="en">
<head>
   
    <link rel="stylesheet" href="cs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>a:hover ul.a.dropdown-item a.nav-link div.dropdown-menu{
    display: block;	/* Display the dropdown */
}</style>


  </head>
<body>



<?php
class hospital
{
public $con,$name,$addr,$phno,$gender,$age,$username,$password;
function __construct()
{
    $this->con=mysqli_connect("sql108.epizy.com","epiz_25266794","wwzs4p8oexW","epiz_25266794_w968");

}
function assign($username,$password,$name,$age,$addr,$phno,$gender)
{

$this->username=$username;
$this->password=$password;
$this->name=$name;
$this->addr=$addr;
$this->phno=$phno;
$this->gender=$gender;
$this->age=$age;
}
function insert_patient()
{
    session_start();

$sql="INSERT INTO `patient`(`username`, `password`, `phno`, `gender`, `age`, `name`, `addr`) VALUES ('$this->username','$this->password','$this->phno','$this->gender','$this->age','$this->name','$this->addr')";
if(mysqli_query($this->con,$sql))
{
    echo "hi";
   }
else{
    ?>
<script>alert("try different username");
window.location = "registerp.php";
</script>
<?php
}
mysqli_close($this->con);

}
function insert_doctor($special)
{
$sql="INSERT INTO `doctor`(`username`, `password`, `phno`, `gender`, `age`, `name`, `addr`, `special`) VALUES ('$this->username','$this->password','$this->phno','$this->gender','$this->age','$this->name','$this->addr','$special')";
if(mysqli_query($this->con,$sql))
header("Location: index.php");
else{
    ?>
<script>alert("try different username");
window.location = "registerd.php";
</script>
<?php
}
mysqli_close($this->con);

}
function show()
{
$sql="SELECT * FROM `doctor` WHERE 1";
  $con=mysqli_connect("sql108.epizy.com","epiz_25266794","wwzs4p8oexW","epiz_25266794_w968");
  $row=mysqli_query($con,$sql);
echo "<ol>";
while($r=mysqli_fetch_assoc($row))
{
echo "<li><h2>".$r['name']."</h2>speciality:".$r['special']."</li>"."<br>";
}
echo "</ol>";
}


function appointment($username,$doctor)
{

 
//login($username,$password);

$now = new DateTime();
    $sql="INSERT INTO `book` (`dusername`, `pusername`, `date`, `time`) VALUES ('$doctor', '$username', '2020-01-14', '10:00:00.000000');";
    if(mysqli_query($this->con,$sql))
    {
        ?>
        <script>alert("Successful booked doctor");
        window.location = "index.php";
        </script>
        <?php
    }
    else{
        ?>
        <script>alert("try different doctor");
        window.location = "book.php";
        </script>
        <?php
    //header("Location: index.php");
    }

    mysqli_close($this->con);
    


}
function login($username,$password)
{
    $sql="SELECT `password` FROM `patient` WHERE username='$username'";

    $r=mysqli_query($this->con,$sql);
    $p=mysqli_fetch_assoc($r);
//echo $p['password'];
if($p['password']==$password)
{
    //echo $p['password'];
    session_start();//session is a way to store information (in variables) to be used across multiple pages.

    $_SESSION['username']=$username;//session
       // echo $_SESSION['username'];

    ?>
        <script>
        window.location = "index.php";
        </script>
        <?php   


}
else{
?>
<script>alert("enter correct password");
//window.location = "login.php";
</script>
<?php
mysqli_close($this->con);
}

}
function filter($special)
{
    $sql="SELECT * FROM `doctor` WHERE special='$special'";
   $con=mysqli_connect("sql108.epizy.com","epiz_25266794","wwzs4p8oexW","epiz_25266794_w968");   
    $row=mysqli_query($con,$sql);

   ?>
   
   <nav class="navbar sticky-top navbar-light bg-light nav nav-tabs">
   <a class="navbar-brand" href="index.html">Mediplus</a>
   <a href="index.php" class="nav-item nav-link bg-warning">home</a>

</nav>
   <form method="POST" action="controller.php"><div class="container"><div class="jumbotron">


<tr>
   
    <?php
    while($r=mysqli_fetch_assoc($row))
    {?>
    <td class="text-decoration-none"><input type="radio" name="doctor" value="<?php echo $r['username'];?>" ></td><?php echo $r['name'];?><br>
    <?php } ?>
    <input type="submit" class="btn btn-info" name="book" value="Book doctor"></div></div></form>
<?php
}
}
?>
</tr>
<?php

 include('footer.php'); 
 ?>

