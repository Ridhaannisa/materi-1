<?php

class Jilbab {
	public $merk, $bahan, $kategori, $warna, $harga;
 	
 	public function cetakbahan(){
 		return $this->bahan;
 	}
 	  

}

$Zoya = new Jilbab;
$Zoya ->merk = "Zoya";
$Zoya ->bahan = "Polyester";
$Zoya ->kategori = "Segi_Empat";
$Zoya ->warna = "Grey";
$Zoya ->harga = number_format(69000);


echo "bahan " .$Zoya->cetakbahan();