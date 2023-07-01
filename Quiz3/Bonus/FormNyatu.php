<!DOCTYPE html>
<html>

<head>
    <title>Form Add User</title>
</head>

<body>
    <h1>Form Add User</h1>
    <form method="POST" action="">
        <label for="user_input">Masukkan Nama, Umur, dan Kota:</label><br>
        <input type="text" id="user_input" name="user_input" placeholder="Format : Nama, Umur, Kota"><br><br>
        <input type="submit" value="Submit">
    </form><br><br>
</body>
<?php

class Form
{
    private static $idCounter = 1;
    private $id;
    private $nama;
    private $umur;
    private $kota;
    

    public function __construct($nama, $umur, $kota)
    {
        $this->id = self::$idCounter++;
        $this->nama = strtoupper($nama);
        $this->umur = $this->penulisan($umur);
        $this->kota = strtoupper($kota);
    }
    private function penulisan($umur)
    {
        $umur = preg_replace('/\b(TAHUN|THN|TH)\b/i', '', $umur);
        return trim($umur);
    }

    public function validasi()
    {
        if (empty($this->nama) || empty($this->umur) || empty($this->kota)) {
            return false;
        }

        return true;
    }

    public function save()
    {
        if ($this->validasi()) {
            echo "Nomor 1 : <br>";
            echo $this->nama." ".$this->umur." ".$this->kota."<br><br>";
            echo "Nomor 2 : <br>";
            echo "Nama : ".$this->nama.", Umur : ".$this->umur.", Kota : ".$this->kota."<br><br>";
            echo "Nomor 4 : <br>";
            echo 
            "<table border='1' style='text-align: center;'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Kota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>" .$this->id. "</td>
                        <td>" .$this->nama. "</td>
                        <td>" .$this->umur. "</td>
                        <td>" .$this->kota. "</td>
                    </tr>
                </tbody>
            </table>";
        } else {
            echo "Data tidak valid. Mohon isi semua field.";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['user_input'] ?? '';

    $data = explode(',', $input);

    $nama = $data[0] ?? '';
    $umur = $data[1] ?? '';
    $kota = $data[2] ?? '';

    $userForm = new Form($nama, $umur, $kota);
    $userForm->save();
}

?>

</html>