<?php
// Penduduk.php
class Tranfusion extends CI_Model {

	function __construct()
    {
        parent::__construct();
	}  
	
	// grafik total golongan darah per bulan
    	public function dataJanuari()
	{
		$data = $this->db->query("SELECT COUNT(id) as Jan FROM tranfusion WHERE MONTH(date) = '1' AND YEAR(date) = '2020'  ");
		return $data->result();
	}
	public function dataFebruari()
	{
		$data = $this->db->query("SELECT COUNT(id) as Feb FROM tranfusion WHERE MONTH(date) = '2'  AND YEAR(date) = '2020' ");
		return $data->result();
	}
	public function dataMaret()
	{
		$data = $this->db->query("SELECT COUNT(id) as Mar FROM tranfusion WHERE MONTH(date) = '3'  AND YEAR(date) = '2020' ");
		return $data->result();
	}
	public function dataApril()
	{
		$data = $this->db->query("SELECT COUNT(id) as Apr FROM tranfusion WHERE MONTH(date) = '4'  AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataMei()
	{
		$data = $this->db->query("SELECT COUNT(id) as Mei FROM tranfusion WHERE MONTH(date) = '5'  AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataJuni()
	{
		$data = $this->db->query("SELECT COUNT(id) as Jun FROM tranfusion WHERE MONTH(date) = '6'  AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataJuli()
    {
		$data = $this->db->query("SELECT COUNT(id) as Jul FROM tranfusion WHERE MONTH(date) = '7'  AND YEAR(date) = '2020' ");
		return $data->result();
	}
	public function dataAgustus()
	{
		$data = $this->db->query("SELECT COUNT(id) as Agt FROM tranfusion WHERE MONTH(date) = '8'  AND YEAR(date) = '2020' ");
		return $data->result();
	}
	public function dataSeptember()
	{
		$data = $this->db->query("SELECT COUNT(id) as Sep FROM tranfusion WHERE MONTH(date) = '9'  AND YEAR(date) = '2020' ");
		return $data->result();
	}
	public function dataOktober()
	{
		$data = $this->db->query("SELECT COUNT(id) as Okt FROM tranfusion WHERE MONTH(date) = '10'  AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataNovember()
	{
		$data = $this->db->query("SELECT COUNT(id) as Nov FROM tranfusion WHERE MONTH(date) = '11'  AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataDesember()
	{
		$data = $this->db->query("SELECT COUNT(id) as Dsb FROM tranfusion WHERE MONTH(date) = '12'  AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah januari
    // SELECT COUNT(blood_pressure) as hasil FROM tranfusion WHERE blood_pressure = '1'
	 public function dataJanuari1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jan1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '1' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJanuari2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jan2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '1' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJanuari3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jan3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '1' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJanuari4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jan4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '1' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJanuari5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jan5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '1' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah Februari
     public function dataFebruari1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Feb1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '2' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataFebruari2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Feb2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '2' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataFebruari3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Feb3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '2' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataFebruari4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Feb4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '2' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataFebruari5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Feb5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '2' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah Maret
     public function dataMaret1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mar1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '3' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMaret2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mar2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '3' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataMaret3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mar3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '3' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMaret4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mar4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '3' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMaret5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mar5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '3' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah April
     public function dataApril1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Apr1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '4' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataApril2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Apr2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '4' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataApril3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Apr3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '4' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataApril4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Apr4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '4' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataApril5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Apr5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '4' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah Mei
     public function dataMei1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mei1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '5' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMei2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mei2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '5' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataMei3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mei3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '5' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMei4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mei4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '5' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataMei5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Mei5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '5' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah Juni
     public function dataJuni1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jun1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '6' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJuni2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jun2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '6' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataJuni3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jun3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '6' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJuni4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jun4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '6' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJuni5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jun5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '6' AND YEAR(date) = '2020' ");
		return $data->result();
    }

     // data hasil reaksi tranfusi darah Juli
     public function dataJuli1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jul1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '7' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJuli2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jul2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '7' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataJuli3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jul3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '7' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJuli4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jul4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '7' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataJuli5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Jul5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '7' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah Agustus
     public function dataAgustus1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Agt1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '8' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataAgustus2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Agt2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '8' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataAgustus3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Agt3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '8' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataAgustus4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Agt4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '8' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataAgustus5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Agt5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '8' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah September
     public function dataSeptember1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Sep1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '9' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataSeptember2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Sep2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '9' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataSeptember3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Sep3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '9' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataSeptember4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Sep4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '9' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataSeptember5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Sep5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '9' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah Oktober
     public function dataOktober1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Okt1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '10' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataOktober2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Okt2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '10' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataOktober3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Okt3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '10' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataOktober4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Okt4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '10' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataOktober5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Okt5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '10' AND YEAR(date) = '2020' ");
		return $data->result();
    }

    // data hasil reaksi tranfusi darah November
     public function dataNovember1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Nov1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '11' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataNovember2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Nov2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '11' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataNovember3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Nov3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '11' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataNovember4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Nov4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '11' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataNovember5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Nov5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '11' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    
    // data hasil reaksi tranfusi darah Desember
     public function dataDesember1()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Dsb1 FROM tranfusion WHERE blood_pressure = '1' AND MONTH(date) = '12' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataDesember2()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Dsb2 FROM tranfusion WHERE blood_pressure = '2' AND MONTH(date) = '12' AND YEAR(date) = '2020' ");
		return $data->result();
    }
    public function dataDesember3()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Dsb3 FROM tranfusion WHERE blood_pressure = '3' AND MONTH(date) = '12' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataDesember4()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Dsb4 FROM tranfusion WHERE blood_pressure = '4' AND MONTH(date) = '12' AND YEAR(date) = '2020' ");
		return $data->result();
    }
     public function dataDesember5()
	{
		$data = $this->db->query("SELECT COUNT(blood_pressure) as Dsb5 FROM tranfusion WHERE blood_pressure = '5' AND MONTH(date) = '12' AND YEAR(date) = '2020' ");
		return $data->result();
    }



}