<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from karyawan");
?>
<h2> Data Cuti Terinput </h2>
<table class="table-bordered" border="4">
    <tr>
        <td>No</td>
        <td>Id</td>
        <td>NIK</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Cuti</td>
</tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['Id'];?></td>
        <td><?php echo $tampil['nik'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['jabatan'];?></td>
        <td><?php echo $tampil['cuti'];?></td>
</tr>

<?php }?>
