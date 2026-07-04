<?php

include "config/koneksi.php";

$nama = $_POST['nama'];
$keperluan = $_POST['keperluan'];
$priority = $_POST['priority'];

mysqli_query($conn,
"INSERT INTO antrian
(nama, keperluan, priority)
VALUES
('$nama','$keperluan','$priority')");

header("Location: mahasiswa.php?status=sukses");

?>