<?php
include("koneksi.php");

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM data where id='$id'");
header("location:read.php");