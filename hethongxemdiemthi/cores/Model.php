<?php
include '../models/connectDB.php';
class User {

    function __construct() {
        
    }
    public function getUserBySobaodanh($sobaodanh){
        $statement = "select* from thisinh where sobaodanh = '$sobaodanh'";
        return mysql_query($statement);     
    }
}
