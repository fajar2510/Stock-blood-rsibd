<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Graphic_stock extends CI_Controller
{

     public function __construct() 
	{
		parent::__construct();
        $this->load->model('stock'); 
	}

     public function index()
    {
        // mengambil data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user'); 
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();
        
        // gol darah
        $data['A'] =  $this->stock->grafikA();
        $data['B'] =  $this->stock->grafikB();
        $data['O'] =  $this->stock->grafikO();
        $data['AB'] =  $this->stock->grafikAB();

        // type darah
        $data['tipeA1'] =  $this->stock->grafikA1();
        $data['tipeA2'] =  $this->stock->grafikA2();
        $data['tipeA3'] =  $this->stock->grafikA3();
        $data['tipeB1'] =  $this->stock->grafikB1();
        $data['tipeB2'] =  $this->stock->grafikB2();
        $data['tipeB3'] =  $this->stock->grafikB3();
        $data['tipeO1'] =  $this->stock->grafikO1();
        $data['tipeO2'] =  $this->stock->grafikO2();
        $data['tipeO3'] =  $this->stock->grafikO3();
        $data['tipeAB1'] =  $this->stock->grafikAB1();
        $data['tipeAB2'] =  $this->stock->grafikAB2();
        $data['tipeAB3'] =  $this->stock->grafikAB3();


 
        $data['title'] = 'Graphical Report View of Stock Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('eksekutif/graphics_stock', $data);
        $this->load->view('templates/footer');
       
    }

  
}
