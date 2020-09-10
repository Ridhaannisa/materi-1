<?php

class Jilbab {
	private $merk, $bahan, $kategori, $warna, $harga;
 	
 	public function cetakharga(){
 		return $this->harga;
 	}
 	  
 	function penambahanwarna(){
 		return "Penambahan Warna dari Jilbab ini adalah warna " .$this->warna;
 	}
}

class zoya extends Jilbab {

}
class Elzatta extends Jilbab {
	function freeongkir(){
		echo "Bebas Ongkir";

	}
}

$Zoya = new Zoya;
$Zoya ->merk = "Zoya";
$Zoya ->bahan = "Polyester";
$Zoya ->kategori = "Segi_Empat";
$Zoya ->warna = "Grey";
$Zoya ->harga = "69.000";

$Elzatta = new Elzatta;
$Elzatta ->merk = "Elzatta";
$Elzatta ->bahan = "Premium Spandex";
$Elzatta ->kategori = "instan";
$Elzatta ->warna = "Black";
$Elzatta ->harga = "65.000";

 echo $Elzatta->penambahanwarna();