<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/8/2017
 * Time: 4:35 PM
 */

include "connectDB.php";
include "log_in/core.php";

if (logged_in()){
    include 'topbar.php';
    ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="post" role="form" style="margin-left: 20px; margin-right: 30px" action="meter_reader.php">

                            <div class="form-group row">
                                <label class="col-2 col-form-label">First Name</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="first_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Last Name</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="last_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Residence No.</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="resid_no">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Street</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="street">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">City</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">NIC</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="nic">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">E-mail</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">User Name</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="user_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Password</label>
                                <div class="col-10">
                                    <input type="password" class="form-control" placeholder="" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Office No.</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="office_no">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Vehicle No.</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="" name="vehicle_id">
                                </div>
                            </div>

                            <input type="submit" value="Submit" class="btn btn-primary" style="margin-right: 10px; float: right">
                        </form>
                        <?php
                        //include 'connectDB.php';
                        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['resid_no']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['nic']) && isset($_POST['email']) && isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['office_no']) && isset($_POST['vehicle_id'])){
                            if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['resid_no']) && !empty($_POST['street']) && !empty($_POST['city']) && !empty($_POST['nic']) && !empty($_POST['email']) && !empty($_POST['user_name']) && !empty($_POST['password']) && !empty($_POST['office_no']) && !empty($_POST['vehicle_id'])){
                                $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
                                $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
                                $resid_no = mysqli_real_escape_string($link, $_POST['resid_no']);
                                $street = mysqli_real_escape_string($link, $_POST['street']);
                                $city = mysqli_real_escape_string($link, $_POST['city']);
                                $nic = mysqli_real_escape_string($link, $_POST['nic']);
                                $email = mysqli_real_escape_string($link, $_POST['email']);
                                $user_name = mysqli_real_escape_string($link, $_POST['user_name']);
                                $password = mysqli_real_escape_string($link, $_POST['password']);
                                $office_no = mysqli_real_escape_string($link, $_POST['office_no']);
                                $vehicle_id = mysqli_real_escape_string($link, $_POST['vehicle_id']);
                                $query = "INSERT INTO staff(first_name, last_name, resident_no, street, city, NIC, email, username, password, office_no) VALUES ('$first_name', '$last_name', '$resid_no', '$street', '$city', '$nic', '$email', '$user_name', md5('$password'), '$office_no')";
                                $getuserid = "SELECT max(user_id) AS user_id FROM staff";
                                $query_run = mysqli_query($link, $query);
                                if($query_run3 = mysqli_query($link, $getuserid)){
                                    $query_row = mysqli_fetch_assoc($query_run3);
                                    $userid = $query_row['user_id'];
                                    $query1 = "INSERT INTO meter_reader(user_id, vehicle_id) VALUES ('$userid', '$vehicle_id') ";
                                    $query_run2 = mysqli_query($link, $query1);
                                }



                            }
                        }

                        ?>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


    </body>
    </html>
    <?php
} else {
    include "log_in/log_in_page.php";
}
?>