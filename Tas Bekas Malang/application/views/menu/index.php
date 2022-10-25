<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

   <div class="row">
      <div class="col-lg-6">
         <?= $this->session->flashdata('message'); ?>
         <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#menuBaruModal">Tambah Menu</a>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 1; ?>
               <?php foreach ($menu as $m) : ?>
                  <tr>
                     <td scope="row"><?= $i; ?></td>
                     <td><?= $m['menu']; ?></td>
                     <td>
                        <a class="badge badge-primary" href="menu/ubahMenu/<?= $m["id_menu"]; ?>" data-toggle="modal" data-target="#ubahMenuModal">Ubah</a>
                        <a class="badge badge-danger" href="menu/hapusMenu/<?= $m["id_menu"]; ?>" data-toggle="modal" data-target="#hapusModal">Hapus</a>
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

<!-- Tambah menu -->
<div class="modal fade" id="menuBaruModal" tabindex="-1" role="dialog" aria-labelledby="menuBaruLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="menuBaruLabel">Tambah Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post" action="<?= base_url('menu/ubahMenu') ?>">
            <div class="modal-body">
               <div class="form-group">
                  <input type="text" class="form-control" id="menuBaru" name="menuBaru" placeholder="Nama menu">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Delete Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus menu
            </h5> <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Klik "Yakin" jika Anda yakin untuk menghapus</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?= base_url('menu/hapusMenu/') .  $m["id_menu"]; ?>">Yakin</a>
         </div>
      </div>
   </div>
</div>