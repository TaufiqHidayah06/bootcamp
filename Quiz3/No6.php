<?php
class ValidasiKata {
    public function KataValidasi($input) {
        $kata = str_split($input);
        $kataunik = array_unique($kata);
        
        if (count($kata) === count($kataunik)) {
            return "unik";
        } else {
            return "tidak valid";
        }
    }
}

// Contoh penggunaan
$validator = new ValidasiKata();
$input1 = "Assalamualaikum";
$input2 = "Lima";
$output1 = $validator->KataValidasi($input1);
$output2 = $validator->KataValidasi($input2);
echo $input1 ." Kata ". $output1 ."\n"; 
echo $input2 ." Kata ". $output2 ; 
?>