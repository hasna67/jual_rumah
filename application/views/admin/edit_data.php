<div class="containter-fluid">
    <h3><iclass="fas fa-eddit"></i> EDIT DATA RUMAH</h3>

    <?php foreach($rumah as $rmh) : ?>
        
        <form method="post" action="<?php echo base_url().'admin/data_rumah/update' ?>" >
    <div class="for-group">
        <label>Tipe Rumah</label>
        <input type="text" name="tipe_rumah" class="form-control" value="<?php echo $rmh->tipe_rumah ?>">
    </div>
    <div class="for-group">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" value="<?php echo $rmh->kategori ?>">
    </div>
    <div class="for-group">
        <label>Keterangan</label>
        <input type="hidden" name="id_rumah" class="form-control" value="<?php echo $rmh->id_rumah ?>">
        <input type="text" name="keterangan" class="form-control" value="<?php echo $rmh->keterangan ?>">
    </div>
    <div class="for-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $rmh->harga ?>">
    </div>

    <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>
    </form>
    
    <?php endforeach; ?>
</div>