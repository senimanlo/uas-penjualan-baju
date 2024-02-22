<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG PENJUALAN BAJU DITOKO SENI GULO</h2>
						<p>Terimakasih telah berbelanja ditoko kami, Dapatkan harga murah dan bahan yang sangat bagus ditoko seni gulo</p>
						<p><a class="btn btn-warning btn-lg" href="tampil-barang.php" role="button">DATA BARANG</a>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">USER</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->

<?php include "footer.php"; ?>
