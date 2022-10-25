<!-- Jumbotron Start -->
<div class="jumbotron jumbotron-fluid" style="background-image: url(<?= base_url('assets/img/donasi/') . $donasi['gambar_donasi'] ?>);
	background-size: cover;
	height: 180px;
	text-align: center;
	position: relative;">
   <div class="container">
      <h4 class="text-white judul"><?= $donasi['judul_donasi']; ?></h4>
      <button href="" class="btn btn-judul btn-primary font-weight-bold">Bantu Sekarang</button>
   </div>
</div>
<!-- Jumbotron End -->

<!-- navigation -->
<div class="container">
   <div class="row mb-5">
      <div class="col-lg-8">
         <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="true">Detail Campaign</a>
               <a class="nav-item nav-link" id="nav-update-tab" data-toggle="tab" href="#nav-update" role="tab" aria-controls="nav-update" aria-selected="false">Update Campaign</a>

            </div>
         </nav>
         <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active pt-3" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
               <div class="card">
                  <p class="pl-3 pt-3 pr-3"><?= $donasi['ket_donasi']; ?></p>
               </div>
            </div>
            <div class="tab-pane fade" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">...</div>
         </div>
      </div>
      <div class="col-lg-4 mx-auto">
         <h5>Kebutuhan Campaign</h5>

         <!-- query daftar donasi -->
         <?php
         $idDonasi = $donasi['id_donasi'];
         $queryDaftarDonasi = "SELECT `tbl_daftar_donasi`.*, `tbl_transaksi_donasi`.*
                              FROM `tbl_daftar_donasi` JOIN `tbl_transaksi_donasi`
                              WHERE `tbl_daftar_donasi`.`id_daftar_donasi` = `tbl_transaksi_donasi`.`id_daftar_donasi`
                              AND `tbl_transaksi_donasi`.`id_donasi` = $idDonasi
                              ";
         $daftarDonasi = $this->db->query($queryDaftarDonasi)->result_array();
         ?>

         <!-- loop daftar donasi -->
         <div class="card mt-3 pt-3">
            <?php foreach ($daftarDonasi as $dD) : ?>
               <ul>
                  <div class="row">
                     <div class="col-8">
                        <li><?= $dD['nama_daftar_donasi']; ?></li>
                     </div>
                     <div class="col-4">
                        <p><?= $dD['jumlah_daftar_donasi'] . " " . $dD['satuan_daftar_donasi'];; ?></p>
                     </div>
                  </div>
               </ul>
            <?php endforeach; ?>
         </div>
      </div>
   </div>
</div>

<!-- navigation end -->