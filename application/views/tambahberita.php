  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Halaman Tambah Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active">Tambah Berita</li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Berita</h3>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('dashboard/prosestambahberita') ?>" method="post">
            <label>Judul : </label>
            <input class="form-control" type="text" name="judul">
            <label>Keterangan : </label>
            <input class="form-control" type="text" name="keterangan">
            <label>Narasumber : </label>
            <input class="form-control" type="text" name="narasumber">
            <label>Penerbit : </label>
            <input class="form-control" type="text" name="penerbit">
            <center><button class="btn btn-primary" style="margin-top: 20px">Simpan</button></center>
          </form>
        </div>
      </div>
    </section>
  </div>

