<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $gambar = mysqli_real_escape_string($conn, $_POST['gambar']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);

    $query = "INSERT INTO tbl_proyek (judul, deskripsi, gambar, link) VALUES ('$judul', '$deskripsi', '$gambar', '$link')";
    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Proyek berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan proyek.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm rounded-4 border-0">
                <div class="card-body p-5">
                    <h3 class="mb-4 fw-bold">Tambah Proyek Baru</h3>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label text-muted">Judul Proyek</label>
                            <input type="text" name="judul" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted">Deskripsi Singkat</label>
                            <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted">URL Gambar (Contoh: https://link-gambar.com/img.jpg)</label>
                            <input type="url" name="gambar" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted">Link Proyek / Demo</label>
                            <input type="text" name="link" class="form-control" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-dark btn-lg w-100 rounded-3 mb-2">Simpan ke Database</button>
                        <a href="index.php" class="btn btn-outline-secondary w-100 rounded-3">Batal & Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>