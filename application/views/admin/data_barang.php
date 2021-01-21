<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-target="#tambah_barang" data-toggle="modal"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>Id Produk</th>
            <th>Jenis</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($menub as $mn) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mn->jenis ?></td>
                <td><?php echo $mn->namaProduk ?></td>
                <td>Rp. <?php echo number_format($mn->hargaProduk, 0, ',', '.') ?></td>
                <td>
                    <?php echo anchor('admin/data_barang/edit/' . $mn->idProduk, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                </td>
                <td>
                    <?php echo anchor('admin/data_barang/hapus/' . $mn->idProduk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Jenis Produk</label>
                    <select class="form-control" name="jenis">
                        <option>Menu Biasa</option>
                        <option>Menu Hotplate</option>
                        <option>Menu Panas</option>
                        <option>Menu Dingin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="namaProduk" class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga </label>
                    <input type="text" name="hargaProduk" class="form-control">
                </div>

                <div class="form-group">
                    <label>Gambar Produk</label>
                    <input type="file" name="gambarProduk" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>