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
        public function __construct($camera, $recorder, $harga, $merk)
        {
            // penggantian nilai property dalam class
            $this->camera = $camera;
            $this->recorder = $recorder; 
            $this->harga = $harga;
            $this->merk = $merk;      
        }
        
        public function getInfoLengkap()
        {
            $str = "{$this->camera} - {$this->recorder} - {$this->harga} - {$this->merk}";
            return $str;
        }
    }

    class IP extends GlobalProduk{
        public function getInfoIp()
        {
            $str = "{$this->getInfoLengkap()} - RJ45 -  IP";
            return $str;
        }
    }

    class Analog extends GlobalProduk{
        public function getInfoAnalog()
        {
            $str = "{$this->getInfoLengkap()} - BNC - Analog";
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
    $produk1 = new Analog("CHik001","RHik001",1000,"Hikvision");
    $produk2 = new IP("CDha001","RDha001",1000,"Dahua");
    // Instansiasi objek cetak
    // $infoproduk = new CetakInforProduk();
    // memanggil method cetak dan mengisi parameter dengan produk yang ingin di tampilkan
    // echo $infoproduk->cetak($produk1);
    // echo "<br>";
    // echo $infoproduk->cetak($produk2);
    // echo "<br>";
    echo $produk1->getInfoAnalog();
    echo "<br>";
    echo $produk2->getInfoIp();

?>