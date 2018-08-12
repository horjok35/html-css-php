<?php 
// Sayı Arttırma	
	for ($i=0; $i <= 30 ; $i+=2) {

	echo $i."<br>";
	}

// Çift Tek 
	$sayi = 5;
	if ($sayi%2 == 0) {
		echo "Bu sayı çifttir.";
	}

	else {
		echo "Bu sayı tektir.";
	}

	$dizi  = array("Kod", "Adı", 2023);
	echo "<br>".$dizi[0];
	echo "<br>".$dizi[1];
	echo "<br>".$dizi[2];

	$rastgele = rand(1, 100);
	echo "<br>".$rastgele;

	$sayilar = array (3, 1, 7, 5, 8, 2);

	foreach ($sayilar as &$sayi) {
		echo $sayi."";	
	}

	echo "<br>";

//	Küçükten büyüğe
	sort($sayilar);
	foreach ($sayilar as &$sayi) {
		echo $sayi."";
	}

	echo "<br>";

	rsort($sayilar);
	foreach ($sayilar as &$sayi) {
		echo $sayi."";
	}

	echo "<br>";

//	Dizinin en büyüğü
	echo "En büyük eleman: ".max($sayilar);
	echo "<br>";
	echo "En küçük eleman: ".min($sayilar);

//	Küçük harfleri büyük harfe değiştirme
	$name = "arda kuba";
	echo "<br>".$name;
	echo "";
	echo strtoupper($name);

// Büyük harfleri küçük harfe değiştirme
	$degisken = "KOD ADI 2023";
	echo $degisken."<br>";
	echo strtolower($degisken);

	echo "<br>"."Türkiye'nin";
 ?>