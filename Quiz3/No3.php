<?php

class MenghitungLuas {
    public function luasPersegi($sisi) {
        $luas = $sisi * $sisi;
        return $luas;
    }
    public function luasPersegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        return $luas;
    }
    public function luasLingkaran($jari) {
        $luas = 3.14 * $jari * $jari;
        return $luas;
    }
}
$hitungLuas = new MenghitungLuas();

$luasPersegi = $hitungLuas->luasPersegi(4);
echo "Luas persegi dengan sisi 4 adalah: " . $luasPersegi . "\n";

$luasPersegiPanjang = $hitungLuas->luasPersegiPanjang(5, 3);
echo "Luas persegi panjang dengan panjang 5 dan lebar 3 adalah: " . $luasPersegiPanjang . "\n";

$luasLingkaran = $hitungLuas->luasLingkaran(7);
echo "Luas lingkaran dengan jari-jari 7 adalah: " . $luasLingkaran . "\n";

?>