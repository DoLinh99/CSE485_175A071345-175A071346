<?php
    include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index1.css">
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
            <h3>Xóa tài khoản</h3>

            <div class="form">
                <form method="post">
                    Tên tài khoản: 
                    <input type="text" name="tentk">

                    <input type="submit" value = "Tìm tài khoản" name = "tim" >
                    <input type="submit" value = "Xóa tài khoản" name = "xoa" >
                    <br>
                </form>
                <?php 
                if(isset($_POST['tim']))
                {
                    $tentk   = $_POST['tentk'];
                    if (!$tentk  )
                    {
                        echo "Vui lòng nhập tên tài khoản. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    }
                    else{

                        if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM taikhoan WHERE tentk='$tentk'")) > 0)
                        {

                            ?>
                            <br>
                            <br>
                                <table border = '1' width='50%'>
                                <tr>
                                    <th>Mã tài khoản</th>
                                    <th>Tên tài khoản</th> 
                                    <th>Quyền</th>
                                </tr>
                              
                            <?php
                               $sql = mysqli_query($conn,"SELECT * FROM taikhoan WHERE tentk='$tentk' ");
                                $row = mysqli_fetch_assoc($sql);

                            ?>
                                <tr>
                                    <td><?php echo $row['matk']; ?> </td>
                                    <td><?php echo $row['tentk']; ?></td>
                                    <td><?php echo $row['level']; ?></td>
                               
                                </tr>
                             
                                </table>

                             <?php
                         }
                        else{
                            echo "Không có tài khoản cần tìm";
                        }  
        }     
                }     
                if(isset($_POST['xoa'])){
                    $tentk   = $_POST['tentk']; 
                    mysqli_query($conn,"delete from taikhoan where tentk='$tentk' and level =0") or die(mysqli_error($conn));
                    echo 'Đã xóa thành công!!!';
                }
    ?>       
</body>
</html>