<?php

class Produk extends CI_Controller
{

        public function index()
        {
                $data['title'] = 'Portal Amal';
                $data['user'] = 'Asdikin';
                $this->load->view('templates/header', $data);
                $this->load->view('produk/index', $data);
                $this->load->view('templates/footer');
        }
}
