<?php
class SingkatanNama {
  private $inputkata;
  
  public function __construct($kata) {
    $this->inputkata = $kata;
  }
  
  public function getSingkatan() {
    $kalimat = explode(" ", $this->inputkata);
    $inisial = "";
    
    foreach ($kalimat as $kalimats) {
      $inisial .= strtoupper(substr($kalimats, 0, 1));
    }
    
    return $inisial;
  }
}

$input = "DADANG KURNIAWAN";
$converter = new SingkatanNama($input);
$output = $converter->getSingkatan();
echo $input ." Singkatannya ".$output ."\n"; 

$input2 = "SMK PASUNDAN SUBANG";
$converter2 = new SingkatanNama($input2);
$output2 = $converter2->getSingkatan();
echo $input2 ." Singkatannya ".$output2;