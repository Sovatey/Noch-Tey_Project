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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">News Data Page</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Banner</th>
                                                <th>New Type</th>
                                                <th>Writer Name</th>
                                                <th>Writer Profile</th>
                                                <th>Date</th>
                                                <th>Viewer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                for($i=1;$i<=5;$i++){
                                                    echo'
                                                    <tr>
                                                        <td>
                                                            <p style="width: 270px !important;">
                                                                ស្ត្រីខ្មែររកស៊ីពីលុយ៣ពាន់$ រកចំណូលបាន២.៥លាន$ ត្រឹម៣ឆ្នាំ ផ្ដាំកត្តាធំ៥ ជួយឱ្យស្រ្តីជោគជ័យ
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <img width="100px" src="./assets/images/banner.jpeg" alt="">
                                                        </td>
                                                        <td>ភាពជាអ្នកដឹកនាំ</td>
                                                        <td>Kan Dara</td>
                                                        <td>
                                                            <img width="100px" src="./assets/images/writer_profile.jpg" alt="">
                                                        </td>
                                                        <td>JANUARY 24 2023</td>
                                                        <td>14 views</td>
                                                        <td>
                                                            <a class="btn btn-info waves-effect waves-linght" href="./tbl_news_update.php">Update</a>
                                                            <a class="btn btn-danger waves-effect waves-linght" href="">Delete</a>
                                                        </td>
                                                    </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
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