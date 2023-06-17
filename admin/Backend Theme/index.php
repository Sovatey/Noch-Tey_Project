<?php
    include("header.php");
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid h-100">
                        <div style="overflow: hidden;width:90%px;height: 75vh" class="slide position-relative">
                            <img class="w-100 h-100 position-absolute" style="object-fit: cover;" src="./assets/images/background.gif" alt="">
                            <div style="background-color: #0000007a;" class="container-fluid d-flex align-items-center justify-content-center position-absolute p-0 h-100">
                                <div class="box text-center">
                                    <h1 class="text-white">Welcome to Admin Dashboard</h1>
                                    <h1 class="text-warning">__Admin Dashboard__</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- End Page-content -->
                <?php
                    include("footer.php");
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <?php
            include("right_side_bar.php");
        ?>
        <!-- /Right-bar -->
    </body>

</html>