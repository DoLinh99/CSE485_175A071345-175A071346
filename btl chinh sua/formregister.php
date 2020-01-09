<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Register</title>
</head>
<?php
    include 'header.php';
    ?>
<body>
    <div id="id01" class="modal">
    <form class="modal-content" action="">
        <div class="container">
        <h1>Đăng ký</h1>
        <hr>
        <label for="tdn"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="tên đăng nhập" name="tdn" required><br><br>

        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" placeholder="mật khẩu" name="mk" required><br><br>

        <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br> -->
        
        <!-- <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label> -->

        <div class="clearfix">
            <button type="submit" class="signupbtn">Đăng Ký</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        </div>
    </form>
    </div>

</body>
<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['dangky'])){
        die('');
    }
    else{
    //Nhúng file kết nối với database
    include('connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";

    }
          
        // Mã khóa mật khẩu
        $password = password_hash($password,PASSWORD_DEFAULT);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($conn,"SELECT tentk FROM taikhoan WHERE tentk='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";

    }
          
        
    //Lưu thông tin thành viên vào bảng
    $add = mysqli_query($conn,"INSERT INTO taikhoan
    VALUE ('','$username','$password')");
                          
    //Thông báo quá trình lưu
    if ($add)
        echo "Quá trình đăng ký thành công. ";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký.";

    }
?>
</html>