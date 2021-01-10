<?php

if (isset($_POST['submit'])) {
  $_METIN  = $_POST['ad'];
$i=1;
$sayac=0;


while ($i<=strlen($_METIN)) {
if ($_METIN[$i]==='1' ||$_METIN[$i]==='1'
||$_METIN[$i]==='2'
||$_METIN[$i]==='3'
||$_METIN[$i]==='4'
||$_METIN[$i]==='5'
||$_METIN[$i]==='6'
||$_METIN[$i]==='7'
||$_METIN[$i]==='8'
||$_METIN[$i]==='9'
||$_METIN[$i]==='@'
||$_METIN[$i]==='>'
||$_METIN[$i]==='!'
||$_METIN[$i]==='£'
||$_METIN[$i]==='^'
||$_METIN[$i]==='$'
||$_METIN[$i]==='%'
||$_METIN[$i]==='½'
||$_METIN[$i]==='/'
||$_METIN[$i]==='{'
||$_METIN[$i]==='['
||$_METIN[$i]==='('
||$_METIN[$i]===']'
||$_METIN[$i]===')'
||$_METIN[$i]==='}'
||$_METIN[$i]==='='
||$_METIN[$i]==='?'
||$_METIN[$i]==='*'
||$_METIN[$i]==='+'
||$_METIN[$i]==='-'
||$_METIN[$i]==='_'
||$_METIN[$i]==='|'
||$_METIN[$i]==='.'
||$_METIN[$i]==='`'
||$_METIN[$i]===';'
		){
		$sayac=1;
	Header("Location:index.php?durum=hataKodu1");
	}
	$i++;
}
 $_METIN  = $_POST['soyad'];
$i=1;
$sayac=0;
while ($i<=strlen($_METIN)) {
	if ($_METIN[$i]==='1' ||$_METIN[$i]==='1'
	||$_METIN[$i]==='2'
||$_METIN[$i]==='3'
||$_METIN[$i]==='4'
||$_METIN[$i]==='5'
||$_METIN[$i]==='6'
||$_METIN[$i]==='7'
||$_METIN[$i]==='8'
||$_METIN[$i]==='9'
||$_METIN[$i]==='@'
||$_METIN[$i]==='>'
||$_METIN[$i]==='!'
||$_METIN[$i]==='£'
||$_METIN[$i]==='^'
||$_METIN[$i]==='$'
||$_METIN[$i]==='%'
||$_METIN[$i]==='½'
||$_METIN[$i]==='/'
||$_METIN[$i]==='{'
||$_METIN[$i]==='['
||$_METIN[$i]==='('
||$_METIN[$i]===']'
||$_METIN[$i]===')'
||$_METIN[$i]==='}'
||$_METIN[$i]==='='
||$_METIN[$i]==='?'
||$_METIN[$i]==='*'
||$_METIN[$i]==='+'
||$_METIN[$i]==='-'
||$_METIN[$i]==='_'
||$_METIN[$i]==='|'
||$_METIN[$i]==='.'
||$_METIN[$i]==='`'||$_METIN[$i]===';'
		){
		$sayac=1;
	Header("Location:index.php?durum=hataKodu2");
	}
	$i++;
}

	
  $_METIN  = $_POST['adSoyad'];
$i=1;
$sayac=0;
while ($i<=strlen($_METIN)) {
	if ($_METIN[$i]==='0' ||$_METIN[$i]==='1'
	||$_METIN[$i]==='2'
||$_METIN[$i]==='3'
||$_METIN[$i]==='4'
||$_METIN[$i]==='5'
||$_METIN[$i]==='6'
||$_METIN[$i]==='7'
||$_METIN[$i]==='8'
||$_METIN[$i]==='9'
||$_METIN[$i]==='@'
||$_METIN[$i]==='>'
||$_METIN[$i]==='!'
||$_METIN[$i]==='£'
||$_METIN[$i]==='^'
||$_METIN[$i]==='$'
||$_METIN[$i]==='%'
||$_METIN[$i]==='½'
||$_METIN[$i]==='/'
||$_METIN[$i]==='{'
||$_METIN[$i]==='['
||$_METIN[$i]==='('
||$_METIN[$i]===']'
||$_METIN[$i]===')'
||$_METIN[$i]==='}'
||$_METIN[$i]==='='
||$_METIN[$i]==='?'
||$_METIN[$i]==='*'
||$_METIN[$i]==='+'
||$_METIN[$i]==='-'
||$_METIN[$i]==='_'
||$_METIN[$i]==='|'
||$_METIN[$i]==='.'
||$_METIN[$i]==='`'||$_METIN[$i]===';'
		){
		$sayac=1;
	Header("Location:index.php?durum=hataKodu3");
	}
	$i++;
}
$pasaportNumber=$_POST['pasaportNumber'];
$pasaportNumber=mb_strtoupper($pasaportNumber,"UTF-8");
	if ($pasaportNumber[0]==='0' ||$pasaportNumber[0]==='1'
	||$_METIN[0]==='2'
||$pasaportNumber[0]==='3'
||$pasaportNumber[0]==='4'
||$pasaportNumber[0]==='5'
||$pasaportNumber[0]==='6'
||$pasaportNumber[0]==='7'
||$pasaportNumber[0]==='8'
||$pasaportNumber[0]==='9') {
				$sayac=1;
	Header("Location:index.php?durum=hataKodu4");
	}
    $metin    = $_POST['diplomaNot'];
    $bul      = ",";
    $degistir = ".";
$metin = str_replace($bul, $degistir, $metin);
$diplomaNot=floatval($metin);
if ($diplomaNot<=4) {
	$diplomaNot=$diplomaNot*25;

}





echo $_POST['deneme'];

if ($sayac===0) {

$m="kullanici_resimler/pasaport_resim/".$_POST['kimlik'].$_POST['pasaportNumber'].$_FILES['pasaportEkleyin']['name'];
move_uploaded_file($_FILES['pasaportEkleyin']['tmp_name'],$m);

$m="kullanici_resimler/diploma_resim/".$_POST['kimlik'].$_POST['pasaportNumber'].$_FILES['diplomaEkleyin']['name'];
move_uploaded_file($_FILES['diplomaEkleyin']['tmp_name'],$m);

$m="kullanici_resimler/transkript_resim/".$_POST['kimlik'].$_POST['pasaportNumber'].$_FILES['transkriptEkleyin']['name'];
move_uploaded_file($_FILES['transkriptEkleyin']['tmp_name'],$m);



$total = count($_FILES['dilBelgesiEkleyin']['name']);


if ($total>2 || $total===0 ) {


Header("Location:index.php?durum=hataKodu5");

}

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['dilBelgesiEkleyin']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "kullanici_resimler/dilBelgesi_resim/" . $_FILES['dilBelgesiEkleyin']['name'][$i];

    move_uploaded_file($tmpFilePath, $newFilePath);
  }
}


	Header("Location:index.php?durum=basarili");



}
}
?>