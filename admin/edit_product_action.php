<?php
include('database/dbcon.php');
include('security.php');

if(isset($_POST['update']))
 {
  //$category_name = $row['category_name'];
  $name = $_POST['name'];
  $size = $_POST['size'];
  $unit = $_POST['unit'];
  $price = $_POST['price'];
  $id= $_POST['id'];
  $categoryId = $_POST['category_id'];

  
  
  $query = "UPDATE products SET name='$name', size='$size', unit='$unit', price=$price, category_id='$categoryId' WHERE id=$id";
   
  if ($connection->query($query) === TRUE) {
    header('Location: list_product.php');
  } else {
    echo "Error: " . $query . "<br>" . $connection->error;
  }

  
 }



?>