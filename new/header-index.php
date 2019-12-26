<header>
	<div class="container-fluid">
		<div class="row">
			<div class="head-top">
				<div class="head-top-left col-md-9"><h1>HỆ THÔNG ĐĂNG KÝ HỌC - ĐẠI HỌC THỦY LỢI</h1></div>
				<div class="head-top-right col-md-3">
				<div style='color:blue; padding:5px 0px;'> Khách </div>

				</div>
			</div>
		</div>
	</div>
			
			<div class="main-top">
				<div class="left-top">
				</div>
				<div class="right-top">
					<div id="menu">
						<ul>
							
							<?php if(isset($_SESSION['Username'])){
							echo '<li><a href="index.php" style="border-left: none">Trang chủ</a></li>';
							echo '<li><a href="">Hỏi đáp</a></li>';
							echo '<li><a href="">Trợ giúp</a></li>';
							echo '<li><a href="logout.php">Thoát</a></li>';
							} 
							else{
							echo '<li><a href="index.php" style="border-left: none">Trang chủ</a></li>';
							echo '<li><a href="dangnhap.php">Đăng nhập</a></li>';
							echo '<li><a href="">Hỏi đáp</a></li>';
							echo '<li><a href="">Trợ giúp</a></li>';
							}?>
							
							<li style="line-height: 30px;">
								<select name="">
									<option value="">VN</option>
								</select>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</header>