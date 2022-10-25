<?php 
include('security.php');
include('includes/header.php'); 
//include('category_action.php');

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
                        <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col">
                        <link rel="stylesheet" type="text/css" href="includes/style.css">
                            <form method="post" action="category_action.php" enctype="multipart/form-data" >
                                <div class="input-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category_name" value="">
                                </div>
                                <div class="input-group">
                                    <label>Category Slug</label>
                                    <input type="text" name="category_slug" value="">
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