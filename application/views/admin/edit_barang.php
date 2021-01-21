<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Produk</h3>

    <?php foreach ($menub as $mn) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="for-group">
                <label>Jenis Produk</label>
                <input type="hidden" name="idProduk" class="form-control" value="<?php echo $mn->idProduk ?>">
                <input type="text" name="jenis" class="form-control" value="<?php echo $mn->jenis ?>">
            </div>

            <div class="for-group">
                <label>Nama Produk</label>
                <input type="text" name="namaProduk" class="form-control" value="<?php echo $mn->namaProduk ?>">
            </div>

            <div class="for-group">
                <label>Harga Produk</label>
                <input type="text" name="hargaProduk" class="form-control" value="<?php echo $mn->hargaProduk ?>">
            </div>

            <div class="form-group">
                <label>Gambar Produk</label>
                <br>
                <input type="file" name="gambarProduk" value="<?php echo $mn->gambarProduk ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>