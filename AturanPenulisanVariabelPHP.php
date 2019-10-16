<!-- Ada beberapa aturan dalam penulisan variabel di PHP yaitu :
     1. Tidak boleh diawali dengan angka
     2. Tidak boleh mengandung spasi
     3. Tidak boleh mengandung karakter khusus -->
<?php
 $i;
 $nama;
 $Umur;
 $_lokasi_memori;
 $ANGKA_MAKSIMUM;
?>

<!-- Dan berikut adalah contoh penulisan variabel yang salah: -->

<?php
$3hati;
$Polije sip;
$ Tif2*18;
?>

<!-- Variabel PHP bersifat case sensitif. variabel yang di tulis harus konsisten. contohnya variabel $Polije berbeda dengan variabel 
     $polije karena perbedaan satu huruf saja.
     berikut adalah contoh kesalahan program yang disebabkan perbedaan penulisan variabel. -->

    <?php
 $andi="Andi";
 echo $Andi; // Notice: Undefined variable: Andi
?>

<!-- Pemanggilan variabel Andi akan "error" karena seharusnya echo $Andi adalah echo $andi -->

<!-- Cara Pemberian Nilai pada variabel --> 
<?php
 $nama = "andi";
 $umur = “b17”;
 $pesan = "Saya sedang belajar PHP di jti.polije.com";
?>

<!-- Pemberian nilai pada variabel disebut assignment atau bisa juga disebut inisialisasi.
     jika pada java atau bahasa pemprograman yang lain harus di deklarasikan dulu, maka pada php variabel tidak perlu di 
     deklarasikan. karena PHP akan langsung memberi nilai otomatis pada setiap variabel --> 


