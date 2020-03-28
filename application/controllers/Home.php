<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {
        function __construct() {
            parent::__construct();
        }

        public function index(){
            $content['title']= "Halaman Utama";
            $content['main_view']= 'index';
            $content['page']= 'home';
            $content['data_produk']=$this->HomeModel->get_data('produk');
            $this->load->view('template/template',$content);
        }
    }
?>