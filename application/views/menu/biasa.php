<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu Biasa</h1>
    </div>

    <div class="row text-center">

        <?php foreach ($biasa as $mn) : ?>
            <div class="card ml-5 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/assets/img/' . $mn->gambarProduk ?> " ; class="card-img-top" height="225">
                <div class="card-body">
                    <h5 class="card-tittle mb-1"><?php echo $mn->namaProduk ?></h5>
                    <span class="badge-pill mb-3">Rp. <?= number_format($mn->hargaProduk, '0', ',', '.') ?></span>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $mn->idProduk, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>