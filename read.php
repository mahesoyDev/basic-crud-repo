<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <center>
        <h2>Daftar User</h2>
    </center>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include("koneksi.php");
        $no = 1;
        $data = mysqli_query($conn,"SELECT * FROM data");
        while ($d = mysqli_fetch_array($data)) { 
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['umur']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['id']; ?>">Ubah</a>
                    <a href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>