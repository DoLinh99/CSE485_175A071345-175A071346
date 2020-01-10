<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN-ĐHTL</title>
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
                     Admin
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
                           <i class="fa fa-list"> Sinh viên</i> 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <a class="dropdown-item" href="themsv.php">Thêm mới</a>
                             <a class="dropdown-item" href="suasv.php">Cập nhật</a>   
                  
                        </div>
                     </li><hr>
                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-list"> Giảng viên</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="#">Thêm mới</a>
                         <a class="dropdown-item" href="#">Cập nhật</a>                                        
                       </div></li><hr>

                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-edit"> Ngành học</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="#">Thêm mới</a>
                         <a class="dropdown-item" href="#">Cập nhật</a>                                        
                       </div></li><hr>

                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-edit"> Môn học</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="#">Thêm mới</a>
                         <a class="dropdown-item" href="#">Cập nhật</a>                                        
                       </div></li><hr>

                       <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-edit"> Lớp học</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="#">Thêm mới</a>
                         <a class="dropdown-item" href="#">Cập nhật</a>                                        
                       </div></li><hr>

                       <!-- <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-edit"> Điểm</i> 
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item  " href="#">Thêm điểm</a>
                         <a class="dropdown-item" href="#">chỉnh sửa điểm</a>                                        
                       </div></li><hr>
 -->

                       <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users"> Cấu hình User</i> 
                         </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="quanlyuser.php">Quản lý Admin</a>
                         <a class="dropdown-item" href="danhsachquyen.php">Quản lý giảng viên </a>
                         <a class="dropdown-item" href="thongtin.php">Quản lý sinh viên</a>
                       </div></li>
               </ul>
                                   
             </div>
                    <div class="content-right">

                    <div class="content-right">
                    <div class="title-module">THÊM MỚI SINH VIÊN</div>
					<form name="edit_course">
						<table class="table-form-edit" align="center" bgcolor="#FFFFFF">
							
							<tr>
								<td width="180">Mã sinh viên</td>
								<td width="300"><input type="text" value="" name="makh" size="40"></td>
							</tr><br><br>
							<tr>
								<td>Tên sinh viên</td>
								<td><input type="text" value="" size="40"></td>
							</tr>
							<tr>
								<td>Ngày sinh</td>
								<td><input type="text" value="" size="40"></td>
							</tr>
							<tr>
								<td>Địa chỉ</td>
								<td><input type="text"  value="" size="40"></td>
							</tr>	
							<tr>
								<td>Email</td>
								<td><input type="text"  value="" size="40"></td>
							</tr>							
							<tr>
								<td>Mã khóa học</td>
								<td><input type="text"  value="" size="40"></td>
							</tr>
							<tr>
								<td>MÃ tài khoản</td>
								<td><input type="text"  value="" size="40"></td>
							</tr>
							<tr>
								<td>Mã khoa</td>
								<td><input type="text"  value="" size="40"></td>
							</tr>
							<tr>
								<td align="center" ></td>
								<td><a href="dslophoc.html"><input type="submit" value="Lưu lại" name="submit"></a><input type="reset" value="Reset"></td>
							</tr>
						</table>
					</form>
<!-- END: CONTENT -->                    

                      </div>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>