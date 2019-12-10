  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Halaman Ubah Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active">Ubah Berita</li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Berita</h3>
        </div>
        <div class="box-body">
          <?php foreach ($berita as $item) {?>
          <form action="<?php echo base_url('dashboard/prosesubahberita/'.$item['id']) ?>" method="post">
            <label>Judul : </label>
            <input class="form-control" type="text" name="judul" value="<?php echo $item['judul_berita'] ?>">
            <label>Keterangan : </label>
            <input class="form-control" type="text" name="keterangan" value="<?php echo $item['keterangan_berita'] ?>">
            <label>Narasumber : </label>
            <input class="form-control" type="text" name="narasumber" value="<?php echo $item['narasumber'] ?>">
            <label>Penerbit : </label>
            <input class="form-control" type="text" name="penerbit" value="<?php echo $item['penerbit'] ?>">
            <center><button class="btn btn-primary" style="margin-top: 20px">Simpan</button></center>
          </form>
        <?php } ?>
        </div>
      </div>
    </section>
  </div>

