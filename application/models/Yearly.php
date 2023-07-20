<?php

class Yearly extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }  
    
    // data order total tahunan'
    	public function data_2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as order_2018 FROM blood_order WHERE YEAR(date) = '2018'");
		return $data->result();
    }
	public function data_2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as order_2019 FROM blood_order WHERE YEAR(date) = '2019'");
		return $data->result();
    }
    public function data_2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as order_2020 FROM blood_order WHERE YEAR(date) = '2020'");
		return $data->result();
    }

    // data order total bulanan tahun 2018
    	public function dataJan2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJan18 FROM blood_order WHERE MONTH(date) = '1' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    public function dataFeb2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderFeb18 FROM blood_order WHERE MONTH(date) = '2' AND YEAR(date) = '2018' ");
		return $data->result();
    }
     public function dataMar2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMar18 FROM blood_order WHERE MONTH(date) = '3' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    	public function dataApr2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderApr18 FROM blood_order WHERE MONTH(date) = '4' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    public function dataMei2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMei18 FROM blood_order WHERE MONTH(date) = '5' AND YEAR(date) = '2018' ");
		return $data->result();
    }
     public function dataJun2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJun18 FROM blood_order WHERE MONTH(date) = '6' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    	public function dataJul2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJul18 FROM blood_order WHERE MONTH(date) = '7' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    public function dataAgt2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderAgt18 FROM blood_order WHERE MONTH(date) = '8' AND YEAR(date) = '2018' ");
		return $data->result();
    }
     public function dataSep2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderSep18 FROM blood_order WHERE MONTH(date) = '9' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    	public function dataOkt2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderOkt18 FROM blood_order WHERE MONTH(date) = '10' AND YEAR(date) = '2018' ");
		return $data->result();
    }
    public function dataNov2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderNov18 FROM blood_order WHERE MONTH(date) = '11' AND YEAR(date) = '2018' ");
		return $data->result();
    }
     public function dataDsb2018()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderDsb18 FROM blood_order WHERE MONTH(date) = '12' AND YEAR(date) = '2018' ");
		return $data->result();
    }

     // data order total bulanan tahun 2019
    	public function dataJan2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJan19 FROM blood_order WHERE MONTH(date) = '1' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    public function dataFeb2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderFeb19 FROM blood_order WHERE MONTH(date) = '2' AND YEAR(date) = '2019' ");
		return $data->result();
    }
     public function dataMar2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMar19 FROM blood_order WHERE MONTH(date) = '3' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    	public function dataApr2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderApr19 FROM blood_order WHERE MONTH(date) = '4' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    public function dataMei2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMei19 FROM blood_order WHERE MONTH(date) = '5' AND YEAR(date) = '2019' ");
		return $data->result();
    }
     public function dataJun2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJun19 FROM blood_order WHERE MONTH(date) = '6' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    	public function dataJul2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJul19 FROM blood_order WHERE MONTH(date) = '7' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    public function dataAgt2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderAgt19 FROM blood_order WHERE MONTH(date) = '8' AND YEAR(date) = '2019' ");
		return $data->result();
    }
     public function dataSep2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderSep19 FROM blood_order WHERE MONTH(date) = '9' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    	public function dataOkt2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderOkt19 FROM blood_order WHERE MONTH(date) = '10' AND YEAR(date) = '2019' ");
		return $data->result();
    }
    public function dataNov2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderNov19 FROM blood_order WHERE MONTH(date) = '11' AND YEAR(date) = '2019' ");
		return $data->result();
    }
     public function dataDsb2019()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderDsb19 FROM blood_order WHERE MONTH(date) = '12' AND YEAR(date) = '2019' ");
		return $data->result();
    }

     // data order total bulanan tahun 2020
    	public function dataJan2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJan20 FROM blood_order WHERE MONTH(date) = '1' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataFeb2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderFeb20 FROM blood_order WHERE MONTH(date) = '2' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMar2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMar20 FROM blood_order WHERE MONTH(date) = '3' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    	public function dataApr2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderApr20 FROM blood_order WHERE MONTH(date) = '4' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataMei2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMei20 FROM blood_order WHERE MONTH(date) = '5' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJun2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJun20 FROM blood_order WHERE MONTH(date) = '6' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    	public function dataJul2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJul20 FROM blood_order WHERE MONTH(date) = '7' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataAgt2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderAgt20 FROM blood_order WHERE MONTH(date) = '8' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataSep2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderSep20 FROM blood_order WHERE MONTH(date) = '9' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    	public function dataOkt2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderOkt20 FROM blood_order WHERE MONTH(date) = '10' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataNov2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderNov20 FROM blood_order WHERE MONTH(date) = '11' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataDsb2020()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderDsb20 FROM blood_order WHERE MONTH(date) = '12' AND YEAR(date) = '2020' ");
		return $data->result();
    }



 
}