<?php

function cekLogin()
{
   $ci = get_instance();
   if (!$ci->session->userdata('email')) {
      redirect('login');
   } else {
      $tipe_user = $ci->session->userdata('id_tipe_user');
      $menu = $ci->uri->segment(1);

      $queryMenu = $ci->db->get_where('tbl_menu', ['menu' => $menu])->row_array();
      $idMenu = $queryMenu['id_menu'];

      $userAkses = $ci->db->get_where('tbl_akses_menu', [
         'id_tipe_user' => $tipe_user,
         'id_menu' => $idMenu
      ]);

      if ($userAkses->num_rows() < 1) {
         redirect('login/blok');
      }
   }
}
