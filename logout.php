<?php include('config/constants.php') ?>
<?php
session_destroy();

header('location:' . SITEURL . 'login.php');
?>