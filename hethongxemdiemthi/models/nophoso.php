<?php
class thisinh {

    public function getUniversity() {
        $statement = "select * from truongdaihoc where 1";
        return mysql_query($statement); 
    }
    public function submit(){
        
    }
            
    function __construct() {
        
    }

}
