<?php 

interface Item{
    public function add(?array $array);
    public function show();
}

class Mobil{
    public $merek;
    public $platNomor;
    public $warna;

    public function __construct($merek, $platNomor, $warna)
    {
        $this->merek = $merek;
        $this->platNomor = $platNomor;
        $this->warna = $warna;
    }
}


class KoleksiMobil implements Item{
    protected $koleksiku;

    public function __construct()
    {
        $this->koleksiku =  [
            new Mobil('Yamaha', 'L1529BI', 'Merah'), 
            new Mobil('Honda', 'L1529BI', 'Hitam'), 
            new Mobil('Koenigsegg', 'L1529BI', 'Hijau'), 
        ];
    }

    public function add(?array $item)
    {
        for ($i=0; $i < count($item); $i++) { 
            array_push($this->koleksiku, $item[$i]);
        }
    }

    public function show()
    {
        foreach ($this->koleksiku as $coll) {
            echo '<br>';
            echo 'Merek : ';
            echo $coll->merek;
            echo ', ';
            echo 'Plat Nomor : ';
            echo $coll->platNomor;
            echo ', ';
            echo 'Warna : ';
            echo $coll->warna;
        }
    }

}

$koleksi = new KoleksiMobil();
$arr = array();
array_push($arr, new Mobil('Toyota', 'AG4101FL', 'Hijau'));
array_push($arr, new Mobil('Daihatsu', 'AG4101FL', 'Silver'));
array_push($arr, new Mobil('BMW', 'AG4101FL', 'Hitam'));
array_push($arr, new Mobil('BMW', 'AG4101FL', 'Hitam'));
$koleksi->add($arr);
$koleksi->show();



