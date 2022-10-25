<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_donasi extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Detail Campaign';
      // query melihat donasi
      $queryBarang = "SELECT `tbl_donasi`.*, `tbl_user`.`nama_user`
                     FROM `tbl_donasi` JOIN `tbl_user`
                     ON `tbl_donasi`.`id_user` = `tbl_user`.`id_user`
                     WHERE `tbl_donasi`.`aktif_donasi` = 1
                     ";
      $data['donasiBarang'] = $this->db->query($queryBarang)->result_array();

      // query target donasi
      $queryTarget = "SELECT `tbl_transaksi_donasi`.*, sum(`tbl_daftar_donasi`.`jumlah_daftar_donasi`)
                     FROM `tbl_transaksi_donasi` JOIN `tbl_daftar_donasi`
                     ON `tbl_transaksi_donasi`.`id_daftar_donasi` = `tbl_daftar_donasi`.`id_daftar_donasi`
                     GROUP BY `tbl_transaksi_donasi`.`id_donasi`
                     ";
      $data['targetDonasi'] = $this->db->query($queryTarget)->result_array();

      $this->load->view('templates/header', $data);
      $this->load->view('home/index', $data);
      $this->load->view('templates/footer');
   }
}
