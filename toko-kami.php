<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>TOKO KAMI MENJUAL BERBAGAI MACAM PRODUK BERKUALITAS DENGAN BERBAGAI BENTUK BARANG</title>
</head>
<body>
   <header>
         <h1>Toko Kami</h1>
         <nav>
              <ul>
                  <li><a href="#">Beranda</a></li>
                  <li><a href="#produk">produk</a></li>
                  <li><a href="#cara-pesan">cara pesan</a></li>
                  <li><a href="#pembayaran">pembayaran</a></li>
                  <li><a href="#lokasi">lokasi</a></li>
              </ul>
            </nav>
   </header>
   <main>
          <section id="beranda">
                   <h2>selamat datang ditoko kami...</h2>
                   <p>kami menjual berbagai macam produk berkualitas dengan harga yang terjangkau.Anda bisa menemukan produk-produk terbaru kami dihalaman produk^^^^</p>

          </section>
          <section id="produk">
                   <h2>produk</h2>
                   <div class="produk">
                          <img src="sepatu.jpg" alt="sepatu sneakers">
                          <h3>sepatu sneakers</h3>
                          <p>Rp 100.000</p>
                          <a href="#form-pesan">pesan sekarang</a>
                       </div>
                       <div class="produk">
                          <img src="jamtangan.jpg" alt="jam tangan">
                          <h3>jam tangan</h3>
                          <p>Rp 200.000</p>
                          <a href="#form-pesan">pesan sekarang</a>
                       </div>
                       <div class="produk">
                          <img src="wanita.jpg" alt="baju wanita">
                          <h3>baju wanita</h3>
                          <p>Rp 300.000</p>
                          <a href="#form-pesan">pesan sekarang</a>
                       </div>
          </section>
          <section id="form-pesan">
                   <h2>Form pemesanan</h2>
                   <form action="/pesan" method="post">
                          <label for="nama">Nama
         </section>
</body>
</html>
   