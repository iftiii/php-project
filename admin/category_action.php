
<?php
include('database/dbcon.php');
include('security.php');


if(isset($_POST['create']))
 {
  $target_dir = "images/category_image/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $image_name=$_FILES["fileToUpload"]["name"];
 
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

  $category_name = $_POST['category_name'];
  $category_slug = $_POST['category_slug'];

  
  $query = "INSERT INTO categories (category_name, category_slug,image) VALUES ('$category_name', '$category_slug', '$image_name')";
   
  if ($connection->query($query) === TRUE) {
    header('Location: list_category.php');
  } else {
    echo "Error: " . $query . "<br>" . $connection->error;
  }
  {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  
 }

?>