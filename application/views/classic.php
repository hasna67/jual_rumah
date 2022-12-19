<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <li data-target=#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
    <li data-target=#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target=#carouselExampleIndicators" data-slide-to="2"></li>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide 4.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next"  href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</a>
</div>

    <div class="row text-center mt-4">

    <?php foreach($classic as $rmh) : ?>
        <div class="card ml-3 mb-3" style="width: 16rem;">
        <img src="<?php echo base_url().'/uploads/'.$rmh->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $rmh->tipe_rumah ?></h5>
        <small><?php echo $rmh->keterangan ?></small>
        <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($rmh->harga, 0,',','.') ?></span><br>
        <?php echo anchor('dashboard/buy_now/' .$rmh->id_rumah, '<div class="btn btn-sm btn-primary">Buy Now</div>') ?>
        <?php echo anchor('dashboard/detail/' .$rmh->id_rumah, '<div class="btn btn-sm btn-success">Detail</div>') ?>
        </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>