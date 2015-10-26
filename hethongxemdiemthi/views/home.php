<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <h3>Trang chủ</h3>
        <h4>Xin chào: <?php 
        include'../controllers/homeCtrl.php';
        echo $user["hoten"];?></h4>
        <a href="../views/xemdiemthi.php">Xem điểm thi</a>
        <a href="../views/phantichdiemthi.php">Phân tích điểm thi</a>
        <a href="../views/nophoso.php">Nộp hồ sơ</a>
        <a href="../views/ruthoso.php">Rút hồ sơ</a>
        <a href="../views/tuvantuyensinh.php">Tư vấn tuyển sinh</a>
        <a href="../controllers/logoutCtrl.php">Đăng xuất</a>
    </body>
</html>

