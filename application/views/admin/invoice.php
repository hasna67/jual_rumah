<div class="containter-fluid">
    <h4>Invoice Pemesanan</h4>

    <table class="table table-bordered table-hover table-strip">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>No. Telepon</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Bank</th>
            <th>Bukti Transfer</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->nomer_hp ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo $inv->bank ?></td>
            <td><img style="width:50%;height:50%;" src="<?php echo base_url().'/uploads/'.$inv->bukti_transfer ?>" class="card-img-top"></td>
            <td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>