<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_barang extends CI_Controller
{

   public function index()
   {
      $data['title'] = 'Donasi Barang';

      $queryBarang = "SELECT `tbl_donasi`.*, `tbl_user`.`nama_user`
                     FROM `tbl_donasi` JOIN `tbl_user`
                     ON `tbl_donasi`.`id_user` = `tbl_user`.`id_user`
                     WHERE `tbl_donasi`.`aktif_donasi` = 1
                     ";
      $data['donasiBarang'] = $this->db->query($queryBarang)->result_array();

      $this->load->view('templates/header', $data);
      $this->load->view('donasi_barang/index');
      $this->load->view('templates/footer');
   }
}
