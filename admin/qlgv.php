<div class="banner">
	<center><img src="../giaodien/img/logo.png"></center>
	<body bgcolor="#CAFFFF">
<?php
define('ROOT', dirname(__FILE__) );
include "../includes/function.php";
session_start();
?>
<style type="text/css">
	#menu ul{
		margin-left:137px;

	}
	.menu{

	}
	#menu ul li{
		display:inline;

	}
	#menu ul a{
		text-decoration:none;
		width:195px;
		float:left;
		background:#336699;
		color:#FFFFFF;
		text-align:center;
		line-height:27px;
		font-weight:bold;
		border-left:1px solid #FFFFFF;
	}

	#menu ul a:hover{
		background:#000000;
	}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="menu" >
	<ul>
		<li><a href="diem/add_chon2.php">Nhập Điểm Lần Đầu</a></li>
		<li><a href="diem/capnhatdiem.php"> Cập Nhật Điểm</a></li>
		<li><a href="qlgv.php?mod=sv">Xem Điểm</a></li>
		<li><a href="repass1.php">Thay Đổi Mật Khẩu</a></li>
		<li><a href="logout.php">Đăng Xuất</a></li>

	</ul>
</div>
<br/>
	<div>
		<p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">CHÀO MỪNG BẠN ĐẾN TRANG QUẢN LÝ CỦA GIẢNG VIÊN</p>
	</div>
<div style="border: 1px solid #CDCDCD;background-color:#B1AFAF;width: 500px;margin-left: 425px;font-family: Tahoma;font-size:19px;color:#761c19">
	<p><u><strong>Hướng Dẫn :</strong></u></p>
	<li>Đối tượng sử dụng: Giảng viên trường đại học thủy lợi.</li>
	<li>Nhập điểm cho sinh viên, giảng viên bộ môn cần lưu lý:</li>
	<li >Nhập đúng theo Mẫu Của Nhà Trường</li>
	<li >Chọn đúng lớp dạy</li>
	<li >Chọn đúng môn học dạy</li>
	<li >Chọn đúng học kỳ đang dạy</li>
	<li >Chọn đúng cột điểm muốn nhập</li>
</div>
<div class="right">
	<?php include"mod_gv.php";?>
</div>

<table  border=0 cellpadding=5 cellspacing=0 align="center" width="983">
	<TR>
		<TD>	<tr>
		<td  colspan="2" bgcolor="#336699" align="center" style="color:white" >
			Copyright &copy; 2019 ĐẠI HỌC THỦY LỢI <br>
		</td>
	</tr>
	</td>
	</TR>
</table>
	</body>
