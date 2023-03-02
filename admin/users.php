<?php
session_start();
$current = 'users';
require_once 'includes/sidebar.php';    
require_once 'functions/helper.php';                                             
require_once 'includes/navbar.php';     

?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ml-3">
                <!-- Begin Page Content -->
                <div class="container-fluid ">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                        <!-- <a href="add_users.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> add Users </a> -->
                    </div>
                </div>
                

                <div class = "row">
                    <div class="col-lg-12">

        <?php
        
        if(!isset($_GET['action'])){

            require_once 'design/users_view.php';


        }elseif ($_GET['action']== 'add') {

            require_once 'design/users_add.php';

        }elseif($_GET['action']== 'edit'){

            require_once 'design/users_edit.php';

        } else{
            
            echo "page not found 404";
        }

        
        
        ?>
        </div>
            </div>




            </div>
            <!-- End of Main Content -->

<?php
require_once 'includes/footer.php'; 
?>

<!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    < Page level custom scripts> <script src="js/demo/datatables-demo.js"></script> -->
