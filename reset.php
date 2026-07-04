<?php

include "config/koneksi.php";

// Menghapus semua data antrian
mysqli_query($conn, "TRUNCATE TABLE antrian");

header("Location: dosen.php");

?>