<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      cekLogin();
   }
   public function index()
   {
      $data['title'] = 'Dashboard';
      $data['user'] = $this->db->get_where('tbl_user', ['email_user' =>
      $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('admin/index', $data);
      $this->load->view('templates/footer_user');
   }
}
