<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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
      $data['title'] = 'Menu Manajemen';
      $data['user'] = $this->db->get_where('tbl_user', ['email_user' =>
      $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->db->get('tbl_menu')->result_array();

      $this->form_validation->set_rules('menuBaru', 'Menu', 'required|trim', [
         'required' => 'Nama menu tidak boleh kosong'
      ]);

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header_user', $data);
         $this->load->view('templates/sidebar_user', $data);
         $this->load->view('templates/topbar_user', $data);
         $this->load->view('menu/index', $data);
         $this->load->view('templates/footer_user');
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Menu baru gagal ditambahkan</div>');
      } else {
         $this->db->insert('tbl_menu', ['menu' => $this->input->post('menuBaru')]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         Menu baru berhasil ditambahkan</div>');
         redirect('menu');
      }
   }

   public function subMenu()
   {
      $data['title'] = 'Sub Menu Manajemen';
      $data['user'] = $this->db->get_where('tbl_user', ['email_user' =>
      $this->session->userdata('email')])->row_array();
      $this->load->model('Menu_model', 'menu');

      $data['menu'] = $this->db->get('tbl_menu')->result_array();
      $data['subMenu'] = $this->menu->getSubMenu();

      $this->form_validation->set_rules('subMenuBaru', 'SubMenu', 'required|trim', [
         'required' => 'Nama sub menu tidak boleh kosong'
      ]);
      $this->form_validation->set_rules('idMenu', 'Menu', 'required|trim', [
         'required' => 'Menu tidak boleh kosong'
      ]);
      $this->form_validation->set_rules('url', 'Url', 'required|trim', [
         'required' => 'Url tidak boleh kosong'
      ]);
      $this->form_validation->set_rules('icon', 'Icon', 'required|trim', [
         'required' => 'Icon tidak boleh kosong'
      ]);

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header_user', $data);
         $this->load->view('templates/sidebar_user', $data);
         $this->load->view('templates/topbar_user', $data);
         $this->load->view('menu/submenu', $data);
         $this->load->view('templates/footer_user');
         $this->session->set_flashdata('message2', '<div class="alert alert-danger" role="alert">
         Sub Menu baru gagal ditambahkan</div>');
      } else {
         $data = [
            'judul_sub_menu' => $this->input->post('subMenuBaru'),
            'id_menu' => $this->input->post('idMenu'),
            'url_sub_menu' => $this->input->post('url'),
            'icon_sub_menu' => $this->input->post('icon'),
            'aktif_sub_menu' => $this->input->post('aktifCek')
         ];
         $this->db->insert('tbl_sub_menu', $data);
         $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">
         Sub Menu baru berhasil ditambahkan</div>');
         redirect('menu/submenu');
      }
   }

   public function hapusMenu($id = '')
   {
      $query = "DELETE FROM `tbl_menu` WHERE `id_menu` = $id";
      $this->db->query($query);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus</div>');
      redirect('menu');
   }

   public function hapusSubMenu($id = '')
   {
      $query = "DELETE FROM `tbl_sub_menu` WHERE `id_sub_menu` = $id";
      $this->db->query($query);
      $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">Sub Menu berhasil dihapus</div>');
      redirect('menu/submenu');
   }
}
