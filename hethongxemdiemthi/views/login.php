
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../templates/css/login.css" rel="stylesheet" type="text/css"/>
        <link href="../templates/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 login well">
                    <h3>Đăng nhập</h3>
                    <div class="dangnhap">
                        <form method="POST" action="../controllers/loginControllers.php">
                            Số báo danh<br>
                            <input type="text" name="sobaodanh" class="form-control">
                            <br>
                            Mật khẩu<br>
                            <input type="password" name="matkhau"  class="form-control">
                            <input type="submit" name="submit" value="Đăng nhập"  class="btn btn-default">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        
        <script src="../templates/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../templates/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    </body>
</html>