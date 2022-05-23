<?php
include('ChiffresEnLettres.php');
$chiffre = 4566456.99;
if(stristr($chiffre,'.')){
	$chiffre = explode('.',$chiffre);
}
$lettre=new ChiffreEnLettre();
if(is_array($chiffre)){
	$lettre = $lettre->Conversion($chiffre[0]).' virgule '.$lettre->Conversion($chiffre[1]);
}
else{
	$lettre = $lettre->Conversion($chiffre);
}
echo $lettre;