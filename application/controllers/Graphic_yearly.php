<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Graphic_yearly extends CI_Controller
{

     public function __construct() 
	{
		parent::__construct();
        $this->load->model('yearly'); 
	}

     public function index()
    {
        // mengambil data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user'); 
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();
        
        // total per tahun
        $data['order_2018'] =  $this->yearly->data_2018();
        $data['order_2019'] =  $this->yearly->data_2019();
        $data['order_2020'] =  $this->yearly->data_2020();

         // total per bulan 2018
        $data['orderJan18'] =  $this->yearly->dataJan2018();
        $data['orderFeb18'] =  $this->yearly->dataFeb2018();
        $data['orderMar18'] =  $this->yearly->dataMar2018();
        $data['orderApr18'] =  $this->yearly->dataApr2018();
        $data['orderMei18'] =  $this->yearly->dataMei2018();
        $data['orderJun18'] =  $this->yearly->dataJun2018();
        $data['orderJul18'] =  $this->yearly->dataJul2018();
        $data['orderAgt18'] =  $this->yearly->dataAgt2018();
        $data['orderSep18'] =  $this->yearly->dataSep2018();
        $data['orderOkt18'] =  $this->yearly->dataOkt2018();
        $data['orderNov18'] =  $this->yearly->dataNov2018();
        $data['orderDsb18'] =  $this->yearly->dataDsb2018();

        // total per bulan 2019
        $data['orderJan19'] =  $this->yearly->dataJan2019();
        $data['orderFeb19'] =  $this->yearly->dataFeb2019();
        $data['orderMar19'] =  $this->yearly->dataMar2019();
        $data['orderApr19'] =  $this->yearly->dataApr2019();
        $data['orderMei19'] =  $this->yearly->dataMei2019();
        $data['orderJun19'] =  $this->yearly->dataJun2019();
        $data['orderJul19'] =  $this->yearly->dataJul2019();
        $data['orderAgt19'] =  $this->yearly->dataAgt2019();
        $data['orderSep19'] =  $this->yearly->dataSep2019();
        $data['orderOkt19'] =  $this->yearly->dataOkt2019();
        $data['orderNov19'] =  $this->yearly->dataNov2019();
        $data['orderDsb19'] =  $this->yearly->dataDsb2019();

        // total per bulan 2020
        $data['orderJan20'] =  $this->yearly->dataJan2020();
        $data['orderFeb20'] =  $this->yearly->dataFeb2020();
        $data['orderMar20'] =  $this->yearly->dataMar2020();
        $data['orderApr20'] =  $this->yearly->dataApr2020();
        $data['orderMei20'] =  $this->yearly->dataMei2020();
        $data['orderJun20'] =  $this->yearly->dataJun2020();
        $data['orderJul20'] =  $this->yearly->dataJul2020();
        $data['orderAgt20'] =  $this->yearly->dataAgt2020();
        $data['orderSep20'] =  $this->yearly->dataSep2020();
        $data['orderOkt20'] =  $this->yearly->dataOkt2020();
        $data['orderNov20'] =  $this->yearly->dataNov2020();
        $data['orderDsb20'] =  $this->yearly->dataDsb2020();

        $data['title'] = 'Graphical Report View of Order Yearly';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('eksekutif/graphics_yearly', $data);
        $this->load->view('templates/footer');
       
    }

  
}
