<?php
    // class

use Produk as GlobalProduk;

class Produk{
        // property
        public  $camera = "camera",
                $recorder = "recoder",
                $harga = "harga",
                $typeConnector = "type",
                $merk = "merk",
                $typeCctv = "cctv";

        // method constructor.
        // variable dalam parameter construct adalah variable lokal,
        // tugas nya untuk mendapatkan nilai dari parameter instansiasi object,
        // lalu mengganti property dengan nilai yang di dapatkan dari parameter instansiasi object.
        public function __construct($camera, $recorder, $harga, $merk, $typeConnector, $typeCctv)
        {
            // penggantian nilai property dalam class
            $this->camera = $camera;
            $this->recorder = $recorder; 
            $this->harga = $harga;
            $this->merk = $merk;
            $this->typeConnector = $typeConnector;
            $this->typeCctv = $typeCctv;            
        }
        
        public function getInfoLengkap()
        {
            $str = "{$this->typeCctv} - {$this->camera} - {$this->recorder} - {$this->harga} - {$this->merk} | ";
            if ($this->typeCctv == "Analog") {
                $str .= "Connector (BNC)";
            }elseif ($this->typeCctv == "IP") {
                $str .= "Connector (RJ45)";
            }
            return $str;
        }
    }

    // class untuk mencetak informasi produk
    class CetakInforProduk{
        // method untuk menyusun format penulisan data
        public function cetak(Produk $produk)
        {
            $str ="Type Camera : {$produk->camera} | Type Recorder {$produk->recorder} | Price {$produk->harga} | Merk {$produk->merk} | ";
            // return untuk mengembalikan nilai variabel
            return $str;
        }
    }
    // instansiasi object, jika parameter di isi harus menggunakan functions __construct
    //  untuk memberi nilai dari parameter yang di isi.
    $produk1 = new Produk("CHik001","RHik001",1000,"Hikvision","","Analog");
    $produk2 = new Produk("CDha001","RDha001",1000,"Dahua","","IP");
    // Instansiasi objek cetak
    $infoproduk = new CetakInforProduk();
    // memanggil method cetak dan mengisi parameter dengan produk yang ingin di tampilkan
    // echo $infoproduk->cetak($produk1);
    // echo "<br>";
    // echo $infoproduk->cetak($produk2);
    echo "<br>";
    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

?>