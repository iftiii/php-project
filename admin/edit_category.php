<?php 
include('security.php');
include('includes/header.php'); 
include('database/dbcon.php');
//include('category_action.php');
$id=$_GET['edit'];
$query= "SELECT * FROM categories WHERE id='$id'";
if($query_run = $connection->query($query))
{
    $result = $connection->query($query);
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $category_name = $row['category_name'];
    $category_slug = $row['category_slug'];
}  

if (isset($_GET['del'])) {
	$id = $_GET['id'];
	mysqli_query($connection, "DELETE FROM categories WHERE category_name='$category_name', category_slug='$category_slug' WHERE id='$id'");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: list_category.php');
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col">
                        <link rel="stylesheet" type="text/css" href="includes/style.css">
                            <form method="post" action="edit_action.php" >
                            <div>
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                           </div>
                                <div class="input-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category_name" value="<?php echo $category_name; ?>">
                                </div>
                                <div class="input-group">
                                    <label>Category Slug</label>
                                    <input type="text" name="category_slug" value="<?php echo $category_slug; ?>">
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
