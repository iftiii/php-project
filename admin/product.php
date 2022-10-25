<?php 
include('security.php');
include('includes/header.php'); 
include('database/dbcon.php');
//include('category_action.php');
$results = mysqli_query($connection, "SELECT * FROM categories");

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
                <link rel="stylesheet" type="text/css" href="includes/style.css">
                            

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <form method="post" action="product_action.php" enctype="multipart/form-data" >
                        
                               <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Category </label>
                                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                    <?php
                                    foreach($results as $value){?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
                                    <?php } ?>
                                    
                                    </select>
                                </div>
                            
                             
                                <div class="input-group">
                                    <label>Product Name</label>
                                    <input type="text" name="name" value="">
                                </div>
                                <div class="input-group">
                                    <label>Product Size</label>
                                    <input type="text" name="size" value="">
                                </div>
                                <div class="input-group">
                                    <label>Product Unit</label>
                                    <input type="text" name="unit" value="">
                                </div>
                                <div class="input-group">
                                    <label>Product Price</label>
                                    <input type="text" name="price" value="">
                             </div>
                             <div class="input-group">
                                    <label>Is Featured:</label>
                                    <input type="radio" name="yes" id="yes_btn" value="YES">
                                    <label for="yes_btn">YES</label><br>
                                    <input type="radio" name="no" id="no_btn" value="NO">
                                    <label for="no_btn">NO</label>
                             </div>
                             <div>
                                Select image to upload:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                
                                <div>
                             
                                <div class="input-group">
                                    <button class="btn" type="submit" name="create" >CREATE</button>
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