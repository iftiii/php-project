<?php
include('database/dbcon.php');
include('security.php');

if(isset($_POST['submit']))
 {
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];

  $query = "SELECT * FROM login WHERE Username='$Username' AND Password='$Password'";
  $query_run = $connection->query($query);

  if($query_run = $connection->query($query))
{
    $_SESSION['Username'] = $Username;
    header('Location: index.php');
}  

else{
    echo 'NO';
}


 }


 if(isset($_POST['logout_btn']))
 {
    session_destroy();
    unset($_SESSION['Username']);
 }



?>