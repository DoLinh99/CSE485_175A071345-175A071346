<?php
    include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tài khoản quản lý</title>
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
                     Quản lý
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
                        <a class="nav-link " href="taonganh.php" >
                           <i class="fa fa-list"> Tạo ngành học</i> 
                        </a>
                     </li><hr>

                     <li class="nav-item dropdown">
                       <a class="nav-link " href="dsgiangvien.php" >
                         <i class="fa fa-list"> Nhập danh sách giảng viên</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="themql.php">Thêm mới</a>
                         <a class="dropdown-item" href="suaql.php">Cập nhật</a>                                        
                       </div></li><hr>

                       <li class="nav-item dropdown">
                        <a class="nav-link " href="#" >
                           <i class="fa fa-list"> Tạo lớp học phần</i> 
                        </a>
                     </li><hr>

               </ul>
                                   
             </div>                        
               <div class="content-right">
               <br>
               <br>
               <br>

            <h3 style="text-align:center">Danh sách giảng viên</h3>
            <br><br>
            <div class="form">
  
                <?php 
                
                        if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM giangvien")) > 0)                  
                        {   
                            ?>
                            <br>
                            <br>
                                <table border = '2' width='120%' style="text-align:center">
                                <tr>
                                    <th>Mã giáo viên</th>
                                    <th>Tên giáo viên</th> 
                                    <th>Ngày sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Mã khoa</th>
                                </tr> 
                            <?php
                             $sql = mysqli_query($conn,"SELECT * FROM giangvien");
                             while($row = mysqli_fetch_assoc($sql))
                             {
                                $sql1 = mysqli_query($conn,"SELECT * FROM giangvien");
                                $row1 = mysqli_fetch_assoc($sql1);
                            ?>
                                <tr>
                            
                                    <td><?php echo $row['magv']; ?> </td>
                                    <td><?php echo $row['tengv']; ?></td>
                                    <td><?php echo $row['ngaysinh']; ?></td>
                                    <td><?php echo $row['diachi']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['makhoa']; ?></td>
                                    <td><a href="suaql.php?magv=<?php echo $row['magv'];  ?>">Sửa</a></td>
                                </tr> 
                               <?php 
                                       } ?>
                                </table>

                <?php
                }   
            
                ?>
                <br> <br>
                <a href="themgv.php"><input type="button" value="Thêm giảng viên"></a>
                <!-- <a href="xoatkadmin.php"> <input type="button" value="Xóa tài khoản"></a> -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>