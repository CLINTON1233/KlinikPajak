<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudut Pajak</title>
    <link rel="stylesheet" href="{{ asset('style/cssstyle.css') }}">

    <style>
        /* CSS untuk mengatur tata letak gambar */
        .image-container {
            display: flex;
            /* Menggunakan flexbox */
            flex-direction: column;
            /* Mengatur tata letak menjadi kolom */
            align-items: center;
            /* Mengatur gambar berada di tengah */
        }

        .image-container img {
            max-width: 100%;
            /* Maksimum lebar gambar adalah lebar parent */
            margin: 10px 0;
            /* Jarak antara gambar */
        }

        /* Gaya baru untuk paragraf */
        p {
            font-family: Arial, sans-serif;
            /* Menggunakan font Arial */
            font-size: 20px;
            /* Ukuran font */
            line-height: 1.5;
            /* Jarak antar baris */
            color: #333;
            /* Warna teks */
            text-align: justify;
            /* Teks rata kanan dan kiri */
            margin-bottom: 20px;
            /* Jarak antara paragraf */
        }
    </style>
</head>

<body>
    <center>
        <h1>Selamat Datang di Website Sudut Pajak</h1>
    </center>
    <p>Kami "sudut pajak" merupakan layanan pajak berbasis website.
        Saat ini sudut pajak memberikan layanan perpajakan online secara gratis baik konsultasi maupun secara teori dengan tujuan untuk memberikan solusi permasalahan perpajakan oleh wajib pajak yang terdaftar dan yang belum terdaftar.
        Fokus utama sudut pajak saat ini adalah untuk mendampingi pelaku UMKM dalam memahami peraturan perpajakan.
    </p>

    <div class="image-container mt-2">
        <img src="{{ asset('img/BeritaPajak.jpg') }}" alt="BeritaPajak">
        <img src="{{ asset('img/GambarPajak.png') }}" alt="GambarPajak">
    </div>
</body>

</html>