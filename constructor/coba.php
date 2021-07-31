<?php
    // class
    class Produk{
        // property
        public $camera = "camera",
        $recorder = "recoder",
        $harga = "harga";

        // method constructor.
        // variable dalam parameter construct adalah variable lokal,
        // tugas nya untuk mendapatkan nilai dari parameter instansiasi object,
        // lalu mengganti property dengan nilai yang di dapatkan dari parameter instansiasi object.
        public function __construct($camera, $recorder, $harga)
        {
            // penggantian nilai property dalam class
            $this->camera = $camera;
            $this->recorder = $recorder; 
            $this->harga = $harga;
        }
        
        // method
        public function katalog()
        {
            // this untuk mengambil property di dalam class,
            // kalo tidak memakai this property yang dibuat didalam
            // function adalah property baru.
            return "$this->camera, 
                    $this->recorder, 
                    $this->harga";
        }        
    }
    // instansiasi object, jika parameter di isi harus menggunakan functions __construct
    //  untuk memberi nilai dari parameter yang di isi.
    $produk1 = new Produk("CHik001","RHik001",1000);
    // panggil method
    echo "IP : " . $produk1->katalog();
    echo "<br>";
    $produk2 = new Produk("CDha001","RDha001",1000);
    // panggil method
    echo "Analog : " . $produk2->katalog();
?>