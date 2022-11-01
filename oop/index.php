<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php 

    require_once "zodiak.php";

    //require_once "rumus.php";
    // $rumus = new Rumus;
    // echo $rumus->luasLingkaran(5);
    // echo '<br>';
    // echo $rumus->kelilingLingkaran(5);
    // echo '<br>';
    // echo $rumus->luasPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus->kelilingPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus->luasSegitiga(5,3);
    // echo '<br>';
    // echo $rumus->kelilingSegitiga(5);
    // echo '<br>';

    //$zodiak = new Zodiak;
    //echo $zodiak->zodiak(2,1);

    if (isset($_POST['kirim'])) {
        $b = $_POST['bulan'];
        $t = $_POST['tanggal'];
        echo Zodiak::zodiak($b,$t);
    }
?>