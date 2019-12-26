<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tra cứu điểm</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
      <!-- phần đầu -->
  <?php
    include"header-index.php";
  ?>
  <main>
  <div class="container-fluid">
            <div class="row" >
                <div class="col-md-6"  style="margin-top:25px">
                    <h4>TRA CỨU ĐIỂM</h4><br>
                    <span>Sinh viên:</span><input type="text"><br><br>
                    <span>Lớp: </span><input type="text"  style="margin-left: 30px;"><br><br>
                    <span>Môn học:</span>
                    <select>
                        <option value="mon1">Công nghệ web</option>
                        <option value="mon2">Lý thuyết tính toán</option>
                        <option value="mon3">Phân tích thiết kế hệ thống thông tin</option>
                        <option value="mon4">Hệ quản trị cơ sở dữ liệu</option>
                    </select>
                </div>
                <div class="col-md-6"  style="margin-top:25px">   
                    <span >Năm học: </span>          
                    <select>
                        <option value="op1">2019-2020</option>
                        <option value="op2">2018-2019</option>
                        <option value="op3">2017-2018</option>
                    </select><br><br>
                    <span>Học kỳ:</span>
                    <select  style="margin-left: 15px;">
                        <option value="hk1">I</option>
                        <option value="hk2">II</option>
                        </select><br><br>
                    <span>Giai đoạn:</span>
                    <select>
                        <option value="gd1">1</option>
                        <option value="gd2">2</option>
                    </select><br><br>
                    <button>Tra cứu điểm</button>
                </div>
            </div>
        </div>
  </main>
      <!-- phần cuối -->
      <?php
    include"footer-index.php";
  ?>