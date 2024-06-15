<?php
use \Product\User\User as ServicesUser;
use \Services\User\User as ProductUser;

$product1 = new Game('PHP Edisi Lengkap', 'Alandrian', 'Erlangga', 20000, 50);

$product2 = new Komik('Laravel Basic', 'Surya', 'Erlangga', 'Harga', 100);
$product2->setJudul('Laravel Basic 2015');

$cetakProduct =  new CetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);

new ServicesUser;
new ProductUser;