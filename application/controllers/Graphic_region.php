<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Graphic_region extends CI_Controller
{

     public function __construct()
	{
		parent::__construct();
		$this->load->model('region');
	}

     public function index()
     {
          // mengambil data user login
          $this->db->select('user.*,user_role.role');
          $this->db->from('user');
          $this->db->join('user_role', 'user.role_id = user_role.id');
          $this->db->where('email', $this->session->userdata('email'));
          $data['user'] = $this->db->get()->row_array();

          //data total pasien per area
          $data['s_pusat'] =  $this->region->dataSurabayaPusat();
          $data['s_timur'] =  $this->region->dataSurabayaTimur();
          $data['s_barat'] =  $this->region->dataSurabayaBarat();
          $data['s_utara'] =  $this->region->dataSurabayaUtara();
          $data['s_selatan'] =  $this->region->dataSurabayaSelatan();
          $data['other'] =  $this->region->dataOther();

          //data detail per region Pusat
          $data['Tegalsari'] =  $this->region->dataTegalsari();
          $data['Simokerto'] =  $this->region->dataSimokerto();
          $data['Genteng'] =  $this->region->dataGenteng();
          $data['Bubutan'] =  $this->region->dataBubutan();

          //data detail per region Timur
          $data['Gubeng'] =  $this->region->dataGubeng();
          $data['GunungAnyar'] =  $this->region->dataGunungAnyar();
          $data['Sukolilo'] =  $this->region->dataSukolilo();
          $data['Tambaksari'] =  $this->region->dataTambaksari();
          $data['Mulyorejo'] =  $this->region->dataMulyorejo();
          $data['Rungkut'] =  $this->region->dataRungkut();
          $data['TenggilisMejoyo'] =  $this->region->dataTenggilisMejoyo();

           //data detail per region Barat
          $data['Benowo'] =  $this->region->dataBenowo();
          $data['Pakal'] =  $this->region->dataPakal();
          $data['Asemrowo'] =  $this->region->dataAsemrowo();
          $data['Sukomanunggal'] =  $this->region->dataSukomanunggal();
          $data['Tandes'] =  $this->region->dataTandes();
          $data['Sambikerep'] =  $this->region->dataSambikerep();
          $data['Lakarsantri'] =  $this->region->dataLakarsantri();

          //data detail per region Utara
          $data['Bulak'] =  $this->region->dataBulak();
          $data['Kenjeran'] =  $this->region->dataKenjeran();
          $data['Semampir'] =  $this->region->dataSemampir();
          $data['PabeanCantian'] =  $this->region->dataPabeanCantian();
          $data['Krembangan'] =  $this->region->dataKrembangan();

           //data detail per region Selatan
          $data['Wonokromo'] =  $this->region->dataWonokromo();
          $data['Wonocolo'] =  $this->region->dataWonocolo();
          $data['Wiyung'] =  $this->region->dataWiyung();
          $data['KarangPilang'] =  $this->region->dataKarangPilang();
          $data['Jambangan'] =  $this->region->dataJambangan();
          $data['Gayungan'] =  $this->region->dataGayungan();
          $data['DukuhPakis'] =  $this->region->dataDukuhPakis();
          $data['Sawahan'] =  $this->region->dataSawahan();

          //data detail luar Surabaya
          $data['LuarSurabaya'] =  $this->region->dataLuarSurabaya();

               $data['title'] = 'Graphical Report View of Region Interest';
               $this->load->view('templates/header', $data);
               $this->load->view('templates/sidebar', $data);
               $this->load->view('templates/topbar', $data);
               $this->load->view('eksekutif/graphics_region', $data);
               $this->load->view('templates/footer');
     } 

}