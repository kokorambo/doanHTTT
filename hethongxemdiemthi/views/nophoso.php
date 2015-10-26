<?php
include '../controllers/nophosoCtrl.php';
?>
<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../templates/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../templates/css/login.css" rel="stylesheet" type="text/css"/>
        <title>Nộp hồ sơ</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 well login">
                    <div class="head">
                        <h2>Nộp hồ sơ</h2>
                    </div>
                    <div class="info">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td>Số báo danh:</td>
                                <td> <?php echo $row[0]; ?></td>
                            </tr>
                            <tr>
                                <td> Họ tên:</td>
                                <td><?php echo $row[1]; ?></td>
                            </tr>
                            <tr>
                                <td>Mã cụm thi:</td>
                                <td> <?php echo $row[2]; ?></td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td><?php echo $row[3]; ?></td>
                            </tr>
                            <tr>
                                <td>Ngày sinh:</td>
                                <td><?php echo $row[4]; ?></td>
                            </tr>
                            <tr>
                                <td>Quê quán:</td>
                                <td><?php echo $row[5]; ?></td>
                            </tr>
                            <tr>
                                <td>CMND:</td>
                                <td><?php echo $row[6]; ?></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td><?php echo $row[7]; ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?php echo $row[9]; ?></td>
                            </tr>
                            <tr>
                                <td>Điểm ưu tiên:</td>
                                <td><?php echo $row[8]; ?></td>
                            </tr>
                        </table>  
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="col-xs-5">
                                    <label class="form-inline">Chọn trường</label>
                                </div>
                                <select name="truongdaihoc" class="form-control">
                                        <option value="Đại học Bách Khoa Hà Nội">Đại học Bách Khoa Hà Nội</option>
                                        <option value="Đại học Dược Hà Nội">Đại học Dược Hà Nội</option>
                                        <option value="Đại học Kinh tế quốc dân">Đại học Kinh tế quốc dân</option>
                                        <option value="Đại học Luật Hà Nội">Đại học Luật Hà Nội</option>
                                        <option value="Đại học Luật Hà Nội">Đại học Luật Hà Nội</option>
                                        <option value="Đại học Hà Nội">Đại học Hà Nội</option>
                                        <option value="Đại học Ngoại thương">Đại học Ngoại thương</option>
                                        <option value="Đại học Sư phạm Hà Nội">Đại học Sư phạm Hà Nội</option>
                                        <option value="Đại học Thương Mại">Đại học Thương Mại</option>
                                        <option value="Đại học Xây dựng">Đại học xây dựng</option>
                                        <option value="Đại học Y Hà Nội">Đại học Y Hà Nội</option>       
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-5">
                                    <label class="form-inline">Chọn ngành học</label>
                                </div>
                            <select name="nganhhoc" class="form-control">
                                <option value="Tự động hóa">Tự động hóa</option>
                                <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                <option value="Đại học Bách Khoa Hà Nội">Đại học Bách Khoa Hà Nội</option>
                                <option value="Đại học Bách Khoa Hà Nội">Đại học Bách Khoa Hà Nội</option>
                            </select>  
                            </div>
                            <div class="form-group">
                                <div class="col-xs-5">
                                    <label class="form-inline">Mã xác nhận</label>
                                </div>
                                <input type="text" name="Mã xác nhận" class="form-control"><br>                     
                                <input type="submit"  name="Nophoso" value="Nộp hồ sơ" class="btn btn-default btn-primary " style="margin-left: 0px">
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    <script src="../templates/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../templates/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

