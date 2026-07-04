<?php

include "config/koneksi.php";

// Ubah semua yang sedang dipanggil menjadi selesai
mysqli_query($conn,"
UPDATE antrian
SET status='selesai'
WHERE status='dipanggil'
");

// Ambil antrean berikutnya:
// Priority terkecil (1 lebih dulu), lalu ID terkecil (FIFO)
$data = mysqli_query($conn,"
SELECT *
FROM antrian
WHERE status='menunggu'
ORDER BY priority ASC, id ASC
LIMIT 1
");

if(mysqli_num_rows($data)>0){

$row = mysqli_fetch_assoc($data);

$id = $row['id'];

mysqli_query($conn,"
UPDATE antrian
SET status='dipanggil'
WHERE id='$id'
");

}

header("Location:dosen.php");

?>