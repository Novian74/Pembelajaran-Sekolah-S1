<?php 
    require_once "db.php";
    if (isset($_GET['id'])& isset($_GET['menu'])) {
        $id = $_GET['id'];
        $menu = $_GET['menu'];
        if ($menu == 'hapus') {
            $nama = '';
            $sekolah = '';
            $alamat = '';
            $sql = "DELETE FROM tblteman WHERE idteman=$id";
            $koneksi->query($sql);
            header("location:http://localhost:8080/projek-tentangbuah.com/")
        }else{
            $sql = "SELECT * FROM tblteman WHERE idteman=$id";
            $hasil = $koneksi->query($sql);
            $row = $hasil->fetch_array();
                $nama = $row[1];
                $sekolah = $row[2];
                $alamat = $row[3];
                
            
            
        }
    }else{
        $nama = '';
        $sekolah = '';
        $alamat = '';
    }
?>

<form action="" method="post">
    Teman
    <input type="text" name="teman" value="<?= $nama ?>"><br>
    Asal Sekolah
    <input type="text" name="sekolah" value="<?= $sekolah ?>"><br>
    Alamat
    <input type="text" name="alamat" value="<?= $alamat ?>"><br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php 

    require_once "db.php";

    if (isset($_POST['simpan'])) {
        if (isset($_GET['menu'])) {
            $id = $_GET['id'];
            $teman = $_POST['teman'];
            $sekolah = $_POST['sekolah'];
            $alamat = $_POST['alamat'];
            $sql = "UPDATE tblteman SET nama='$teman',asalsekolah='$sekolah',alamat='$alamat' WHERE idteman=$id";
            $koneksi->query($sql);
            header("location:http://localhost:8080/projek-tentangbuah.com/");
        }else{
            $teman = $_POST['teman'];
            $sekolah = $_POST['sekolah'];
            $alamat = $_POST['alamat'];
            $sql = "INSERT INTO tblteman (nama,asalsekolah,alamat) VALUES ('$teman','$sekolah','$alamat')";
            $koneksi->query($sql);
        }
    }

    $sql = "SELECT * FROM tblteman";

    // echo $sql;

    $hasil = $koneksi->query($sql);

    // print_r($hasil);

    // echo $hasil->num_rows;

    echo '<table border>';
    echo '<tr>
            <th>ID</th>
            <th>Nama Teman</th>
            <th>Asal Sekolah</th>
            <th>Alamat</th>
            <th>Hapus</th>
            <th>Ubah</th>
        </tr>';

    
    if ($hasil->num_rows > 0) {
        while ($row = $hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td><a href="?id='.$row[0].'&menu=hapus">Hapus</a></td>';
            echo '<td><a href="?id='.$row[0].'&menu=edit">Ubah</a></td>';
            echo '</tr>';
        }
    } else {
        echo 'kosong';
    }
    echo '</table>';
    

    echo '<br>';


?>