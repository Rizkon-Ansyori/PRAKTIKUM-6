<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;
        charset=UTF-8" />
         <title>Belajar Form PHP</title>
    </head>
    <body>
        <!-- pada contoh dibawah kita mencoba menampilkan hasil dari form menggunakan metode
            "GET" yang mana metode ini akan mengirimkan data ke URL terlebih dahulu sebelum ditampung oleh "action"
            secara keamanan, metode GET ini tidak aman, karena kita bisa menerka Nama dan Email yang telah diisi
            di form lewat URL.
            selain dari segi keamanan yang lemah, metode GET juga dibatasi hanya 2047 karakter.
            Berbeda dengan metode POST yang tidak terbatas.
        -->
        <h2>Tutorial Belajar Form HTML - PHP </h2>
        <form action="proses.php" method="GET">
        Nama: <input type="text" name="nama" />
        <br />
        E-Mail: <input type="text" name="email" />
        <br />
        <input type="submit" value="Proses Data" >
        </form>
    </body>
</html>