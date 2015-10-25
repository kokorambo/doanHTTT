<?php
session_start();
include_once '../cores/Model.php';
$sobaodanh= $_SESSION['user'];
$user_model = new User();
$user = mysql_fetch_array($user_model->getUserBySobaodanh($sobaodanh));
include_once '../views/home.php';