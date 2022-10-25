<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penjual extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      if (!$this->session->userdata('email')) {
         redirect('login');
      }
   }
   public function index()
   {
      $data['user'] = $this->db->get_where('tbl_user', ['email_user' =>
      $this->session->userdata('email')])->row_array();

      $data['title'] = 'Produk';

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('penjual/index', $data);
      $this->load->view('templates/footer_user');
   }
}
