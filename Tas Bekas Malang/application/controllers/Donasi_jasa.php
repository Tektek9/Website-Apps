<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi_jasa extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Donasi Jasa';
      $this->load->view('templates/header', $data);
      $this->load->view('donasi_jasa/index');
      $this->load->view('templates/footer');
   }
}
