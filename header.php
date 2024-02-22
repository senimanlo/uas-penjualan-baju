<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>jumbotron dengan bootstrap</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<body>

   <nav class="navbar navbar-inverse">
      <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-tonggle collapsed" data-tonggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Tonggle Nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
       </button> 
       <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-shopping-cart"></span> WEBSITE PENJUALAN BAJU DI TOKO SENIGULO </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         
      <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Beranda <span class="sr-only">(current)</span></a></li>
        <li><a href="tentang.php"> <span class="glyphicon glyphicon-info-sign"></span> Tentang</a> </li>
        
      <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart"></span> Produk <span class="caret"></span>
         </a>
            <ul class="dropdown-menu">
               <li><a href="gaun.php">Gaun</a></li>
               <li><a href="kemeja.php">Kemeja</a></li>
               <li><a href="Sweater.php">Sweater</a></li>
               <li><a href="kaos.php">Kaos</a></li>
            </ul>
      </li>

        <li>
         <a href="nama_barang.php"> <span class="glyphicon glyphicon-tags"></span> Nama Barang</a></li>
        <li>
         <a href="contact.php"> <span class="glyphicon glyphicon-envelope"></span> Kontak</a></li>
        <li>
         <a href="galeri.php"> <span class="glyphicon glyphicon-list"></span> Galeri</a></li>
         <li>
            <a href="tampil-barang.php"> <span class="glyphicon glyphicon-list-alt"></span> Data Barang</a></li>
          <li>
            <a href="login.php"> <span class="glyphicon glyphicon-lock"></span> Login</a></li>
             
         </li>
         </ul>
      </div>
   </div>
</nav>
