
<?php

if( isset($_POST['submit']) )
    {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];


        $mysqli = new mysqli("localhost","root","123456","dazzling_glitter");

    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    
    // Perform query
    try{
        if ($result = $mysqli -> query("SELECT * FROM login where Username='$Username' AND Password='$Password'")) {
        // echo "Returned rows are: " . $result -> num_rows;
            // Free result set
            header('Location: index.php');
            //$result -> free_result();
        }
        else{
            //$result = $mysqli -> query("SELECT * FROM login where Username='$Username' AND Password='$Password'");
            //$_SESSION ['Username'] = 'Email id or password was wrong';
            //header('Location: login.php');
            echo 'no';
        
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
    $mysqli -> close();
} else {
    echo "ola"; 
}

    
?>