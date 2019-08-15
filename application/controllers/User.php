<?php 

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = ['title' => 'Data User'];
        $data['user'] = $this->User_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data = ['title' => 'Create User'];

        $this->form_validation->set_rules('customer_name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('user/create');
            $this->load->view('templates/footer');
        }
        else {
            $this->User_model->store();
            $this->session->set_flashdata('status', 'Created!');
            redirect('user');
        }
        
        
    }

    public function store()
    {
           
    }
}

?>