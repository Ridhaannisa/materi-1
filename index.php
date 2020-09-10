<?php

class Jilbab {
	private $merk, $bahan, $kategori, $warna, $harga;
 	
 	public function cetakharga(){
 		return $this->harga;
 	}
 	  
 	function penambahanwarna(){
 		return "Penambahan Warna dari Jilbab ini adalah warna " .$this->warna;
 	}

 	function prosespengiriman(){
 		return "menyesuaikan jilbab sesuai pesanan, packing jilbab dan siap dikirim ke alamat tujuan disertai ongkir";
 	}
}


class zoya extends Jilbab {

}
class Elzatta extends Jilbab {
	function freeongkir(){
		echo "Bebas Ongkir";
	}
	function prosespengiriman(){
		return "menyesuaikan jilbab sesuai pesanan, packing jilbab dan siap dikirim ke alamat tujuan tanpa biaya ongkir";
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

 echo "Zoya : ".$Zoya->prosespengiriman();
 echo "<br>";
 echo "<br>";
 echo "Elzatta : ".$Elzatta->prosespengiriman();