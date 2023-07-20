<?php

class Order extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }  
    
	// grafik total status order darah
    	public function dataJanuari()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJan FROM blood_order WHERE MONTH(date) = '1' AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function dataFebruari()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderFeb FROM blood_order WHERE MONTH(date) = '2' AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function dataMaret()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMar FROM blood_order WHERE MONTH(date) = '3' AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function dataApril()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderApr FROM blood_order WHERE MONTH(date) = '4' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataMei()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderMei FROM blood_order WHERE MONTH(date) = '5' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataJuni()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderJun FROM blood_order WHERE MONTH(date) = '6' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataJuli()
    {
		$data = $this->db->query("SELECT COUNT(id) as orderJul FROM blood_order WHERE MONTH(date) = '7'AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function dataAgustus()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderAgt FROM blood_order WHERE MONTH(date) = '8' AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function dataSeptember()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderSep FROM blood_order WHERE MONTH(date) = '9' AND YEAR(date) = '2020'");
		return $data->result();
	}
	public function dataOktober()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderOkt FROM blood_order WHERE MONTH(date) = '10'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataNovember()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderNov FROM blood_order WHERE MONTH(date) = '11' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataDesember()
	{
		$data = $this->db->query("SELECT COUNT(id) as orderDsb FROM blood_order WHERE MONTH(date) = '12' AND YEAR(date) = '2020'");
		return $data->result();
    }
    
    //tampilan detail status order per bulan Januari
	public function dataJanuari1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jan1 FROM blood_order WHERE status = '1' AND MONTH(date) = '1' AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataJanuari2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jan2 FROM blood_order WHERE status = '2' AND MONTH(date) = '1' AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataJanuari3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jan3 FROM blood_order WHERE status = '3' AND MONTH(date) = '1' AND YEAR(date) = '2020'");
		return $data->result();
    }

    // data status order bulan Februari
     public function dataFebruari1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Feb1 FROM blood_order WHERE status = '1' AND MONTH(date) = '2' AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataFebruari2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Feb2 FROM blood_order WHERE status = '2' AND MONTH(date) = '2' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataFebruari3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Feb3 FROM blood_order WHERE status = '3' AND MONTH(date) = '2' AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan Maret
     public function dataMaret1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Mar1 FROM blood_order WHERE status = '1' AND MONTH(date) = '3' AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataMaret2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Mar2 FROM blood_order WHERE status = '2' AND MONTH(date) = '3' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataMaret3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Mar3 FROM blood_order WHERE status = '3' AND MONTH(date) = '3' AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan April
     public function dataApril1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Apr1 FROM blood_order WHERE status = '1' AND MONTH(date) = '4' AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataApril2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Apr2 FROM blood_order WHERE status = '2' AND MONTH(date) = '4' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataApril3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Apr3 FROM blood_order WHERE status = '3' AND MONTH(date) = '4' AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan Mei
     public function dataMei1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Mei1 FROM blood_order WHERE status = '1' AND MONTH(date) = '5'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataMei2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Mei2 FROM blood_order WHERE status = '2' AND MONTH(date) = '5'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataMei3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Mei3 FROM blood_order WHERE status = '3' AND MONTH(date) = '5'AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan Juni
     public function dataJuni1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jun1 FROM blood_order WHERE status = '1' AND MONTH(date) = '6'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataJuni2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jun2 FROM blood_order WHERE status = '2' AND MONTH(date) = '6'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataJuni3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jun3 FROM blood_order WHERE status = '3' AND MONTH(date) = '6'AND YEAR(date) = '2020'");
		return $data->result();
    }


     // data status order bulan Juli
     public function dataJuli1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jul1 FROM blood_order WHERE status = '1' AND MONTH(date) = '7'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataJuli2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jul2 FROM blood_order WHERE status = '2' AND MONTH(date) = '7'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataJuli3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Jul3 FROM blood_order WHERE status = '3' AND MONTH(date) = '7'AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan Agustus
     public function dataAgustus1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Agt1 FROM blood_order WHERE status = '1' AND MONTH(date) = '8'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataAgustus2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Agt2 FROM blood_order WHERE status = '2' AND MONTH(date) = '8'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataAgustus3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Agt3 FROM blood_order WHERE status = '3' AND MONTH(date) = '8'AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan September
     public function dataSeptember1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Sep1 FROM blood_order WHERE status = '1' AND MONTH(date) = '9'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataSeptember2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Sep2 FROM blood_order WHERE status = '2' AND MONTH(date) = '9'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataSeptember3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Sep3 FROM blood_order WHERE status = '3' AND MONTH(date) = '9'AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan Oktober
     public function dataOktober1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Okt1 FROM blood_order WHERE status = '1' AND MONTH(date) = '10'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataOktober2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Okt2 FROM blood_order WHERE status = '2' AND MONTH(date) = '10'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataOktober3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Okt3 FROM blood_order WHERE status = '3' AND MONTH(date) = '10'AND YEAR(date) = '2020'");
		return $data->result();
    }


    // data status order bulan November
     public function dataNovember1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Nov1 FROM blood_order WHERE status = '1' AND MONTH(date) = '11'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataNovember2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Nov2 FROM blood_order WHERE status = '2' AND MONTH(date) ='11'AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataNovember3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Nov3 FROM blood_order WHERE status = '3' AND MONTH(date) = '11'AND YEAR(date) = '2020'");
		return $data->result();
    }

    
    // data status order bulan Desember
     public function dataDesember1()
	{
		$data = $this->db->query("SELECT COUNT(status) as Dsb1 FROM blood_order WHERE status = '1' AND MONTH(date) = '12'AND YEAR(date) = '2020'");
		return $data->result();
    }
     public function dataDesember2()
	{
		$data = $this->db->query("SELECT COUNT(status) as Dsb2 FROM blood_order WHERE status = '2' AND MONTH(date) = '12' AND YEAR(date) = '2020'");
		return $data->result();
    }
    public function dataDesember3()
	{
		$data = $this->db->query("SELECT COUNT(status) as Dsb3 FROM blood_order WHERE status = '3' AND MONTH(date) = '12' AND YEAR(date) = '2020'");
		return $data->result();
    }





 
}