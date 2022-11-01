<?php 
    $menu=["Home","Kontak","Sejarah","Jurusan"];
    $judul=["Apel","Jeruk","Mangga","Duren"];
    $deskripsi=[
        "Apel adalah buah ...",
        "Jeruk adalah buah ...",
        "Mangga adalah buah ...",
        "Duren adalah buah ..."
    ];
    for ($i=0; $i<4; $i++) { 
        echo "<li>$menu[$i]</i>";
    }
    $link=[
        "home" => "<a href='#'>Home</a>",
        "kontak" => "<a href='#'>Kontak</a>",
        "sejarah" => "<a href='#'>Sejarah</a>",
        "jurusan" => "<a href='#'>Jurusan</a>"
    ];
    echo "<br>";
    echo $link["home"];

    foreach ($link as $key => $value) {
        echo '<li>';
        echo $value;
        echo '</li>';
    }

    // $tanggal = 31;
    // if ($tanggal >= 1 && $tanggal <=31) {
    //     echo 'Benar';
    // }else{
    //     echo 'Salah';
    // }

    $nilai = 75;
    if ($nilai >= 0 && $nilai <= 100) {
            if ($nilai >= 70) {
                if ($nilai == 71) {
                    echo 'KKM';
                }
                if ($nilai > 71 && $nilai < 80 ) {
                    echo 'C';
                }
                if ($nilai > 80 && $nilai > 89) {
                    echo 'B';
                }
                if ($nilai > 90 && $nilai >100 ) {
                    echo 'A';
                }
            }else {
                echo 'Tidak Lulus';
            }
    }else{
        echo 'Nilai Salah';
    }
    
    echo '<br>';
    
    function zodiak($t,$b)
    {
        $tanggal = $t;
        $bulan = $b;
        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
            if ($bulan == 1) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 2) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 3) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 4) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 5) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 6) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 7) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 8) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 9) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 10) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 11) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
            if ($bulan == 12) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo 'Zodiak Anda Capricorn';
                }else{
                    echo 'Zodiak Anda Pisces';
                }
            }
        }else{
            echo 'Tanggal / Bulan Salah';
        }
    }

    for ($i=1; $i < 13 ; $i++) { 
        zodiak(1,$i);
        echo '<br>';
    }
?>