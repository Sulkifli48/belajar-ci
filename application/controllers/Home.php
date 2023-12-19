<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(  'title'     => 'Halo',
                        'isi'       => 'homepage/home/landing_#id');

        $this->load->view('homepage/_layout/wrapper', $data);
    }
    public function create_pass()
    {
        $pass = (do_hash('bebas'));
        var_dump($pass);
    }
}

