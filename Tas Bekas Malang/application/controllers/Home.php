<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Tas Bekas Malang';
      // query donasi barang
      $queryBarang = "SELECT stok.*";
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

   public function detail($id = '')
   {
      $data['donasi'] = $this->db->get_where('tbl_donasi', ['id_donasi' => $id])->row_array();
      $data['title'] = 'Detail Campaign';
      $this->load->view('templates/header', $data);
      $this->load->view('donasi_barang/detail', $data);
      $this->load->view('templates/footer');
   }
}
