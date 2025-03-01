<?php
include("koneksi.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "UPDATE data set nama='$nama', umur='$umur', jk='$jk', alamat='$alamat' where id='$id'");
    
    if($query){
        header("location:read.php");
        exit;
    }
    else{
        echo "Gagal Mengubah Data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembaruan Data</title>
</head>
<body>
    <center>
        <h2>Ubah Data</h2>
    </center>
    <?php
    include("koneksi.php");
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM data where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <form action="" method="post">
        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
        <input type="text" name="umur" value="<?php echo $d['umur']; ?>">
        <input type="text" name="jk" value="<?php echo $d['jk']; ?>">
        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <input type="submit" value="Simpan">
    </form>
    <?php
    }
    ?>
</body>
</html>