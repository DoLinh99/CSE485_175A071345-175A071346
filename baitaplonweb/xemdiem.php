<?php
    $con = mysqli_connect('localhost','root','','btl') or die(mysqli_connect_error());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/xemdiem.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

    <title>ĐẠI HỌC THỦY LỢI</title>
</head>
<body>
        <?php
        include 'header.php';
        ?>
        <div class="content">
            <h3>Tra cứu điểm</h3>

            <div class="form">
                <form method="post">
                    Mã sinh viên: 
                    <input type="text" name="masv">
                    Chứng minh thư:
                    <input type="text" name="cmt">
                    Năm học:
                    <select name="namhoc">
                        <option>--</option>
                        <option value="2019-2020">2019-2020</option>
                        <option value="2020-2019">2020-2019</option>
                        <option value="2019-2018">2019-2018</option>
                        <option value="2018-2017">2018-2017</option>
                    </select>
                    Học kỳ:
                    <select name="hocky">
                        <option>--</option>
                        <option  value="1">Kỳ 1</option>
                        <option  value="2">Kỳ 2</option>
                    </select>
                    Giai đoạn:
                    <select name="giaidoan">
                        <option>--</option>
                        <option  value="1">Giai đoạn 1</option>
                        <option  value="2">Giai đoạn 2</option>
                    </select>
                    <input type="submit" value = "Xem điểm" name = "xem" >
                </form>
                <table border = "1" width="50%">
                    <tr>
                        <th>Mã sinh viên</th>
                        <th>Tên sinh viên</th>
                        <th>Môn</th>
                        <th>Điểm</th>

                    </tr>
                    <tr>
                        <?php
                            if (isset($_POST['xem'])){
                                if(!empty($_POST['masv']) && empty($_POST['tensv']) && isset($_POST['cmt'])){
                                    $masv=$_POST['masv'];
                                    $tensv=$_POST['tensv'];
                                    $cmt=$_POST['cmt'];
                                    $query=mysqli_query($con,"select * from sinhvien where masv={$masv} and tensv={$tensv} and cmt={$cmt} ");
                                    $count=mysqli_num_rows($query) or die(mysqli_error($con));
                                    if($count>0){
                                        echo 'ok';
                                    }
                                }
                                else echo 'vui lòng nhập đầy đủ thông tin';

                            }
                        ?>
                    </tr>
                </table>

            </div>
        </div>
        <!-- <footer>
        <?php
        include 'footer.php';
        ?>

        </footer> -->
</body>
</html>