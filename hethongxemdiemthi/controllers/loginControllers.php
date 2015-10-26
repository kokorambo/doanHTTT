<?php
session_start();
//session_register("user");
include '../cores/Model.php';
 //login
 if (isset($_POST['submit'])) 
    {
        if ($_POST['sobaodanh'] != '' && $_POST['matkhau'] != '') 
            {
                $user_model = new User(); 
                //check username
                $r=  mysql_num_rows($user_model->getUserBySobaodanh($_POST['sobaodanh']));
                if($r>0)
                    {
                    $row = mysql_fetch_array($user_model->getUserBySobaodanh($_POST['sobaodanh']));
                    if($row['matkhau']==$_POST['matkhau'])
                        {
                        $_SESSION['user'] = $row['sobaodanh'];
                        echo 'Đăng nhập thành công';
                        header("location:../views/home.php");
                        }
                    else
                        {
                        echo 'Mật khẩu sai.Vui lòng nhập lại.';
                        }
                    }  
                else
                {
                  echo 'Thành viên không tồn tại'; 
                }
            }
            else
            {
                echo'Vui lòng nhập đầy đủ thông tin!!!';
            }  
     
    }
include'../views/login.php';