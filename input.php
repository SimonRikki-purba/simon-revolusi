<?php
include 'database.php';
$db = new database();
?>
<h3> Tambah Data Mahasiswa</h3>

<form action = "proses.php?aksi=tambah" method="post">

<table>
    <tr>
        <td>Nama</td>
        <td><input type = "text" name="nama"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type = "text" name="email"></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td><input type = "text" name="prodi"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type = "submit" value ="simpan"></td>
    </tr>
</table>
</form>