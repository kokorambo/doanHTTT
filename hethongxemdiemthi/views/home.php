<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h3>Trang chủ</h3>
        <h4>Xin chào: <?php 
        include'../controllers/homeCtrl.php';
        echo $user["hoten"];?></h4>
        <a href="../controllers/logoutCtrl.php">Đăng xuất</a>
    </body>
</html>

