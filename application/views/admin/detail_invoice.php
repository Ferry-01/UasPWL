<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success"></div>
    </h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->hargaProduk;
            $total += $subtotal;
        ?>

            <tr>
                <td><?php echo $psn->idProduk ?></td>
                <td><?php echo $psn->namaProduk ?></td>
                <td><?php echo $psn->jumlah ?></td>
                <td><?php echo number_format($psn->hargaProduk, 0, ',', '.')  ?></td>
                <td><?php echo number_format($subtotal, 0, ',', '.')  ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>