<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
   <div class="row">
      <div class="col-lg">
         <!-- <?= $this->session->flashdata('message2'); ?> -->
         <a href="" class="btn btn-primary mb-3">Buat Campaign</a>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Campaign</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Tanggal Buat</th>
                  <th scope="col">Aktif</th>
                  <th scope="col">Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 1; ?>
               <?php foreach ($donasi as $d) : ?>
                  <tr>
                     <td class="align-middle" scope="row"><?= $i; ?></td>
                     <td class="align-middle"><?= $d['judul_donasi']; ?></td>
                     <td class="align-middle">
                        <img src="<?= base_url('assets/img/donasi/') . $d['gambar_donasi']; ?>" alt="<?= $d['judul_donasi']; ?>" width="100px">
                     </td>
                     <td class="align-middle"><?= date('d F Y', $d['tgl_buat_donasi']); ?></td>
                     <td class="align-middle"><?= $d['aktif_donasi']; ?></td>
                     <td class="align-middle">
                        <a class="badge badge-primary" href="">Ubah</a>
                        <a class="badge badge-danger" href="hapusDonasi/<?= $d["id_donasi"]; ?>" data-toggle="modal" data-target="#hapusDonasi">Hapus</a>
                     </td>
                  </tr>
                  <?php $i++; ?>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Delete Modal-->
<div class="modal fade" id="hapusDonasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus donasi
            </h5> <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Klik "Yakin" jika Anda yakin untuk menghapus</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?= base_url('login/keluar') ?>">Yakin</a>
         </div>
      </div>
   </div>
</div>