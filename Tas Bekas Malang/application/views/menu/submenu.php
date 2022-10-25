<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

   <div class="row">
      <div class="col-lg">
         <?= $this->session->flashdata('message2'); ?>
         <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#subMenuBaruModal">Tambah Sub Menu</a>
         <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Sub Menu</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Url</th>
                  <th scope="col">Icon</th>
                  <th scope="col">Aktif</th>
                  <th scope="col">Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 1; ?>
               <?php foreach ($subMenu as $sm) : ?>
                  <tr>
                     <td scope="row"><?= $i; ?></td>
                     <td><?= $sm['judul_sub_menu']; ?></td>
                     <td><?= $sm['menu']; ?></td>
                     <td><?= $sm['url_sub_menu']; ?></td>
                     <td><?= $sm['icon_sub_menu']; ?></td>
                     <td><?= $sm['aktif_sub_menu']; ?></td>
                     <td>
                        <a class="badge badge-primary" href="">Ubah</a>
                        <a class="badge badge-danger" href="hapusSubMenu/<?= $sm["id_sub_menu"]; ?>" data-toggle="modal" data-target="#hapusModal">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="subMenuBaruModal" tabindex="-1" role="dialog" aria-labelledby="subMenuBaruModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="subMenuBaruModalLabel">Tambah Sub Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post" action="<?= base_url('menu/submenu') ?>">
            <div class="modal-body">
               <div class="form-group">
                  <input type="text" class="form-control" id="subMenuBaru" name="subMenuBaru" placeholder="Nama sub menu">
               </div>
               <div class="form-group">
                  <select name="idMenu" id="idMenu" class="form-control">
                     <option value="">Pilih Menu</option>
                     <?php foreach ($menu as $m) : ?>
                        <option value="<?= $m['id_menu'] ?>"><?= $m['menu'] ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="url" name="url" placeholder="Url sub menu">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon sub menu">
               </div>
               <div class="form-group">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="aktifCek" name="aktifCek" value="1">
                     <label class="custom-control-label" for="aktifCek">Aktif?</label>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-primary">Tambah</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus sub menu
            </h5> <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Klik "Yakin" jika Anda yakin untuk menghapus</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?= base_url('menu/hapusSubMenu/') .  $sm["id_sub_menu"]; ?>">Yakin</a>
         </div>
      </div>
   </div>
</div>