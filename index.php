<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Caslon+Condensed:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            background-color: #70869c;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="Logo" width="40" height="40">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav text-libre ms-auto">
                <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>


    <!-- header -->
     <header style="background: url('img/banner.jpg') center/cover no-repeat; min-height: 80vh; color:white;">
        <header class="masthead">
            <div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Lukisan</h1>
                    <p class="lead fw-normal text-dark-50 mb-0">Belajar Melukis Bersama Kami</p>
                    <a href="#kursus">
                        <button class="btn btn-primary mt-3">Lihat Kursus</button>
                    </a>
                </div>
            </div>
        </header>
        </header>

    <!-- profile -->
    <section id="profile" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Profile</h2>
            <div class="row">
                <div class="text-center">
                    <p>Selamat datang di website kami! Kami adalah komunitas seni yang berdedikasi untuk mengembangkan bakat melukis. Di sini, Anda dapat belajar berbagai teknik melukis, berpartisipasi dalam kursus, dan menampilkan karya seni Anda di galeri kami. Bergabunglah dengan kami untuk mengeksplorasi kreativitas Anda dan menjadi bagian dari komunitas seni yang inspiratif.</p>
                    <h4 class="text-center">Visi</h4>
                    <p>Menjadi pusat pembelajaran seni lukis yang inovatif dan inklusif, yang menginspirasi individu untuk mengekspresikan kreativitas mereka melalui seni.</p>
                    <h4 class="text-center">Misi</h4>
                    <p>Menyediakan platform pembelajaran yang komprehensif, mendukung pengembangan bakat seni, dan mempromosikan apresiasi terhadap seni lukis di masyarakat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- kursus -->
    <section id="kursus" class="py-5 bg-light">
        <div class="container"> <!-- container membungkus semua judul & isi -->
            <div class="text-center mb-4">
                <h2>Kursus</h2>
                <p>Berikut adalah beberapa kursus yang kami tawarkan:</p>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Dasar Melukis</h5>
                        <p class="card-text">Pelajari teknik dasar melukis untuk pemula.</p>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalWA">Daftar</button>  
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Lanjutan</h5>
                        <p class="card-text">Tingkatkan keterampilan melukis Anda dengan teknik lanjutan.</p>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalWA">Daftar</button>  
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Digital Art</h5>
                        <p class="card-text">Pelajari seni digital dan teknik melukis menggunakan perangkat lunak.</p>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalWA">Daftar</button>  
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Cat Air</h5>
                        <p class="card-text">Pelajari teknik melukis dengan cat air yang indah.</p>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalWA">Daftar</button>  
                    </div>
                </div>
                </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Cat Minyak</h5>
                        <p class="card-text">Pelajari teknik melukis dengan cat minyak yang klasik.</p>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalWA">Daftar</button>  
                    </div>
                </div>
                </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Sketsa</h5>
                        <p class="card-text">Pelajari teknik sketsa untuk meningkatkan kemampuan menggambar.</p>
                        <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#modalWA">Daftar</button>  
                    </div>
                </div>
        </div>
    </section>

    <!-- galeri -->
    <section id="galeri" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Galeri</h2>
                <p>Lihat beberapa karya seni dari komunitas kami</p>
            </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/digital.jpeg" class="card-img-top" alt="Galeri 1">
                    <div class="card-body">
                        <h5 class="card-title">Karya Seni 1</h5>
                        <p class="card-text">Deskripsi singkat tentang karya seni ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/acrylic.jpeg" class="card-img-top" alt="Galeri 2">
                    <div class="card-body">
                        <h5 class="card-title">Karya Seni 2</h5>
                        <p class="card-text">Deskripsi singkat tentang karya seni ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/air.jpeg" class="card-img-top" alt="Galeri 3">
                    <div class="card-body">
                        <h5 class="card-title">Karya Seni 3</h5>
                        <p class="card-text">Deskripsi singkat tentang karya seni ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/arsir.jpeg" class="card-img-top" alt="Galeri 4">
                    <div class="card-body">
                        <h5 class="card-title">Karya Seni 4</h5>
                        <p class="card-text">Deskripsi singkat tentang karya seni ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/pameran.jpeg" class="card-img-top" alt="Galeri 5">
                    <div class="card-body">
                        <h5 class="card-title">Karya Seni 5</h5>
                        <p class="card-text">Deskripsi singkat tentang karya seni ini.</p>
                    </div>
                </div>
</div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/kegiatan.jpeg" class="card-img-top" alt="Galeri 6">
                    <div class="card-body">
                        <h5 class="card-title">Karya Seni 6</h5>
                        <p class="card-text">Deskripsi singkat tentang karya seni ini.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- testimoni -->
    <section id="testimoni" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Testimoni</h2>
                <p>Dengar apa kata mereka tentang kursus kami</p>
            </div>
        </div>

        <!-- form testimoni -->
         <div class="row justify-content-center mb-5">
            <div class="col mb-6">
                <form method="POST" action="proses.php">
                    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
                    <textarea name="pesan" class="form-control mb-2" placeholder="Pesan" required></textarea>
                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>

        <!-- menampilkan data testimoni -->
         <div class="row">
            <?php
            $tampil = mysqli_query($koneksi, "SELECT * FROM testimoni BY id DESC");

            while ($data = mysqli_fetch_array($tampil)); {
                ?>
                
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body texxt-center">
                             <p class="card-text fst-italic">"<?= $data=['komen']; ?>"</p>
                             <h6 class="fw-bold mb-0"><?= $data=['nama']; ?></h6>
                </div>
                </div>
                </div>
                <?php
            }   
            ?>
            <div>
</section>      

<!-- modalWA -->
 <div class="modal fade" id="modalWA" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <h5 class="fw-bold">Butuh Informasi?</h5>
            <p class="text-muted">Yuk, Tanyakn jadwal, harga, dn pilihan kelas kepada kami!</p>
            <a href="https://wa.me/6285707736562" target="_blank" class="btn btn-success fw-bold py-2 mt-2">
                chat sekarang
            </a>
</div>
</div>
<div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
