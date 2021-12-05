<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into karyawan(Id,nik,nama,jabatan,cuti)
values(
'".$_POST['Id']."',
'".$_POST['nik']."',
'".$_POST['nama']."',
'".$_POST['jabatan']."',
'".$_POST['cuti']."')");

if($query_input){
header('location:tampilan.php');
}else{
}
}
?>
<h2> Silakan Mengisi Form Cuti </h2>
<form method="POST" action="">
<table class="table table-bordered" border="1">
    <tr>
		<td>Id</td>
		<td><input type="text" name="Id" class="form-control"></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td><input type="text" name="nik" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
    <tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan" class="form-control"></td>
	</tr>
    <tr>
		<td>Cuti</td>
		<td><input type="text" name="cuti" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
