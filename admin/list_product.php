<?php 
include('security.php');
include('includes/header.php');
include('database/dbcon.php');
include('delete_product_popup.php');

$results = mysqli_query($connection, "SELECT 
products.*, 
categories.category_name
FROM
products
LEFT JOIN categories ON 
categories.id = products.category_id;");


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
                        <h1 class="h3 mb-0 text-gray-800">List Product</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
										<tr>
                                            <th>ProductImage</th> 
                                            <th>Category</th>
											<th>ProductName</th>
                                            <th>ProductSize</th>
                                            <th>ProductUnit</th>
                                            <th>ProductPrice (TK)</th>
                                            
                                            
											
											<th colspan="2">Action</th>
										</tr>
                                    </thead>
									<tbody>
									<?php while ($row = mysqli_fetch_array($results)) { ?>
										<tr>
                                            <td><img src="images/<?php echo $row['image'];?>"alt="Girl in a jacket" width="150" height="100"></td>
                                            <td><?php echo $row['category_name']; ?></td>
											<td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['size']; ?></td>
                                            <td><?php echo $row['unit']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
											
											<td>
												<a href="edit_product.php?edit=<?php echo $row['id']; ?>" class="edit_btn" name='edit' >Edit</a>
											</td>
											<td>
                                            <a onclick="remove(<?php echo $row['id']; ?>)" class="dropdown-item" href="" data-toggle="modal" data-target="#delModal">
                                              <i class="bi bi-trash"></i>Delete</a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
                                 </table>
                            </div>
                        </div>
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
    <script>
        function remove(id) {
            document.getElementById('id').value = id;
        }
    </script>

</body>

</html>