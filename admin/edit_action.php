<?php
include('database/dbcon.php');
include('security.php');

if(isset($_POST['update']))
 {
  $category_name = $_POST['category_name'];
  $category_slug = $_POST['category_slug'];
  $id = $_POST['id'];
  
  
  $query = "UPDATE categories SET category_name='$category_name', category_slug='$category_slug' WHERE id='$id'";
   
  if ($connection->query($query) === TRUE) {
    header('Location: list_category.php');
  } else {
    echo "Error: " . $query . "<br>" . $connection->error;
  }

  
 }



?>
