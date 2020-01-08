<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang đăng lý</title>
    </head>
    <body>
        <h1>Trang đăng ký thành viên</h1>
        <form  method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="txtUsername" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="50" />
                    </td>
                </tr>
            </table>
            <input type="submit" value="Đăng ký" name="dangky" />
        </form>
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