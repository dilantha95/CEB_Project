<?php
include "connectDB.php";


if ($_SESSION['user_type'] == 'customer'){
?>

<li>
    <a  href="account_settings.php"><i class="fa fa-dashboard fa-3x"></i> Account Settings</a>
</li>
<li>
    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Connection<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="connection_request.php">Request Connection</a>
        </li>
        <li>
            <a href="#">Current Connection</a>
        </li>
        <li>
            <a href="#">View Connection Details</a>
        </li>

    </ul>
</li>

<li>
    <a  href="file_complaint.php"><i class="fa fa-dashboard fa-3x"></i> Complaint</a>
</li>

<li>
    <a  href="#"><i class="fa fa-dashboard fa-3x"></i> Bills</a>
</li>

<li>
    <a  href="#"><i class="fa fa-dashboard fa-3x"></i> Notifications</a>
</li>

<li>
    <a  href=""><i class="fa fa-dashboard fa-3x"></i> Rates </a>
</li>



<?php
} else if ($_SESSION['user_type'] == 'admin') {
    ?>
    <li>
        <a href="account_settings.php"><i class="fa fa-dashboard fa-3x"></i> Account Settings</a>
    </li>

    <li>
        <a href="#"><i class="fa fa-dashboard fa-3x"></i> Send Notice</a>
    </li>

    <li>
        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Add User <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="meter_reader.php">Meter Reader</a>
            </li>
            <li>
                <a href="customer.php">Customer</a>
            </li>
            <li>
                <a href="admin.php">Admin</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="new_meter.php"><i class="fa fa-dashboard fa-3x"></i> Meter Installation</a>
    </li>

    <li>
        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Connection<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#">Connection Requests</a>
            </li>
            <li>
                <a href="add_connectiontype.php">Add Connection Type</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Complaint<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="look_complain.php">View Complaint</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Rate<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="look_complain.php">Range</a>
            </li>
            <li>
                <a href="file_complaint.php">Rate</a>
            </li>
        </ul>
    </li>

    <?php
} else if ($_SESSION['user_type'] == 'meter_reader') {

    ?>
    <li>
        <a href="account_settings.php"><i class="fa fa-dashboard fa-3x"></i> Account Settings</a>
    </li>

    <li>
        <a href="add_reading.php"><i class="fa fa-dashboard fa-3x"></i> Add Reading</a>
    </li>

    <li>
        <a href=""><i class="fa fa-dashboard fa-3x"></i> Rates </a>
    </li>

    <?php
}
?>
