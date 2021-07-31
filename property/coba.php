<?php
    // class
    class Produk{
        // property
        public $camera = "camera",
        $recorder = "recoder",
        $harga = "harga";

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
    // instansiasi object
    $produk1 = new Produk();
    // bisa ubah property dengan cara ini
    $produk1->camera = "CHik001";
    $produk1->recorder = "RHik001";
    // var_dump($produk1);

    // panggil method
    echo $produk1->katalog();
?>