<?php
class CetakInfoProduct
{
  public  $daftarProduct = array();

  public function tambahProduct(Product $product)
  {
    $this->daftarProduct[] = $product;
  }

  public function cetak(Product $product)
  {
    $str = "DAFTAR PRODUCT : <br/>";

    foreach ($this->daftarProduct as $p) {
      $str .= "- {$p->getInfoProduct()} <br/>";
    }

    return $str;
  }
}
