<?php
session_start();
include '../cores/Model.php';
include '../models/nophoso.php';
$user_model = new User();
$tdh = new thisinh();
$row = mysql_fetch_array($user_model->getUserBySobaodanh($_SESSION['user']));
$truongdaihoc = mysql_fetch_array($tdh->getUniversity());