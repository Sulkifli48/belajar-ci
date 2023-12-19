<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Get_connected extends Public_Controller {

    private $table = 'halaman';
    // public $lang = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
{
    $data = array(  'title'     => 'Halo',
                    'isi'       => 'homepage/get_connected/index');

    $this->load->view('homepage/_layout/wrapper', $data);
}   
public function tambah()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $data = array(  'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'message' => $message);

        $this->crud->i('contact', $data);

        redirect(base_url());
    }
}
