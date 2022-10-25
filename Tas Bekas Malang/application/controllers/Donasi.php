<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Donasi Barang';
      $data['user'] = $this->db->get_where('tbl_user', ['email_user' =>
      $this->session->userdata('email')])->row_array();

      $data['donasi'] = $this->db->get('tbl_donasi')->result_array();;

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('donasi/index', $data);
      $this->load->view('templates/footer_user');
   }

   public function hapusDonasi($id = '')
   {
      $query = "DELETE FROM `tbl_donasi` WHERE `id_donasi` = $id";
      $this->db->query($query);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Campaign berhasil dihapus</div>');
      redirect('menu');
   }
}
