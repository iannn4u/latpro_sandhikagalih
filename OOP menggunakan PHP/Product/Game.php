<?php
class Game extends Product implements InforProduct
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

  public function getInfo()
  {
    $str  = "{$this->judul} | {$this->getLabel()} | Rp. {$this->harga}";
    return $str;
  }
}