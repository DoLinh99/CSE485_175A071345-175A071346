
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giảng viên-ĐHTL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/index3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="header">
          <div class="title col-md-6"> 
           <a href=""><img src="img/truongdaihocthuyloi.jpg" alt="" style="width:70px; height:50px"></a>
            <a class="navbar-brand" href="index.php"><b>ĐẠI HỌC THỦY LỢI</b> </a></div>
        <div class="ad_logout col-md-5">
           <ul  class="navbar-nav">
            
               <!-- Dropdown -->
               <li class="nav-item ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
                     Giảng viên
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                     <a class="dropdown-item" href="">Thông tin tài khoản</a><hr>
                     <a class="dropdown-item" href="formlogin.php">Đăng xuất</a>
                  </div>
                </li>

            </ul>

        </div>
        
       </div>           
        
           <div class="content">  
             <div class="content-left">  
               <ul>
                  <li class="nav-item1">
                     <a href="index.php">
                        <i class="fa fa-home"> Trang chủ </i>
                     </a>
                                       
                   </li> <hr>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-list">Lớp học phần</i> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <a class="dropdown-item" href="#">Xem danh sách lớp học phần</a>                  
                        </div>
                     </li><hr>
                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-list">Điểm</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="themql.php">Thêm điểm</a>
                         <a class="dropdown-item" href="suaql.php">Sửa điểm</a> 
                         <a class="dropdown-item" href="suaql.php">Xóa điểm</a>                                        
                                       
                        </div></li><hr>
               </ul>
                                   
             </div>
                    <div class="content-right">
                        <br> <br><br>
                        Lớp <select name="lop">
                            <option value="M1">Công nghệ web</option>
                            <option value="M2">Phân tích yêu cầu hệ thống thông tin</option>
                            <option value="M3">Lý thuyết tính toán</option>
                            <option value="M4">Phân tích yêu cầu phần mềm</option>
                        </select>
                        <input type="button" value="Hiển thị lớp học phần" name="hienthi">
                      </div>
                      <?php 
                if(isset($_POST['hienthi']))
                {
                    $lop   = $_POST['lop'];

                        if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM sinhvien WHERE mamon='$lop'")) > 0)
                        {

                            ?>
                            <br>
                            <br>
                                <table border = '1' width='50%'>
                                <tr>
                                    <th>Mã sinh viên</th>
                                    <th>Tên sinh viên</th> 
                                    <th>Ngày sinh</th>
                                    <th>Khóa</th>
                                </tr>
                              
                            <?php
                               $sql = mysqli_query($conn,"SELECT masv,tensv,ngaysinh,makhoahoc FROM sinhvien WHERE mamon='$lop' ");
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
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>