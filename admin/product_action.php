<?php
include('database/dbcon.php');
include('security.php');




if(isset($_POST['create']))
 {
  //$_FILES["fileToUpload"];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $image_name=$_FILES["fileToUpload"]["name"];
 
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

  $name = $_POST['name'];
  $category_id = $_POST['category_id'];
  $size = $_POST['size'];
  $unit = $_POST['unit'];
  $price = $_POST['price'];
  

  
  $query = "INSERT INTO products (name, category_id, size, unit, price,image) VALUES ('$name', '$category_id', '$size', '$unit', '$price','$image_name')";
   
  if ($connection->query($query) === TRUE) {
  header('Location: list_product.php');
    
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


// Check if image file is a actual image or fake image


// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
//}

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
 

?>