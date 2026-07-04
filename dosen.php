<?php
include "config/koneksi.php";

$dipanggil = mysqli_query($conn,"SELECT * FROM antrian WHERE status='dipanggil' LIMIT 1");
$data = mysqli_fetch_assoc($dipanggil);

$menunggu = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM antrian WHERE status='menunggu'"));
$priority = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM antrian WHERE status='menunggu' AND priority=1"));

$antrian = mysqli_query($conn,"
SELECT *
FROM antrian
WHERE status!='selesai'
ORDER BY priority ASC,id ASC
");
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Dosen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container py-5">

<h2 class="text-white text-center mb-4">
<i class="bi bi-mortarboard-fill"></i>
Dashboard Dosen
</h2>

<div class="row mb-4">

<div class="col-md-3">

<div class="stat-card bg-blue">

<h5>Sedang Dipanggil</h5>

<div class="big-number">

<?= $data ? $data['id'] : "-" ?>

</div>

</div>

</div>

<div class="col-md-3">

<div class="stat-card bg-green">

<h5>Total Menunggu</h5>

<div class="big-number">

<?= $menunggu ?>

</div>

</div>

</div>

<div class="col-md-3">

<div class="stat-card bg-orange">

<h5>Priority Tinggi</h5>

<div class="big-number">

<?= $priority ?>

</div>

</div>

</div>

<div class="col-md-3">

<div class="stat-card bg-red">

<h5>Jam</h5>

<div class="big-number" id="jam"></div>

</div>

</div>

</div>

<div class="card">

<div class="card-header">

<h4>

<i class="bi bi-list-check"></i>

Data Antrian

</h4>

</div>

<div class="card-body">

<div class="mb-3">

<a href="panggil.php" class="btn btn-primary">
<i class="bi bi-megaphone-fill"></i>
Panggil Berikutnya
</a>

<a href="selesai.php" class="btn btn-success">
<i class="bi bi-check-circle-fill"></i>
Selesai
</a>

<a href="reset.php" class="btn btn-danger">
<i class="bi bi-arrow-clockwise"></i>
Reset
</a>

<a href="index.php" class="btn btn-secondary">
<i class="bi bi-house-fill"></i>
Home
</a>

</div>

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>No</th>

<th>Nama</th>

<th>Keperluan</th>

<th>Priority</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<?php

$no=1;

while($r=mysqli_fetch_assoc($antrian)){

?>

<tr>

<td><?= $no++ ?></td>

<td><?= $r['nama'] ?></td>

<td><?= $r['keperluan'] ?></td>

<td>

<?php

if($r['priority']==1){

echo "<span class='badge bg-danger'>TINGGI</span>";

}else{

echo "<span class='badge bg-primary'>NORMAL</span>";

}

?>

</td>

<td>

<?php

if($r['status']=="dipanggil"){

echo "<span class='badge bg-success'>DIPANGGIL</span>";

}else{

echo "<span class='badge bg-warning text-dark'>MENUNGGU</span>";

}

?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<script>

function jam(){

let d=new Date();

document.getElementById("jam").innerHTML=d.toLocaleTimeString('id-ID');

}

setInterval(jam,1000);

jam();

</script>

</body>

</html>