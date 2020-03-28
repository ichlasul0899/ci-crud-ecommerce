<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Produk extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('ProdukModel');
        }

        public function index(){
            $content['title']= "Halaman Produk";
            $content['main_view']= 'Produk/lihat_produk';
            $content['page']= 'Produk';
            $content['data_produk']=$this->HomeModel->get_data('produk');
            $this->load->view('template/template',$content);
        }
    }
?>