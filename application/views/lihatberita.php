  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Halaman Lihat Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active">Lihat Berita</li>
      </ol>
    </section>
    <section class="content container-fluid">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Lihat Berita</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <tr>
                <td>No</td>
                <td>Judul</td>
                <td>Keterangan</td>
                <td>Narasumber</td>
                <td>Penerbit</td>
                <td>Waktu Terbit</td>
                <td>Action</td>
              </tr>
              <?php $no = 1; foreach ($lihatberita as $item) {?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $item['judul_berita']; ?></td>
                  <td><?php echo $item['keterangan_berita']; ?></td>
                  <td><?php echo $item['narasumber']; ?></td>
                  <td><?php echo $item['penerbit']; ?></td>
                  <td><?php echo $item['waktu_terbit']; ?></td>
                  <td><a href="<?php echo base_url('dashboard/detailberita/'.$item['id']) ?>" class="btn"><i class="fa fa-eye"></i></a><a href="<?php echo base_url('dashboard/ubahberita/'.$item['id']) ?>" class="btn"><i class="fa fa-pencil"></i></a><a href="<?php echo base_url('dashboard/hapusberita/'.$item['id']) ?>" class="btn"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>

