
<?php
include('database/dbcon.php');
include('security.php');

if(isset($_POST['delete_btn']))
 {
//   $category_name = $_POST['category_name'];
//   $category_slug = $_POST['category_slug'];
  $id = $_POST['id'];
  
  
  $query = "DELETE FROM categories WHERE id='$id'";
   
  if ($connection->query($query) === TRUE) {
    header('Location: list_category.php');
  } else {
    echo "Error: " . $query . "<br>" . $connection->error;
  }

  
 }