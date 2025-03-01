<?php
include("koneksi.php");

if(isset($_POST['btn'])) {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $jk = $_POST["jk"];
    $alamat = $_POST["alamat"];

    $query = mysqli_query($conn,"INSERT INTO data(nama, umur, jk, alamat)VALUES('$nama', '$umur', '$jk', '$alamat')");
    header("location:read.php");
}
?>
<!-- SKRIP HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penambahan Data</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nama" id="nama" placeholder="Nama">
        <input type="text" name="umur" id="umur" placeholder="Umur">
        <input type="text" name="jk" id="jk" placeholder="Jenis Kelamin">
        <input type="text" name="alamat" id="alamat" placeholder="Alamat">
        <input type="submit" value="Simpan" name="btn">
    </form>
</body>
</html>