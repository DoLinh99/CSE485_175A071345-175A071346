
<php
ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Trường Đại học Thủy Lợi</title>
</head>
<body>
    <div class="header">
        <h3>HỆ THỐNG ĐĂNG KÍ HỌC TRƯỜNG ĐẠI HỌC THỦY LỢI</h3>
    </div>
    <ul class="navigation">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="hoidap.php">Hỏi đáp</a></li>
        <li><a href="">Trợ giúp</a></li>
    </ul>

    <div class="main">
        <form method="post">
            <h4>ĐĂNG NHẬP</h4>
            <table style="margin-left:120px">
            <tr>
            <th><span>Tên tài khoản:</span></th>
            <th><input type="text" name="username"></th>
            </tr>
            <tr>
            <th><span>Mật khẩu:</span></th>
            <th><input type="password" name="password"></th>
            </table>
		<br>
			<input type="submit" name="login" id="login" value="Đăng nhập">
			<!-- <div class="register"><b><a href="formregister.php">Đăng ký</a></b></div> -->
            <!-- <a href="">Quên mật khẩu?</a> -->
        </form>
        </div>
    <?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['login'])) 
{
    //Kết nối tới database
    require('connect.php');
     
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "<p style='text-align:center'>Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu<p>";    
    }
    else{
        //Kiểm tra tên đăng nhập có tồn tại không
        $query = mysqli_query($conn,"SELECT * FROM taikhoan WHERE tentk='$username'");
        if (mysqli_num_rows($query) == 0) {
            echo "<p style='text-align:center'>Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.</p>";
        }
        else{
                $row = mysqli_fetch_assoc($query);
                if(password_verify($password,$row['matkhau']))
                {
                    if($row['level']==0){
                        header('location:giangvien.php');
                    }
                    else if($row['level']==1){
                        header('location:quantri.php');
                    }
                    else if($row['level']==2){
                        header('location:quanly.php');
                    }
                }
                else{
                    echo "<p style='text-align:center'>Mật khẩu sai</p>";
                    die(mysqli_error($conn));
                }   
            
        }

    }
     

   
     
}
else{
    
}
?>
    <div class="footer">
        <small>copyright @ NTTL-ĐTL</small>
    </div>
    
</body>
</html>