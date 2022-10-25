
<?php
include('database/dbcon.php');
include('security.php');

if(isset($_POST['delete_btn']))
 {

  $id = $_POST['id'];
  
  
  $query = "DELETE FROM products WHERE id='$id'";
   
  if ($connection->query($query) === TRUE) {
    header('Location: list_product.php');
  } else {
    echo "Error: " . $query . "<br>" . $connection->error;
  }

  
 }