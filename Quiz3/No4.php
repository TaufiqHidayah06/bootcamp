<?php
class KelipatanTiga {
    public function proses($n) {
      for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0) {
          echo "kelipatan tiga";
        } else {
          echo $i;
        }
        echo "\n";
      }
    }
  }
  
  // Contoh penggunaan
  $printer = new KelipatanTiga();
  $printer->proses(10);
?>