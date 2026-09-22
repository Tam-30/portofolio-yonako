<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Mario | Full-Stack Web Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .hero { background-color: #2b2b2b; color: white; padding: 80px 0; text-align: center; }
        .hero h1 { font-weight: bold; letter-spacing: 1px; }
        .card { border: none; box-shadow: 0 4px 10px rgba(0,0,0,0.08); transition: all 0.3s ease; }
        .card:hover { transform: translateY(-8px); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    </style>
</head>
<body>

<div class="hero">
    <div class="container">
        <h1>Halo, Saya Mario</h1>
        <p class="lead mt-3">Full-Stack Web Developer & Designer di Yonako Design & Printing</p>
    </div>
</div>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Karya Terbaru</h2>
        <a href="admin.php" class="btn btn-outline-dark">Kelola Portofolio</a>
    </div>
    
    <div class="row">
        <?php
        $query = "SELECT * FROM tbl_proyek ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 rounded-4 overflow-hidden">
                <img src="<?= htmlspecialchars($row['gambar']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['judul']) ?>" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold"><?= htmlspecialchars($row['judul']) ?></h5>
                    <p class="card-text text-muted"><?= htmlspecialchars($row['deskripsi']) ?></p>
                </div>
                <div class="card-footer bg-white border-0 p-4 pt-0">
                    <a href="<?= htmlspecialchars($row['link']) ?>" class="btn btn-dark w-100 rounded-3" target="_blank">Lihat Detail</a>
                </div>
            </div>
        </div>
        <?php 
            }
        } else {
            echo "<div class='col-12'><div class='alert alert-secondary'>Belum ada proyek yang ditambahkan.</div></div>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>