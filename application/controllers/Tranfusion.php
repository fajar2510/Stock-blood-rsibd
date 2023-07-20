<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Tranfusion extends CI_Controller
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


        $data['region'] = $this->db->get('region')->result_array();
        $data['doctor'] = $this->db->get('doctor')->result_array();
        $data['blood_group'] = $this->db->get('blood_group')->result_array();
        $data['blood_type'] = $this->db->get('blood_type')->result_array();
        $data['blood_pressure'] = $this->db->get('blood_pressure')->result_array();

        // Load Model Tranfusi
        $data['tranfusion'] = $this->Master->getTranfusion();

        $this->form_validation->set_rules('patient_name', 'Name Patient', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('doctor_name', 'Doctor', 'required');
        $this->form_validation->set_rules('blood_group', 'Blood Group', 'required');
        $this->form_validation->set_rules('blood_type', 'Blood Type', 'required');
        $this->form_validation->set_rules('blood_pressure', 'Blood Pressure', 'required');
        $this->form_validation->set_rules('historical', 'Information History', 'required|trim');

        if ($this->form_validation->run() == false) { 
            $data['title'] = 'Tranfusion Reaction Data';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nurse/tranfusion', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'date' => date('Y-m-d H:i:s'),
                'user' => $this->session->userdata('id'),
                'patient_name' => $this->input->post('patient_name', true),
                'gender' => $this->input->post('gender', true),
                'age' => $this->input->post('age', true),
                'address' => $this->input->post('address', true),
                'region' => htmlspecialchars($this->input->post('region', true)),
                'doctor_name' => htmlspecialchars($this->input->post('doctor_name', true)),
                'blood_group' => $this->input->post('blood_group', true),
                'blood_type' => $this->input->post('blood_type', true),
                'blood_pressure' => $this->input->post('blood_pressure', true),
                'historical' => $this->input->post('historical', true),

            ];
            $this->db->insert('tranfusion', $data);

            $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Congratulation! Data Tranfusion has been created. </div>');
            redirect('tranfusion');
        }
    }

      public function deleteTranfusion($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tranfusion');

        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert"> Your selected Tranfusion Reaction has succesfully deleted, be carefull for manage data. </div>');
        redirect('tranfusion');
    }
}
