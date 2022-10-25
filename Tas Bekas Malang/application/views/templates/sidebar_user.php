<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <a href="<?= base_url(); ?>" class='mx-auto mt-4 mb-4'>
      <img src="<?= base_url() ?>/assets/img/logo.png" alt="Portal Amal" width="190px">
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Query Menu -->
   <?php
   $tipeUser = $this->session->userdata('id_tipe_user');
   $queryMenu = "SELECT `tbl_menu`.`id_menu`, `menu` 
                     FROM `tbl_menu` JOIN `tbl_akses_menu`
                     ON `tbl_menu`.`id_menu` = `tbl_akses_menu`.`id_menu`
                     WHERE `tbl_akses_menu`.`id_tipe_user` = $tipeUser
                     ORDER BY `tbl_akses_menu`.`id_menu` ASC
                     ";
   $menu = $this->db->query($queryMenu)->result_array();
   ?>

   <!-- looping menu -->
   <?php foreach ($menu as $m) : ?>
      <div class="sidebar-heading">
         <?= $m['menu']; ?>
      </div>

      <!-- Query Sub Menu -->
      <?php
         $idMenu = $m['id_menu'];
         $querySubMenu = "SELECT *
                     FROM `tbl_sub_menu` JOIN `tbl_menu`
                     ON `tbl_sub_menu`.`id_menu` = `tbl_menu`.`id_menu`
                     WHERE `tbl_sub_menu`.`id_menu` = $idMenu
                     AND `tbl_sub_menu`.`aktif_sub_menu` = 1
                     ";
         $subMenu = $this->db->query($querySubMenu)->result_array();
         ?>

      <!-- looping sub menu -->
      <?php foreach ($subMenu as $sm) : ?>
         <?php if ($title == $sm['judul_sub_menu']) : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>

            <!-- Query Sub2 Menu -->
            <?php
                  $idsubMenu = $sm['id_sub_menu'];
                  $querySub2Menu = "SELECT `tbl_sub2_menu`.*, `tbl_sub_menu`.`id_sub_menu`
                           FROM `tbl_sub2_menu` JOIN `tbl_sub_menu`
                           ON `tbl_sub2_menu`.`id_sub_menu` = `tbl_sub_menu`.`id_sub_menu`
                           WHERE `tbl_sub2_menu`.`id_sub_menu` = $idsubMenu
                           AND `tbl_sub2_menu`.`aktif_sub2_menu` = 1
                           ";
                  $sub2Menu = $this->db->query($querySub2Menu)->result_array();
                  ?>


            <!-- cek ada sub2 menu -->
            <?php if ($sub2Menu) : ?>
               <a class="nav-link collapsed pb-0" data-toggle="collapse" data-target="#<?= $sm['url_sub_menu'] ?>" aria-expanded="true" aria-controls="<?= $sm['judul_sub_menu'] ?>">
               <?php else : ?>
                  <a class="nav-link pb-0" href="<?= base_url($sm['url_sub_menu']) ?>">
                  <?php endif; ?>
                  <i class="<?= $sm['icon_sub_menu'] ?>"></i>
                  <span><?= $sm['judul_sub_menu'] ?></span>
                  </a>

                  <!-- looping sub2 menu -->
                  <div id="<?= $sm['url_sub_menu'] ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                        <?php foreach ($sub2Menu as $sm2) : ?>
                           <a class="collapse-item" href="<?= base_url($sm2['url_sub2_menu']) ?>">
                              <?= $sm2['judul_sub2_menu'] ?>
                           </a>
                        <?php endforeach; ?>
                     </div>
                  </div>
            </li>
         <?php endforeach; ?>
         <hr class="sidebar-divider mt-2">
      <?php endforeach; ?>

      <!-- Nav Item - keluar -->
      <li class="nav-item">
         <a class="nav-link" href="<?= base_url('login/keluar') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

</ul>
<!-- End of Sidebar -->