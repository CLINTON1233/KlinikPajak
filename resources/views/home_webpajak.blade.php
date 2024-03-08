<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card {
            width: calc(25% - 20px);
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .card p {
            margin-bottom: 0;
            color: #666;
        }

        .card img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Selamat Datang di Halaman Utama</h1>
    </div>

    <div class="container">
        <div class="main-content">
            <div class="card">
                <img src="product1.jpg" alt="Product 1">
                <h2>Produk 1</h2>
                <p>Harga: $50</p>
                <p>Deskripsi singkat tentang produk ini. Deskripsi singkat tentang produk ini.</p>
            </div>
            <div class="card">
                <img src="product2.jpg" alt="Product 2">
                <h2>Produk 2</h2>
                <p>Harga: $60</p>
                <p>Deskripsi singkat tentang produk ini. Deskripsi singkat tentang produk ini.</p>
            </div>
            <div class="card">
                <img src="product3.jpg" alt="Product 3">
                <h2>Produk 3</h2>
                <p>Harga: $70</p>
                <p>Deskripsi singkat tentang produk ini. Deskripsi singkat tentang produk ini.</p>
            </div>
            <div class="card">
                <img src="product4.jpg" alt="Product 4">
                <h2>Produk 4</h2>
                <p>Harga: $80</p>
                <p>Deskripsi singkat tentang produk ini. Deskripsi singkat tentang produk ini.</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Hak Cipta © 2024 Halaman Utama. Semua Hak Dilindungi.</p>
    </div>

</body>

</html>