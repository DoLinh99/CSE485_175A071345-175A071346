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
            <h3>Tra cứu điểm</h3>

            <div class="form">
                <form method="post">
                    Mã sinh viên: 
                    <input type="text" name="masv">

                    <input type="submit" value = "Xem điểm" name = "xem" >
                    <br>
                </form>
                <?php 
                if(isset($_POST['xem']))
                {
                    $msv   = $_POST['masv'];
                    if (!$msv  )
                    {
                        echo "Vui lòng nhập mã sinh viên. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    }
                    else{

                        if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM diem WHERE masv='$msv'")) > 0)
                        {

                            ?>
                            <br>
                            <br>
                                <table border = '1' width='50%'>
                                <tr>
                                    <th>Mã sinh viên</th>
                                    <th>Tên môn</th> 
                                    <th>Điểm quá trình</th>
                                    <th>Điểm thi</th>
                                </tr>
                              
                            <?php
                               $sql = mysqli_query($conn,"SELECT * FROM diem WHERE masv='$msv' ");
                               while($row = mysqli_fetch_assoc($sql))
                               {
                               
                               $mamon = $row['mamon'];
                               $sql1 = mysqli_query($conn,"SELECT * FROM mon WHERE mamon='$mamon' ");
                               $row1 = mysqli_fetch_assoc($sql1);
                            ?>
                                <tr>
                                    <td><?php echo $row['masv']; ?> </td>
                                    <td><?php echo $row1['tenmon']; ?></td>
                                    <td><?php echo $row['diemqt']; ?></td>
                                    <td><?php echo $row['diemthi']; ?></td>
                               
                                </tr>
                               <?php } ?>
                                </table>

                <?php
                        }
                        else{
                            echo "Không có mã sinh viên cần tìm";
                        }
                        }
                       
                    }     
                
                ?>
        <!-- <footer>
        <?php
        include 'footer.php';
        ?>
        </footer> -->
</body>
</html>