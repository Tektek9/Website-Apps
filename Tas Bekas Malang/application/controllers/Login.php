<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      // $this->load->helper('cookie');
   }
   public function index()
   {
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');
      if ($this->form_validation->run() == false) {
         $data['title'] = 'Masuk Portal Amal';
         $this->load->view('templates/header', $data);
         $this->load->view('login/login');
         $this->load->view('templates/footer');
      } else {
         $this->_login();
      }
   }

   private function _login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tbl_user', ['email_user' => $email])->row_array();

      //jika user ada
      if ($user) {
         //jika user aktif
         if ($user['aktif_user'] == 1) {
            //cek password
            if (password_verify($password, $user['password_user'])) {
               $data = [
                  'email' => $user['email_user'],
                  'id_tipe_user' => $user['id_tipe_user']
               ];
               $this->session->set_userdata($data);
               if ($user['id_tipe_user'] == 1) {
                  redirect('admin');
               } elseif ($user['id_tipe_user'] == 2) {
                  redirect('penjual');
               } else {
                  redirect('user');
               }
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi atau email salah</div>');
               redirect('login');
            }
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email belum aktif</div>');
            redirect('login');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
         Email atau kata sandi salah</div>');
         redirect('login');
      }
   }

   public function daftar()
   {
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
         'required' => 'Nama tidak boleh kosong'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email_user]', [
         'required' => 'Email tidak boleh kosong',
         'valid_email' => 'Email Anda salah',
         'is_unique' => 'Email sudah terdaftar'
      ]);
      $this->form_validation->set_rules('telp', 'Telepon', 'required|trim|numeric', [
         'required' => 'Telepon tidak boleh kosong',
         'numeric' => 'Telopon berupa angka (contoh: 081234567890)'
      ]);
      $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
         'required' => 'Kata sandi tidak boleh kosong',
         'min_length' => 'Minimal 8 karakter',
         'password1' => 'Kata sandi tidak sama'
      ]);
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == false) {
         $data['title'] = 'Daftar Portal Amal';
         $this->load->view('templates/header', $data);
         $this->load->view('login/daftar');
         $this->load->view('templates/footer');
      } else {
         $data = [
            'nama_user' => htmlspecialchars($this->input->post('nama', true)),
            'email_user' => htmlspecialchars($this->input->post('email', true)),
            'telp_user' => htmlspecialchars($this->input->post('telp', true)),
            'foto_user' => 'default.jpg',
            'password_user' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'aktif_user' => 1,
            'tgl_user' => time(),
            'id_tipe_user' => $this->input->post('radioUser')
         ];
         $this->db->insert('tbl_user', $data);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         Selamat! Anda sudah terdaftar di Portal Amal</div>');
         redirect('login');
      }
   }

   public function keluar()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('id_tipe_user');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Anda telah keluar!</div>');
      redirect('login');
   }

   public function blok()
   {
      $data['title'] = 'Akses Diblok';
      $this->load->view('templates/header_user', $data);
      $this->load->view('login/blok');
      $this->load->view('templates/footer_user');
   }
}
