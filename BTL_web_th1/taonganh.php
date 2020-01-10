<?php
    include('connect.php');

?>
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
                    <div class="content-right">
                    <div class="title-module">THÊM NGÀNH</div>
					<form name="edit_course" method="post">
						<table class="table-form-edit" align="center" bgcolor="#FFFFFF">
							
							<tr>
								<td width="180">Mã ngành </td>
								<td width="300"><input type="text" value="" name="manganh" size="40"></td>
							</tr><br><br>
							<tr>
								<td>Tên ngành </td>
								<td><input type="text" value="" size="40" name = "tennganh"></td>
              </tr>
              <tr>
								<td>Mã khoa</td>
                                <td><select name="mkh">
                <?php
                        $sql1 = mysqli_query($conn,"SELECT * from khoa");  
                        while($row1 = mysqli_fetch_assoc($sql1))
                        {
                         ?>
                  
                            <option value='<?php echo $row1['makhoa']; ?>'><?php echo $row1['makhoa']; ?></option>
                            
                        
                        <?php } ?>
                </select></td>
							
							<tr>
								<td align="center" ></td>
								<td><a href="#"><input type="submit" value="Lưu lại" name="dangky"></a>
                                </td>
                                
							</tr>
						</table>
					</form>                  
            </div>

            <?php 
            
                      // Nếu không phải là sự kiện đăng ký thì không xử lý
                      if (!isset($_POST['dangky'])){
                        die('');
                    }
                    else{
                    //Nhúng file kết nối với database
                    include('connect.php');
                  
                          
                    //Lấy dữ liệu từ file dangky.php
                    $manganh = $_POST['manganh'];
                    $tennganh = $_POST['tennganh'];
                    $makhoa = 'CNTT';
                          
                    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
                    if (!$manganh || !$tennganh)
                    {
                        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";

                    }
                          
                    else {
                         //Lưu thông tin thành viên vào bảng
                    $add = mysqli_query($conn,"INSERT INTO nganh
                    VALUE ('$manganh','$tennganh','$makhoa')");


                                          
                    //Thông báo quá trình lưu
                    if ($add)
                        echo "<p style='text-align:center'>Đăng kí thành công.</p>";
                    else
                        echo "<p style='text-align:center'>Có lỗi xảy ra trong quá trình đăng ký.,</p>";
                    }

            
                
                   

                    

                    }
            ?>
                    
                     
                 
            
                
       
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
</body>
</html>