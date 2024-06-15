<?php
abstract class Product
{
  private $judul, $penulis, $penerbit, $harga;
  protected $diskon = 0;

  public function __construct($judul = 'Judul', $penulis = 'Penulis', $penerbit = 'Penerbit', $harga = 'Harga')
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfoProduct();
  
  public function getInfo()
  {
    $str  = "{$this->judul} | {$this->getLabel()} | Rp. {$this->harga}";
    return $str;
  }
}

class Komik extends Product
{
  public $jumlahHalaman;

  public function __construct($judul = 'Judul', $penulis = 'Penulis', $penerbit = 'Penerbit', $harga = 'Harga', $jumlahHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jumlahHalaman = $jumlahHalaman;
  }

  public function getHarga()
  {
    return $this->getHarga() - ($this->getHarga() * $this->diskon / 100);
  }

  public function getInfoProduct()
  {
    $str  = "Komik | " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";
    return $str;
  }
}

class Game extends Product
{
  public $waktuMain;

  public function __construct($judul = 'Judul', $penulis = 'Penulis', $penerbit = 'Penerbit', $harga = 'Harga', $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function getHarga()
  {
    return $this->getHarga() - ($this->getHarga() * $this->diskon / 100);
  }

  public function getInfoProduct()
  {
    $str  = "Game | " . $this->getInfo() . " - {$this->waktuMain} Jam.";
    return $str;
  }
}

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

$product1 = new Game('PHP Edisi Lengkap', 'Alandrian', 'Erlangga', 20000, 50);

$product2 = new Komik('Laravel Basic', 'Surya', 'Erlangga', 'Harga', 100);
$product2->setJudul('Laravel Basic 2015');

$cetakProduct =  new CetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);