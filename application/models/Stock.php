<?php
// Penduduk.php
class Stock extends CI_Model {

	function __construct()
    {
        parent::__construct();
 
	}  
	
	// grafik total golongan darah A,B,O,AB
    	public function grafikA()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS A  FROM blood_order WHERE blood_group='1' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikB()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS B FROM blood_order  WHERE blood_group='2' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikO()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS O FROM blood_order  WHERE blood_group='3' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikAB()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS AB FROM blood_order   WHERE blood_group='4' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	
	// grafik gol A tipe darah PRC,WB,TC mulai
	public function grafikA1()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeA1 FROM blood_order WHERE blood_group='1' AND blood_type='1' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikA2()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeA2  FROM blood_order WHERE blood_group='1' AND blood_type='2' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikA3()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeA3  FROM blood_order WHERE blood_group='1' AND blood_type='3' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}

	// grafik gol B tipe darah PRC,WB,TCmulai
	public function grafikB1()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeB1  FROM blood_order WHERE blood_group='2' AND blood_type='1' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikB2()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeB2  FROM blood_order WHERE blood_group='2' AND blood_type='2' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikB3()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeB3  FROM blood_order WHERE blood_group='2' AND blood_type='3' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}

	// grafik gol O tipe darah PRC,WB,TCmulai
	public function grafikO1()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeO1  FROM blood_order WHERE blood_group='3' AND blood_type='1' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikO2()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeO2  FROM blood_order WHERE blood_group='3' AND blood_type='2' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikO3()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeO3  FROM blood_order WHERE blood_group='3' AND blood_type='3' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}

	// grafik gol AB tipe darah PRC,WB,TCmulai
	public function grafikAB1()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeAB1  FROM blood_order WHERE blood_group='4' AND blood_type='1' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikAB2()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeAB2  FROM blood_order WHERE blood_group='4' AND blood_type='2' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function grafikAB3()
	{
		$data = $this->db->query("SELECT status, SUM(total) AS tipeAB3  FROM blood_order WHERE blood_group='4' AND blood_type='3' AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
	}
	
	




 
}