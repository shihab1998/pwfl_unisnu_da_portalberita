  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Halaman Detail Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active">Detail  Berita</li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Berita</h3>
        </div>
        <div class="box-body">
            <div class="table-responsive">
              <?php $no = 1; foreach ($berita as $item) {?>
                  <table class="table">
                    <tr>
                      <td>Judul</td>
                      <td>:</td>
                      <td><?php echo $item['judul_berita']; ?></td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>:</td>
                      <td><?php echo $item['keterangan_berita']; ?></td>
                    </tr>
                    <tr>
                      <td>Narasumber</td>
                      <td>:</td>
                      <td><?php echo $item['narasumber']; ?></td>
                    </tr>
                    <tr>
                      <td>Penerbit</td>
                      <td>:</td>
                      <td><?php echo $item['penerbit']; ?></td>
                    </tr>
                    <tr>
                      <td>Waktu Terbit</td>
                      <td>:</td>
                      <td><?php echo $item['waktu_terbit']; ?></td>
                    </tr>
                  </table>
              <?php $no++; } ?>
            </div>
        </div>
      </div>
    </section>
  </div>

