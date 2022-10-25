<?php 
include('security.php');
include('includes/header.php'); 
include('database/dbcon.php');
$results = mysqli_query($connection, "SELECT * FROM categories");

//include('category_action.php');
$id=$_GET['edit'];
$query= "SELECT * FROM products WHERE id=$id";
$result = $connection->query($query);
if($result)
{
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $name = $row['name'];
    $size = $row['size'];
    $unit = $row['unit'];
    $price = $row['price'];
    $categoryId = $row['category_id'];
}   

if (isset($_GET['del'])) {
	$id = $_GET['id'];
	mysqli_query($connection, "DELETE FROM products WHERE name='$name', size='$size' unit='$unit', price='$price', category_id='$categoryId' WHERE id='$id'");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: list_product.php');
}

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('includes/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('includes/navbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col">
                        <link rel="stylesheet" type="text/css" href="includes/style.css">
                        <form method="post" action="edit_product_action.php" >
                    <div> 
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                    </div>
                        
                        <div class="form-group">
                             <label for="exampleFormControlSelect1">Select Category </label>
                             <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                             <?php
                             foreach($results as $value){?>
                                 <option <?php if($value['id'] == $categoryId) echo "selected"; ?> value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
                             <?php } ?>
                             
                             </select>
                         </div>
                     
                      
                         <div class="input-group">
                             <label>Product Name</label>
                             <input type="text" name="name" value="<?php echo $name; ?>">
                         </div>
                         <div class="input-group">
                             <label>Product Size</label>
                             <input type="text" name="size" value="<?php echo $size; ?>">
                         </div>
                         <div class="input-group">
                             <label>Product Unit</label>
                             <input type="text" name="unit" value="<?php echo $unit; ?>">
                         </div>
                         <div class="input-group">
                             <label>Product Price</label>
                             <input type="text" name="price" value="<?php echo $price; ?>">
                      </div>
                      
                         <div class="input-group">
                             <button class="btn" type="submit" name="update" >Update</button>
                         </div>
                     </form>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include('includes/footer.php'); ?>

</body>

</html>
