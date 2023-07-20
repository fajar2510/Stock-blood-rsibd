<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master'); 
    }

     public function index()
    {
         // get data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();



        $data['blood_group'] = $this->db->get('blood_group')->result_array();
        $data['blood_type'] = $this->db->get('blood_type')->result_array();
        $data['doctor'] = $this->db->get('doctor')->result_array();
        $data['specific_room'] = $this->db->get('specific_room')->result_array();

        $data['blood_order'] = $this->Master->getOrder();

        $this->form_validation->set_rules('doctor', 'Doctor', 'required|trim');
        $this->form_validation->set_rules('blood_group', 'Group', 'required|trim');
        $this->form_validation->set_rules('blood_type', 'Type', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
        $this->form_validation->set_rules('room', 'Room', 'required|trim');
        $this->form_validation->set_rules('source', 'Source', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Order Blood Data ';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nurse/order_blood', $data);
            $this->load->view('templates/footer'); 
        } else {
            $data = [
                'date' => date('Y-m-d H:i:s'),
                'user' => $this->session->userdata('id'),
                'doctor' => $this->input->post('doctor', true),
                'blood_group' => $this->input->post('blood_group', true),
                'blood_type' => $this->input->post('blood_type', true),
                'total' => $this->input->post('total', true),
                'room' => $this->input->post('room', true),
                'source' => $this->input->post('source', true),
                'status' => 1,
               

            ];
            $this->db->insert('blood_order', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! Data Order has been created. </div>');
            redirect('order');
        }
    }

    public function cancel($id)
    {
            $this->db->set('status', 3 );
            $this->db->where('id', $id);
            $this->db->update('blood_order');

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Order has been CANCELED! </div>');
            redirect('order');
    }

     public function accept($id)
    {
            $this->db->set('status', 2 );
            $this->db->where('id', $id);
            $this->db->update('blood_order');

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Order has been ACCEPTED! </div>');
            redirect('order');
    }
    
       public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blood_order');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected  Order has succesfully deleted, be carefull for manage data. </div>');
        redirect('order');
    }
}
