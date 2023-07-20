<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_eksekutif extends CI_Controller
{
    // keamanan akses user level, syarat login session
    public function __construct()
    {
        parent::__construct();

        $this->load->model('dashboard'); 
    }

    public function index()
    {
        $data['title'] = 'Dashboard Eksekutif';

        // mengambil data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();

        //data dashboard
        $data['totalstokdarah'] =  $this->dashboard->data_stok();
        $data['total_order_proses'] =  $this->dashboard->data_order_proses();
        $data['total_order_terima'] =  $this->dashboard->data_order_terima();
        $data['total_order_batal'] =  $this->dashboard->data_order_batal();

        //load with templating
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('eksekutif/dashboard_eksekutif', $data);
        $this->load->view('templates/footer');
    }
}
