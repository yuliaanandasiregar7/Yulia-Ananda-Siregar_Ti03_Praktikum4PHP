<?php
require_once "class_persegipanjang.php";
$persegipanjang1 = new PersegiPanjang(7, 21);
$persegipanjang1 = new PersegiPanjang(14, 28);

echo "<br> Luas Persegi Panjang1 = ".$persegipanjang1->getLuas();
echo "<br> Keliling Persegi Panjang1 = ".$persegipanjang1->getKeliling();
echo "<br> Luas Persegi Panjang2 = ".$persegipanjang1->getLuas();
echo "<br> Keliling Persegi Panjang2 = ".$persegipanjang1->getKeliling();

?>