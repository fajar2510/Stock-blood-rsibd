<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Graphic_tranfusion extends CI_Controller

{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('tranfusion');
	}

     public function index()
    {
       
        // mengambil data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();

        //data total pasien dalam bulan
        $data['Jan'] =  $this->tranfusion->dataJanuari();
        $data['Feb'] =  $this->tranfusion->dataFebruari();
        $data['Mar'] =  $this->tranfusion->dataMaret();
        $data['Apr'] =  $this->tranfusion->dataApril();
        $data['Mei'] =  $this->tranfusion->dataMei();
        $data['Jun'] =  $this->tranfusion->dataJuni();
        $data['Jul'] =  $this->tranfusion->dataJuli();
        $data['Agt'] =  $this->tranfusion->dataAgustus();
        $data['Sep'] =  $this->tranfusion->dataSeptember();
        $data['Okt'] =  $this->tranfusion->dataOktober();
        $data['Nov'] =  $this->tranfusion->dataNovember();
        $data['Dsb'] =  $this->tranfusion->dataDesember();

        //data hasil reaksi tranfusi
        $data['Jan1'] =  $this->tranfusion->dataJanuari1();
        $data['Jan2'] =  $this->tranfusion->dataJanuari2();
        $data['Jan3'] =  $this->tranfusion->dataJanuari3();
        $data['Jan4'] =  $this->tranfusion->dataJanuari4();
        $data['Jan5'] =  $this->tranfusion->dataJanuari5();
        $data['Feb1'] =  $this->tranfusion->dataFebruari1();
        $data['Feb2'] =  $this->tranfusion->dataFebruari2();
        $data['Feb3'] =  $this->tranfusion->dataFebruari3();
        $data['Feb4'] =  $this->tranfusion->dataFebruari4();
        $data['Feb5'] =  $this->tranfusion->dataFebruari5();
        $data['Mar1'] =  $this->tranfusion->dataMaret1();
        $data['Mar2'] =  $this->tranfusion->dataMaret2();
        $data['Mar3'] =  $this->tranfusion->dataMaret3();
        $data['Mar4'] =  $this->tranfusion->dataMaret4();
        $data['Mar5'] =  $this->tranfusion->dataMaret5();
        $data['Apr1'] =  $this->tranfusion->dataApril1();
        $data['Apr2'] =  $this->tranfusion->dataApril2();
        $data['Apr3'] =  $this->tranfusion->dataApril3();
        $data['Apr4'] =  $this->tranfusion->dataApril4();
        $data['Apr5'] =  $this->tranfusion->dataApril5();
        $data['Mei1'] =  $this->tranfusion->dataMei1();
        $data['Mei2'] =  $this->tranfusion->dataMei2();
        $data['Mei3'] =  $this->tranfusion->dataMei3();
        $data['Mei4'] =  $this->tranfusion->dataMei4();
        $data['Mei5'] =  $this->tranfusion->dataMei5();
        $data['Jun1'] =  $this->tranfusion->dataJuni1();
        $data['Jun2'] =  $this->tranfusion->dataJuni2();
        $data['Jun3'] =  $this->tranfusion->dataJuni3();
        $data['Jun4'] =  $this->tranfusion->dataJuni4();
        $data['Jun5'] =  $this->tranfusion->dataJuni5();
        $data['Jul1'] =  $this->tranfusion->dataJuli1();
        $data['Jul2'] =  $this->tranfusion->dataJuli2();
        $data['Jul3'] =  $this->tranfusion->dataJuli3();
        $data['Jul4'] =  $this->tranfusion->dataJuli4();
        $data['Jul5'] =  $this->tranfusion->dataJuli5();
        $data['Agt1'] =  $this->tranfusion->dataAgustus1();
        $data['Agt2'] =  $this->tranfusion->dataAgustus2();
        $data['Agt3'] =  $this->tranfusion->dataAgustus3();
        $data['Agt4'] =  $this->tranfusion->dataAgustus4();
        $data['Agt5'] =  $this->tranfusion->dataAgustus5();
        $data['Sep1'] =  $this->tranfusion->dataSeptember1();
        $data['Sep2'] =  $this->tranfusion->dataSeptember2();
        $data['Sep3'] =  $this->tranfusion->dataSeptember3();
        $data['Sep4'] =  $this->tranfusion->dataSeptember4();
        $data['Sep5'] =  $this->tranfusion->dataSeptember5();
        $data['Okt1'] =  $this->tranfusion->dataOktober1();
        $data['Okt2'] =  $this->tranfusion->dataOktober2();
        $data['Okt3'] =  $this->tranfusion->dataOktober3();
        $data['Okt4'] =  $this->tranfusion->dataOktober4();
        $data['Okt5'] =  $this->tranfusion->dataOktober5();
        $data['Nov1'] =  $this->tranfusion->dataNovember1();
        $data['Nov2'] =  $this->tranfusion->dataNovember2();
        $data['Nov3'] =  $this->tranfusion->dataNovember3();
        $data['Nov4'] =  $this->tranfusion->dataNovember4();
        $data['Nov5'] =  $this->tranfusion->dataNovember5();
        $data['Dsb1'] =  $this->tranfusion->dataDesember1();
        $data['Dsb2'] =  $this->tranfusion->dataDesember2();
        $data['Dsb3'] =  $this->tranfusion->dataDesember3();
        $data['Dsb4'] =  $this->tranfusion->dataDesember4();
        $data['Dsb5'] =  $this->tranfusion->dataDesember5();

 
            $data['title'] = 'Graphical Report View of TranfusionReaction Data';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('eksekutif/graphics_transreact', $data);
            $this->load->view('templates/footer');
       
    }

  
}
