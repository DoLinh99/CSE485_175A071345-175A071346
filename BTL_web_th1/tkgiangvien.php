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
          <div class="title col-md-12"> 
           <a href=""><img src="img/truongdaihocthuyloi.jpg" alt="" style="width:70px; height:50px;padding: 3px"></a>
            <a class="navbar-brand" href="index.php" style=" margin-left: 40%;"><b>ĐẠI HỌC THỦY LỢI</b> </a></div>
        
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
                         <a class="dropdown-item" href="tkquanly.php">Quản lý tài khoản người quản lý</a>
                         <a class="dropdown-item" href="tkgiangvien.php">Quản lý tài khoản giảng viên</a>
                       </div></li>
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
               <div class="content-right">
               <br>
               <br>
               <br>

            <h3 style="text-align:center">Danh sách tài khoản giảng viên</h3>
            <br><br>
            <div class="form" style="  margin-left: 20%; ">
  
                <?php 
                
                        if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM taikhoan where level='0'")) > 0)                  
                        {   
                            ?>
                            <br>
                            <br>
                                <table  border = '1' width='75%'>
                                <tr>
                                    <th>Mã tài khoản</th>
                                    <th>Tên tài khoản</th> 
                                    <th>Mật khẩu</th>
                                    <th>Quyền</th>
                                    <th>Sửa</th>
                                </tr> 
                            <?php
                             $sql = mysqli_query($conn,"SELECT * FROM taikhoan where level='0'");
                             while($row = mysqli_fetch_assoc($sql))
                             {
                                $sql1 = mysqli_query($conn,"SELECT * FROM taikhoan where level ='0'");
                                $row1 = mysqli_fetch_assoc($sql1);
                            ?>
                                <tr>
                            
                                    <td><?php echo $row['matk']; ?> </td>
                                    <td><?php echo $row['tentk']; ?></td>
                                    <td><?php echo $row['matkhau']; ?></td>
                                    <td><?php echo $row['level']; ?></td>
                                    <td><a style="color:blue" href="suatkgiangvien.php?matk=<?php echo $row['matk'];  ?>">Sửa</a></td>
                                </tr> 
                               <?php 
                                       } ?>
                                </table>

                <?php
                }   
            
                ?>
                <br> <br>
                <a href="formregister.php"><input type="button" value="Thêm tài khoản" style="margin-left: 30%;"></a>
                <a href="xoatkgiangvien.php"><input type="button" value="Xóa tài khoản"></a>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>