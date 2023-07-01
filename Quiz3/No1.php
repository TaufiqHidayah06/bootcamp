<?php
class ATM
{
    private $saldo = [100000, 50000, 20000, 5000, 100, 50];

    public function tarik($angka)
    {
        $result = [];

        foreach ($this->saldo as $uang) {
            $count = floor($angka / $uang);
            if ($count > 0) {
                $result[$uang] = $count;
                $angka -= $count * $uang;
            }
        }

        return $result;
    }
}

$uang = 1572250;
$atm = new ATM();
$hasil = $atm->tarik($uang);

foreach ($hasil as $jumlah => $count) {
    echo "Jumlah uang pecahan Rp. " . number_format($jumlah) . ": " . $count . " lembar\n";
}
?>