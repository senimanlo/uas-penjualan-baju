
</div><?php include "header.php"; ?>

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <form action="?" method="post">
               <div class="form-group">
                  <label for="nim"> Kd_Barang</label>
                  <input type="text" class="form-control" name="Kd_Barang"
                  placeholder="Isikan Kd_Barang">
               </div>
               <div class="form-group">
               <label for="nama">Nama Barang</label>
               <input type="text" class="form-control" name="Nama Barang"  placeholder="Isikan Nama Barang ">
            </div>
            <div class="form-group">
            <label for="alamat">Harga Barang</label>
            <textarea name="alamat"class="form-control" placeholder="Isikan Harga Barang"></textarea>
         </div>
         <div class="form-group">
               <label for="nama">Jumlah Barang</label>
               <input type="text" class="form-control" name="Jumlah Barang"  placeholder="Isikan Jumlah Barang ">
            </div>
         <button type="submit" class="btn btn-lg btn-info">Simpan</button>
         <button type="reset" class="btn btn-lg btn-warning">Batal</button>
      </form>
   </div>
</div>

    <?php include "footer.php"; ?>