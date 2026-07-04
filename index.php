<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistem Antrian Dosen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container py-5">

<div class="card">

<div class="card-body text-center">

<h1 class="display-4 text-primary fw-bold">

<i class="bi bi-person-workspace"></i>

Sistem Antrian Dosen

</h1>

<p class="text-muted">

Queue & Priority Queue Berbasis PHP & MySQL

</p>

<hr>

<div class="row mt-4">

<div class="col-md-6 mb-3">

<a href="mahasiswa.php" class="btn btn-success btn-lg w-100">

<i class="bi bi-person-plus-fill"></i>

Dashboard Mahasiswa

</a>

</div>

<div class="col-md-6 mb-3">

<a href="dosen.php" class="btn btn-danger btn-lg w-100">

<i class="bi bi-mortarboard-fill"></i>

Dashboard Dosen

</a>

</div>

</div>

<div class="mt-5">

<p class="text-secondary">

<i class="bi bi-calendar-event"></i>

<?= date("d F Y"); ?>

</p>

</div>

</div>

</div>

</div>

</body>

</html>