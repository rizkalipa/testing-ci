<?php 

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index($nama = 'User')
    {
        $data = ['title' => 'Home Page', 'nama' => $nama];

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}

?>