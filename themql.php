<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN-ĐHTL</title>
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
                         <a class="dropdown-item  " href="themql.php">Thêm mới</a>
                         <a class="dropdown-item" href="suaql.php">Cập nhật</a>                                        
                       </div></li><hr>

                       <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users">Quản lý tài khoản</i> 
                         </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="quanlyuser.php">Quản lý Admin</a>
                         <a class="dropdown-item" href="danhsachquyen.php">Quản lý giảng viên </a>
                       </div></li>
               </ul>
                                   
             </div>
                    <div class="content-right">

                    <div class="content-right">
                    <div class="title-module">THÊM MỚI</div>
					<form name="edit_course">
						<table class="table-form-edit" align="center" bgcolor="#FFFFFF">
							
							<tr>
								<td width="180">Tên ngành</td>
								<td width="300"><input type="text" value="" name="makh" size="40"></td>
							</tr><br><br>
							<tr>
								<td>Tên lớp</td>
								<td><input type="text" value="" size="40"></td>
							</tr><br><br>
							<tr>
								<td>Năm học</td>
                                <td><select name="namhoc">
                                        <option  value="a">2019-2020</option>
                                        <option  value="b">2018-2019</option>
                                        <option  value="c">2017-2018</option>      
                                        <option  value="d">2016-2017</option>          
                                    </select>
                                </td>
							</tr>
							<tr>
								<td>Học kỳ</td>
                                <td><select name="hocky">
                                        <option  value="a">Kỳ I</option>
                                        <option  value="b">Kỳ II</option>
                                    </select>
                                </td>
							</tr>
                            <tr>
                                <td>Giai đoạn</td>
                                <td>
                                    <select name="giaidoan">
                                    <option value="">GĐ 1 KỲ I</option>
                                    <option value="">GĐ 2 KỲ II</option>
                                    <option value="">GĐ 1 KỲ I</option>
                                    <option value="">GĐ 2 KỲ II</option>


                            </select>
                            </td>
							</tr>


							<tr>
								<td align="center" ></td>
								<td><a href=""><input type="submit" value="Lưu lại" name="submit"></a><input type="reset" value="Reset"></td>
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