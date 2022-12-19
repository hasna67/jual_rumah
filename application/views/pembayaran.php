<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {$grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. " .number_format($grand_total, 0,',','.');
                 

                ?>
            </div><br><br>
            <h3>Input Pembayaran</h3>

            <form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>
            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
            </div>
            <div class="form-group">
                <label>PILIH BANK</label>
                <select class="form-control" name="bank">
                    <option value="BCA - 1214151">BCA - 1214151</option>
                    <option value="BNI - 1241166">BNI - 1241166</option>
                    <option value="BRI - 3514215">BRI - 3514215</option>
                    <option value="MANDIRI - 1114155">MANDIRI - 1114155</option>
                </select>
            </div>
            <div class="form-group">
            <label>Bukti Transfer</label><br>
            <input type="file" name="gambar" class="form-control" required>
        </div>
            <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
        </form>
        <?php
        } else {
            echo "<h4>Keranjang Belanja Anda Masih Kosong";
        } 
        ?>
        </div>

        
        <div class="col-md-2"></div>
    </div>
</div>