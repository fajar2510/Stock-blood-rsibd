<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Graphic_source extends CI_Controller
{

     public function __construct() 
	{
		parent::__construct();
        $this->load->model('source'); 
	}

     public function index()
    {
        // mengambil data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user'); 
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();
        
        // total source
        $data['PMI_total'] =  $this->source->dataPMI_total();
        $data['Hospital_total'] =  $this->source->dataHospital_total();
        $data['Donor_total'] =  $this->source->dataDonor_total();
        $data['Other_total'] =  $this->source->dataOther_total();

        // total data PMI
        $data['PMI_A'] =  $this->source->dataPMI_A();
        $data['PMI_B'] =  $this->source->dataPMI_B();
        $data['PMI_O'] =  $this->source->dataPMI_O();
        $data['PMI_AB'] =  $this->source->dataPMI_AB();

        // total data Hospital
        $data['Hospital_A'] =  $this->source->dataHospital_A();
        $data['Hospital_B'] =  $this->source->dataHospital_B();
        $data['Hospital_O'] =  $this->source->dataHospital_O();
        $data['Hospital_AB'] =  $this->source->dataHospital_AB();

        // total data Donor
        $data['Donor_A'] =  $this->source->dataDonor_A();
        $data['Donor_B'] =  $this->source->dataDonor_B();
        $data['Donor_O'] =  $this->source->dataDonor_O();
        $data['Donor_AB'] =  $this->source->dataDonor_AB();
         
        $data['title'] = 'Graphical Report View of Source Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('eksekutif/graphics_source', $data);
        $this->load->view('templates/footer');      
    }

  
}
