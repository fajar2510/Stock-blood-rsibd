<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Graphic_order extends CI_Controller
{

     public function __construct()
	{
		parent::__construct();
		$this->load->model('order'); 
	}

     public function index()
    {
         // mengambil data user login
        $this->db->select('user.*,user_role.role');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id = user_role.id');
        $this->db->where('email', $this->session->userdata('email'));
        $data['user'] = $this->db->get()->row_array();

        //data total status order per bulan
        $data['orderJan'] =  $this->order->dataJanuari();
        $data['orderFeb'] =  $this->order->dataFebruari();
        $data['orderMar'] =  $this->order->dataMaret();
        $data['orderApr'] =  $this->order->dataApril();
        $data['orderMei'] =  $this->order->dataMei();
        $data['orderJun'] =  $this->order->dataJuni();
        $data['orderJul'] =  $this->order->dataJuli();
        $data['orderAgt'] =  $this->order->dataAgustus();
        $data['orderSep'] =  $this->order->dataSeptember();
        $data['orderOkt'] =  $this->order->dataOktober();
        $data['orderNov'] =  $this->order->dataNovember();
        $data['orderDsb'] =  $this->order->dataDesember();


         //data hasil reaksi tranfusi
        $data['Jan1'] =  $this->order->dataJanuari1();
        $data['Jan2'] =  $this->order->dataJanuari2();
        $data['Jan3'] =  $this->order->dataJanuari3();
        $data['Feb1'] =  $this->order->dataFebruari1();
        $data['Feb2'] =  $this->order->dataFebruari2();
        $data['Feb3'] =  $this->order->dataFebruari3();
        $data['Mar1'] =  $this->order->dataMaret1();
        $data['Mar2'] =  $this->order->dataMaret2();
        $data['Mar3'] =  $this->order->dataMaret3();
        $data['Apr1'] =  $this->order->dataApril1();
        $data['Apr2'] =  $this->order->dataApril2();
        $data['Apr3'] =  $this->order->dataApril3();
        $data['Mei1'] =  $this->order->dataMei1();
        $data['Mei2'] =  $this->order->dataMei2();
        $data['Mei3'] =  $this->order->dataMei3();
        $data['Jun1'] =  $this->order->dataJuni1();
        $data['Jun2'] =  $this->order->dataJuni2();
        $data['Jun3'] =  $this->order->dataJuni3();
        $data['Jul1'] =  $this->order->dataJuli1();
        $data['Jul2'] =  $this->order->dataJuli2();
        $data['Jul3'] =  $this->order->dataJuli3();
        $data['Agt1'] =  $this->order->dataAgustus1();
        $data['Agt2'] =  $this->order->dataAgustus2();
        $data['Agt3'] =  $this->order->dataAgustus3();
        $data['Sep1'] =  $this->order->dataSeptember1();
        $data['Sep2'] =  $this->order->dataSeptember2();
        $data['Sep3'] =  $this->order->dataSeptember3();
        $data['Okt1'] =  $this->order->dataOktober1();
        $data['Okt2'] =  $this->order->dataOktober2();
        $data['Okt3'] =  $this->order->dataOktober3();
        $data['Nov1'] =  $this->order->dataNovember1();
        $data['Nov2'] =  $this->order->dataNovember2();
        $data['Nov3'] =  $this->order->dataNovember3();
        $data['Dsb1'] =  $this->order->dataDesember1();
        $data['Dsb2'] =  $this->order->dataDesember2();
        $data['Dsb3'] =  $this->order->dataDesember3();


            $data['title'] = 'Graphical Report View of Order Request';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('eksekutif/graphics_order', $data);
            $this->load->view('templates/footer');
       
    }

  
}
