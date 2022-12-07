<?php
    session_start();
    $current = 'products';
	require_once 'includes/sidebar.php'; 
	require_once 'includes/navbar.php';	



?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ml-3 ">



<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Products</h1>
		<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
	</div>
</div>


<div class = "row">
                    <div class="col-lg-12">
                    <?php 
                    if(!isset($_GET['action'])){
                        require_once 'design/products/products_view.php';    

                    }elseif ($_GET['action']== 'add') {

                        require_once 'design/products/products_add.php';
                    }elseif ($_GET['action']== 'edit') {
                        require_once 'design/products/products_edit.php';

                    }
                    
                    ?>
                    </div>
            </div>



            </div>
            <!-- End of Main Content -->

<?php
// include 'includes/footer.php'; 
?>




































<?php
include 'includes/footer.php';

?>