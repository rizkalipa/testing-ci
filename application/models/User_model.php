<?php 

class User_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('customers')->result_array();
    }

    public function store()
    {
        $data = ([
            'customer_name' => $this->input->post('customer_name'),
            'address' => $this->input->post('address'),
            'age' => $this->input->post('age')
        ]);

        $this->db->insert('customers', $data);
    }
}

?>