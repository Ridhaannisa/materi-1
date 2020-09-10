<?php

class Jilbab {
	public $merk, $bahan, $kategori, $warna, $harga;
 	
 	public function cetakharga(){
 		return $this->harga;
 	}
 	  
 	function penambahanwarna(){
 		return "Penambahan Warna dari Jilbab ini adalah warna black, white dan cream " .$this->color;
 	}
}

$Zoya = new Jilbab;
$Zoya ->merk = "Zoya";
$Zoya ->bahan = "Polyester";
$Zoya ->kategori = "Segi_Empat";
$Zoya ->warna = "Grey";
$Zoya ->harga = "69.000";

$Zoya2 = new Jilbab;
$Zoya2 ->merk = "Zoya";
$Zoya2 ->bahan = "Polyester";
$Zoya2 ->kategori = "Segi_Empat";
$Zoya2 ->warna = "Grey";
$Zoya2 ->harga = "69.000";

echo "$Zoya2->bahan";
echo "<br>";
echo "$Zoya->bahan";

if($Zoya === $Zoya2){
	echo "sama";
} else{
	echo "tidak";
}