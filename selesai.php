<?php

include "config/koneksi.php";

// Mengubah status yang sedang dipanggil menjadi selesai
mysqli_query($conn,"
UPDATE antrian
SET status='selesai'
WHERE status='dipanggil'
");

header("Location: dosen.php");

?>