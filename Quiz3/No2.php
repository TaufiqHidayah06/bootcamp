<?php
class KonversiTanggal
{
    private $hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    private $bulan = array(
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );

    public function tanggaltext($tanggal)
    {
        $hari1 = $this->hari[date('w', strtotime($tanggal))];
        $bulan1 = $this->bulan[date('n', strtotime($tanggal))];
        $angka = date('j', strtotime($tanggal));
        $tahun = date('Y', strtotime($tanggal));

        return $hari1 . ', ' . $angka . ' ' . $bulan1 . ' ' . $tahun;
    }
}

$konversi = new KonversiTanggal();
echo $konversi->tanggaltext('2023-07-02');
?>