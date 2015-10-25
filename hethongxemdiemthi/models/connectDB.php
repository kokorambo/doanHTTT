<?php
include'../config.php';
    $conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD)
            or die("Connected database error");
            $select_db= mysql_select_db(DB_DATABASE,$conn)
            or die("Connected database error");
