<?php
// Penduduk.php
class Source extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }  
    
    // data source total PMI
    public function dataPMI_total()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS PMI_total  FROM blood_order WHERE  source='PMI'   AND status='2' AND YEAR(date) = '2020'");
		return $data->result();
    }
    // data source total Hospital
    public function dataHospital_total()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Hospital_total  FROM blood_order WHERE  source='Hospital'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
    // data source total Donor
    public function dataDonor_total()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Donor_total  FROM blood_order WHERE  source='Donor'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
    // data source total other
    public function dataOther_total()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Other_total  FROM blood_order WHERE  source='Other'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
	
	// data source detail PMI
    	public function dataPMI_A()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS PMI_A  FROM blood_order WHERE blood_group='1' AND source='PMI'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
        public function dataPMI_B()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS PMI_B  FROM blood_order WHERE blood_group='2' AND source='PMI'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataPMI_O()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS PMI_O  FROM blood_order WHERE blood_group='3' AND source='PMI'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataPMI_AB()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS PMI_AB  FROM blood_order WHERE blood_group='4' AND source='PMI'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }

    	// data source detail Hospital
    public function dataHospital_A()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Hospital_A  FROM blood_order WHERE blood_group='1' AND source='Hospital'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataHospital_B()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Hospital_B  FROM blood_order WHERE blood_group='2' AND source='Hospital'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataHospital_O()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Hospital_O  FROM blood_order WHERE blood_group='3' AND source='Hospital'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataHospital_AB()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Hospital_AB  FROM blood_order WHERE blood_group='4' AND source='Hospital'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }

    	// data source detail Donor
    public function dataDonor_A()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Donor_A  FROM blood_order WHERE blood_group='1' AND source='Donor'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataDonor_B()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Donor_B  FROM blood_order WHERE blood_group='2' AND source='Donor'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataDonor_O()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Donor_O  FROM blood_order WHERE blood_group='3' AND source='Donor'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataDonor_AB()
	{
		$data = $this->db->query("SELECT blood_group, SUM(total) AS Donor_AB  FROM blood_order WHERE blood_group='4' AND source='Donor'  AND status='2'AND YEAR(date) = '2020'");
		return $data->result();
    }

    	




 
}