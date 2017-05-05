<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel = "stylesheet" type= "text/css" href = "<?php echo base_url('files/css/sidebar.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('files/css/bootstrap.css') ?>">
</head>
<body>
<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			<li role="presentation" class="active"><a href="<?php echo base_url('index.php/mahasiswa') ?>">Daftar Antrian</a></li>
			 <li role="presentation"><a href="<?php echo base_url('index.php/mahasiswa/view_mhs') ?>">Lihat Antrian</a></li>
			 <li role="presentation"><a href="<?php echo base_url('index.php/mahasiswa/search') ?>">Login Admin</a></li>
		</ul>
		<div id="content">
			<form name="formcari" method="post" action="search_exe.php">
				<table width="330" border="0" align="center" cellpadding="0">
				<tr bgcolor="orange">
				<td height="25" colspan="3">
				<strong> Cari Berdasarkan No.Hp </strong>
				</td>
				</tr>
				<tr> <td>  No Hp  : </td>
				<td> <input type="text" name="nohp"> </td>
				</tr>
				<td></td>
				<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" > </td>
				</table>
				</form>
		</div>
	</div>
</body>
</html>