<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Barang</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Tanggal</th>
							<th>Nama Barang</th>
							<th>Satuan</th>
							<th>Jumlah Beli</th>
							<th>Harga Beli</th>
							<th>Harga Jual</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from data_barang order by tanggal ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['tanggal']?></td>
							<td><?php echo $row['nama_barang']?></td>
							<td><?php echo $row['satuan']?></td>
							<td><?php echo $row['jumlah_beli']?></td>
							<td><?php echo $row['harga_beli']?></td>
							<td><?php echo $row['harga_jual']?></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->

		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>