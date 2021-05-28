<?php
include 'database.php';
$db = new database();
?>
<h1> CRUD OOP PHP</h1>
<h2> WWW.MALASNGODING.COM</h2>
<h3> Data Mahasiswa</h3>

<a href="input.php">Input Data</a>
<table border="1">
<tr>
    <th>NO</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Prodi</th>
    <th>Opsi</th>
</tr>

<?php
$no = 1;
foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['email']; ?></td>
        <td><?php echo $x['prodi']; ?></td>
        <td>
            <a href = "edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a> -
            <a href = "proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
}
?>