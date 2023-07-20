<?php

class Region extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }  
	
	// data total pasien per area Surabaya Pusat
	public function dataSurabayaPusat()
	{
		$data = $this->db->query("SELECT COUNT(tranfusion.id) as s_pusat FROM tranfusion JOIN region ON tranfusion.region = region.id WHERE region.area  = 'Surabaya Pusat'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	//data detail total pasien region Surabaya Pusat
	public function dataTegalsari()
	{
		$data = $this->db->query("SELECT COUNT(id) as Tegalsari FROM tranfusion WHERE region = '9'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataSimokerto()
	{
		$data = $this->db->query("SELECT COUNT(id) as Simokerto FROM tranfusion WHERE region = '10'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataGenteng()
	{
		$data = $this->db->query("SELECT COUNT(id) as Genteng FROM tranfusion WHERE region = '11'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataBubutan()
	{
		$data = $this->db->query("SELECT COUNT(id) as Bubutan FROM tranfusion WHERE region = '12'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}


	// data total pasien per area Surabaya Timur
	public function dataSurabayaTimur()
	{
		$data = $this->db->query("SELECT COUNT(tranfusion.id) as s_timur FROM tranfusion JOIN region ON tranfusion.region = region.id WHERE region.area  = 'Surabaya Timur'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	//data detail total pasien region Surabaya Timur
	public function dataGubeng()
	{
		$data = $this->db->query("SELECT COUNT(id) as Gubeng FROM tranfusion WHERE region = '13'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataGunungAnyar()
	{
		$data = $this->db->query("SELECT COUNT(id) as GunungAnyar FROM tranfusion WHERE region = '14'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataSukolilo()
	{
		$data = $this->db->query("SELECT COUNT(id) as Sukolilo FROM tranfusion WHERE region = '15'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataTambaksari()
	{
		$data = $this->db->query("SELECT COUNT(id) as Tambaksari FROM tranfusion WHERE region = '16'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataMulyorejo()
	{
		$data = $this->db->query("SELECT COUNT(id) as Mulyorejo FROM tranfusion WHERE region = '17'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataRungkut()
	{
		$data = $this->db->query("SELECT COUNT(id) as Rungkut FROM tranfusion WHERE region = '18'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataTenggilisMejoyo()
	{
		$data = $this->db->query("SELECT COUNT(id) as TenggilisMejoyo FROM tranfusion WHERE region = '19'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}

	// data total pasien per area Surabaya Barat
	public function dataSurabayaBarat()
	{
		$data = $this->db->query("SELECT COUNT(tranfusion.id) as s_barat FROM tranfusion JOIN region ON tranfusion.region = region.id WHERE region.area  = 'Surabaya Barat'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	//data detail total pasien region Surabaya Barat
	public function dataBenowo()
	{
		$data = $this->db->query("SELECT COUNT(id) as Benowo FROM tranfusion WHERE region = '20'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataPakal()
	{
		$data = $this->db->query("SELECT COUNT(id) as Pakal FROM tranfusion WHERE region = '21'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataAsemrowo()
	{
		$data = $this->db->query("SELECT COUNT(id) as Asemrowo FROM tranfusion WHERE region = '22'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataSukomanunggal()
	{
		$data = $this->db->query("SELECT COUNT(id) as Sukomanunggal FROM tranfusion WHERE region = '23'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataTandes()
	{
		$data = $this->db->query("SELECT COUNT(id) as Tandes FROM tranfusion WHERE region = '24'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataSambikerep()
	{
		$data = $this->db->query("SELECT COUNT(id) as Sambikerep FROM tranfusion WHERE region = '25'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataLakarsantri()
	{
		$data = $this->db->query("SELECT COUNT(id) as Lakarsantri FROM tranfusion WHERE region = '26'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}

	// data total pasien per area Surabaya Utara
	public function dataSurabayaUtara()
	{
		$data = $this->db->query("SELECT COUNT(tranfusion.id) as s_utara FROM tranfusion JOIN region ON tranfusion.region = region.id WHERE region.area  = 'Surabaya Utara'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	//data detail total pasien region Surabaya Utara
	public function dataBulak()
	{
		$data = $this->db->query("SELECT COUNT(id) as Bulak FROM tranfusion WHERE region = '27'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataKenjeran()
	{
		$data = $this->db->query("SELECT COUNT(id) as Kenjeran FROM tranfusion WHERE region = '28'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataSemampir()
	{
		$data = $this->db->query("SELECT COUNT(id) as Semampir FROM tranfusion WHERE region = '29'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataPabeanCantian()
	{
		$data = $this->db->query("SELECT COUNT(id) as PabeanCantian FROM tranfusion WHERE region = '30'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataKrembangan()
	{
		$data = $this->db->query("SELECT COUNT(id) as Krembangan FROM tranfusion WHERE region = '31'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}

	// data total pasien per area Surabaya Selatan
	public function dataSurabayaSelatan()
	{
		$data = $this->db->query("SELECT COUNT(tranfusion.id) as s_selatan FROM tranfusion JOIN region ON tranfusion.region = region.id WHERE region.area  = 'Surabaya Selatan'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	//data detail total pasien region Surabaya Selatan
	public function dataWonokromo()
	{
		$data = $this->db->query("SELECT COUNT(id) as Wonokromo FROM tranfusion WHERE region = '32'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataWonocolo()
	{
		$data = $this->db->query("SELECT COUNT(id) as Wonocolo FROM tranfusion WHERE region = '33'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataWiyung()
	{
		$data = $this->db->query("SELECT COUNT(id) as Wiyung FROM tranfusion WHERE region = '34'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataKarangPilang()
	{
		$data = $this->db->query("SELECT COUNT(id) as KarangPilang FROM tranfusion WHERE region = '35'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataJambangan()
	{
		$data = $this->db->query("SELECT COUNT(id) as Jambangan FROM tranfusion WHERE region = '36'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataGayungan()
	{
		$data = $this->db->query("SELECT COUNT(id) as Gayungan FROM tranfusion WHERE region = '37'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataDukuhPakis()
	{
		$data = $this->db->query("SELECT COUNT(id) as DukuhPakis FROM tranfusion WHERE region = '38'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	public function dataSawahan()
	{
		$data = $this->db->query("SELECT COUNT(id) as Sawahan FROM tranfusion WHERE region = '39'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}

	// data total pasien area Luar Surabaya
	public function dataOther()
	{
		$data = $this->db->query("SELECT COUNT(tranfusion.id) as other FROM tranfusion JOIN region ON tranfusion.region = region.id WHERE region.area  = 'Other'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}
	//data detail total pasien luar Surabaya
	public function dataLuarSurabaya()
	{
		$data = $this->db->query("SELECT COUNT(id) as LuarSurabaya FROM tranfusion WHERE region = '40'AND YEAR(date) = '2020'");
		return $data->result();
		return $data->result();
	}

	




 
}