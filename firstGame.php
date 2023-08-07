<?php
echo "Selamat datang\n";                  // \n artinya 'enter'
echo "--- Game Tebak Angka ---\n";
while(true){
   echo "Tebak angka antara 1 sampai 9\n";
   $computer = rand(1,9);                    // $ mendeklarasikan variable | rand() = random 
   echo "Masukkan Tebakanmu : ";
   $player = trim(fgets(STDIN));             // trim = menghapus space kosong | fgets = mengambil datanya| STDIN utk membaca karakter               
   if($player == $computer){
      echo"Menang. Angka komputer adalah $computer.\n";
      exit;
   }else{
      echo"Kalah. Angka tebakanmu $computer.\n";
   }
} 