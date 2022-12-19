<div class="container-fluid">

    <div class="card">
        <h5 div class="card-header">Detail Rumah</h5>
        <div class="card-body">

            <div class="row">
            <?php foreach($rumah as $rmh): ?>
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$rmh->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Tipe Rumah</td>
                            <td><strong><?php echo $rmh->tipe_rumah ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $rmh->kategori ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $rmh->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($rmh->harga, 0,',','.') ?></div></strong></td>
                        </tr>
                    </table> 

                    <?php echo anchor('dashboard/buy_now/' .$rmh->id_rumah, '<div class="btn btn-sm btn-primary">Buy Now</div>') ?>
                    <?php echo anchor('dashboard/index/' , '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>