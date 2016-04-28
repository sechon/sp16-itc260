<?php
//Pics.php


class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                //$this->load->helper('url_helper');
        }
    
        public function index()
        {
                
                $data['page_id'] = 'Flickr';    
                $data['title'] = 'Flickr archive';
                $data['pics'] = $this->pics_model->get_pics();

                //$this->load->view('templates/header', $data);
                $this->load->view('pics/index', $data);
                //$this->load->view('templates/footer');
        }
    
}

