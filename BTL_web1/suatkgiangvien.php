<?php
    include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tài khoản admin</title>
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
                     Quản trị
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
                         <a class="dropdown-item" href="tkadmin.php">Quản lý tài khoản Admin</a>
                         <a class="dropdown-item" href="#">Quản lý tài khoản người quản lý</a>
                         <a class="dropdown-item" href="giangvien.php">Quản lý tài khoản giảng viên</a>
                       </div></li>
               </ul> 
               </div>
               <div class="content-right">
               <br>
               <br>
               <br>
               <form method="post">
               <?php
              
                $sql = mysqli_query($conn,"SELECT * FROM taikhoan where matk = '$_GET[matk]'");
               
                $row = mysqli_fetch_assoc($sql);
                $ma = $row['matk'];
                ?>
                     <input type="hidden" name="matk" value="<?php echo $ma; ?>">
                    Tên tài khoản: 
                    <input type="text" name="tentk" value="<?php echo $row['tentk']; ?>">
                    <br>
                    Mật khẩu: 
                    <input type="text" name="mk" value="<?php echo $row['matkhau']; ?>">

                    <br>
                    <input type="submit" value = "Sửa" name = "update" >
                    <input type="submit" value = "Xóa" name = "delete">
                    
                </form>
          <?php
          if(!isset($_POST['update']))
          {die ('');}
          else {
              $tentk = $_POST['tentk'];
              $mk = $_POST['mk'];
              $ma = $_POST['matk'];

              $sql = mysqli_query($conn,"UPDATE taikhoan set tentk='$tentk',matkhau='$mk' where matk = '$ma'");
              if($sql){
                 header('location: tkgiangvien.php');
               
                 
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