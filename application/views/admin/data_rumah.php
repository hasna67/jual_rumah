<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>Tambah Data Rumah</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>TIPE RUMAH</th>
            <th>KATEGORI</th>
            <th>KETERANGAN</th>
            <th>HARGA</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        $no=1;
        foreach($rumah as $rmh) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $rmh->tipe_rumah ?></td>
            <td><?php echo $rmh->kategori ?></td>
            <td><?php echo $rmh->keterangan ?></td>
            <td><?php echo $rmh->harga ?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><?php echo anchor('admin/data_rumah/edit/' .$rmh->id_rumah, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_rumah/hapus/' .$rmh->id_rumah, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
            <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Data Rumah</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_rumah/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tipe Rumah</label>
            <select class="form-control" name="tipe_rumah" required>
              <option value="Type S">Type S</option>
              <option value="Type A">Type A</option>
              <option value="Type B">Type B</option>
              <option value="Type C">Type C</option>
            </select>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori" required>
              <option value="modern">modern</option>
              <option value="classic">classic</option>
              <option value="minimalis">minimalis</option>
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar Rumah</label><br>
            <input type="file" name="gambar" class="form-control">
        </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>