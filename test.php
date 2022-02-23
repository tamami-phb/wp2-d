#!/usr/bin/php

<?php
  echo "Halo, saya PHP\n";


  //for($i=1; $i<=10; $i++) {
  //  echo "urutan ke-$i\n";
  //}

  //shell_exec('touch index.html');
  //shell_exec('echo "<h1>Hai all</h1>" > index.html');

  //$output = shell_exec('ls -lart');
  //echo "$output";

  $nama = readline('Nama Anda : ');
  echo "Hai, apa kabar $nama\n";

  echo "Menerima pesan dari $argv[1]\n";
?>
