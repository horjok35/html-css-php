<?php  
 /* echo "Arda Kuba"; // echo: Ekrana yazı yazmak için //
  	echo "<br>";      // Boşluk //
   	echo "Kod Adı 2023";
   	echo "<br>";
    // Nokta birleştırır
   	echo "Arda Kuba"."<br>"."Kod Adı 2023";
   	$ad = "Arda Kuba"; // String //
   	$sayi = 3; // integer //
   	$noktalisayi = 99.99; // Float //
   	$bool = false; // Boolean //

   	echo "<br>".$ad; */

	$n1 = 5;
	$n2 = 10;
	$n3 = 15;
	$n4 = 20;

	function topla ($a, $b) {
		$toplam = $a + $b;
		echo "Toplam: ".$toplam."<br>";
	}

	topla ($n1, $n2);

	function cikar ($a, $b) {
		$cikar = $a - $b;
		echo "Çıkarma: ".$cikar."<br>";
	}

	cikar ($n3, $n4);

	function carpma ($a, $b) {
		$carpma = $a * $b;
		echo "Çarpma: ".$carpma."<br>";
	}

	carpma ($n1, $n2);

		function bolme ($a, $b) {
		$bolme = $a / $b;
		echo "Bölme: ".$bolme."<br>";
	}

	bolme ($n3, $n4);

	function ekranayazdir() {
		echo "Parametresiz Fonskiyon";
	}

	ekranayazdir();

	echo "<br>";

	$n5 = 10;
	$n5++;
	echo $n5;

	echo "<br>".$n5;

	$n6 = 16;
	echo sqrt($n6);  // karekök
	echo "<br>";
	echo pow ($n6, 2); // üstü

	$dizi = array("Arda", 1,"Kuba") //0. Element , 1.Element , 2.Element
	#foreach = Sonsuz döngü
	#while = olana kadar yap

	$zz = 5;
	while ($zz <= 10) {
		$zz += 1 ;
		echo $zz."<br>";
	}

	for ($i=0; $i <10; $i++) { 
		echo $i."<br>";
	}

	$newno = 100;

	if ($newno < 150)
	 {
		echo "Sansdasd"	
	}

	else
	{
		echo "Değil";
	}


	$new = 40
	switch ($new) {
		case '4':
			# code...
			break;
		
		default:
			# code...
			break;
	}

     
?>