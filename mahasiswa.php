<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container py-5">

    <div class="row g-4">

        <!-- ================= FORM ================= -->

        <div class="col-lg-8">

            <div class="card">

                <div class="card-header">

                    <h2>
                        <i class="bi bi-person-plus-fill"></i>
                        Form Antrian Mahasiswa
                    </h2>

                </div>

                <div class="card-body">

                    <form action="simpan.php" method="POST">

                        <div class="mb-3">

                            <label class="form-label">
                                Nama Mahasiswa
                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control"
                                placeholder="Masukkan Nama"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Keperluan
                            </label>

                            <input
                                type="text"
                                name="keperluan"
                                class="form-control"
                                placeholder="Contoh : Konsultasi Skripsi"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Prioritas
                            </label>

                            <select
                                name="priority"
                                class="form-select">

                                <option value="1">
                                    Prioritas Tinggi
                                </option>

                                <option value="2" selected>
                                    Prioritas Normal
                                </option>

                            </select>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-success">

                            <i class="bi bi-ticket-fill"></i>

                            Ambil Nomor Antrian

                        </button>

                        <a
                            href="index.php"
                            class="btn btn-secondary">

                            <i class="bi bi-arrow-left"></i>

                            Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

        <!-- ================= SIDEBAR ================= -->

        <div class="col-lg-4">

            <div class="info-card">

                <i class="bi bi-calendar-event-fill"></i>

                <h5>Hari Ini</h5>

                <h2><?= date("d-m-Y"); ?></h2>

            </div>

            <div class="info-card">

                <i class="bi bi-clock-fill"></i>

                <h5>Jam</h5>

                <h2 id="jam"></h2>

            </div>

            <div class="info-card">

                <i class="bi bi-megaphone-fill"></i>

                <h5>Status</h5>

                <p>Sistem Antrian Aktif</p>

            </div>

            <div class="info-card">

                <img
                    src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                    width="120">

                <h5 class="mt-3">

                    Silakan isi data dengan benar.

                </h5>

            </div>

        </div>

    </div>

</div>

<script>

function updateJam(){

    let sekarang = new Date();

    document.getElementById("jam").innerHTML =
    sekarang.toLocaleTimeString('id-ID');

}

setInterval(updateJam,1000);

updateJam();

</script>

</body>
</html>