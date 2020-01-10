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
    
    <link rel="stylesheet" href="css/index2.css">
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
                                                 
                       <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users"> Quản lý tài khoản</i> 
                         </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="#">Quản lý tài khoản Admin</a>
                         <a class="dropdown-item" href="tkquanly.php">Quản lý tài khoản người quản lý</a>
                         <a class="dropdown-item" href="">Quản lý tài khoản giảng viên</a>
                       </div></li>
               </ul> 
               </div>

               <div class="content-right">
               <br>
               <br>
               <br>
               <form method="post">
               <?php
              
                $sql = mysqli_query($conn,"SELECT * FROM sinhvien where masv = '$_GET[masv]'");
               
                $row = mysqli_fetch_assoc($sql);
                $ma = $row['masv'];
                ?>
                     <input type="hidden" name="masv" value="<?php echo $ma; ?>">
                    Mã sinh viên: 
                    <input type="text" name="masv" value="<?php echo $row['masv']; ?>">
                    <br>
                    Tên sinh viên: 
                    <input type="text" name="tensv" value="<?php echo $row['tensv']; ?>">
                    <br>
                    Chứng minh thư: 
                    <input type="text" name="cmt" value="<?php echo $row['cmt']; ?>">
                    <br>
                    Ngày sinh: 
                    <input type="text" name="ngaysinh" value="<?php echo $row['ngaysinh']; ?>">
                    <br>
                    Địa chỉ: 
                    <input type="text" name="diachi" value="<?php echo $row['diachi']; ?>">
                    <br>
                    Email: 
                    <input type="text" name="email" value="<?php echo $row['email']; ?>">
                    <br>
                    Mã khóa học: 
                    <input type="text" name="makhoahoc" value="<?php echo $row['makhoahoc']; ?>">
                    <br>
                    Mã khoa: 
                    <input type="text" name="makhoa" value="<?php echo $row['makhoa']; ?>">

                    <br>
                    <input type="submit" value = "Sửa" name = "update" >
                    
                </form>
          <?php
          if(!isset($_POST['update']))
          {die ('');}
          else {
              $masv = $_POST['tentk'];
              $quyen = $_POST['quyen'];
              $ma = $_POST['matk'];

              $sql = mysqli_query($conn,"UPDATE taikhoan set tentk='$tentk',level='$quyen' where matk = '$ma'");
              if($sql){
                 header('location: tkadmin.php');
               
                 
              }
              else{
                  echo"Thất bại";
              }
          }
          ?>
      
                
    
           
    
 
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
        </body>
        </html>
