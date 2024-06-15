<?php
class Komik extends Product implements InforProduct
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

  public function getInfo()
  {
    $str  = "{$this->judul} | {$this->getLabel()} | Rp. {$this->harga}";
    return $str;
  }
}