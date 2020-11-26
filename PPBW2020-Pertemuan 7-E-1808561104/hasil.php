<!DOCTYPE html>
<html>
    <body>
    <?php
        $nama=$_REQUEST["nama"];
        $nim=$_REQUEST["NIM"];
        $tugas=$_REQUEST["Tugas"];
        $uts=$_REQUEST["UTS"];
        $uas=$_REQUEST["UAS"];
        $hasil=($tugas+$uas+$uts)/3;
    
        echo "<h1>Nilai Akhir Mahasiswa</h1>";
        echo "Nama: $nama<br>";
        echo "Nim :$nim<br>";
        echo "<br>";
        echo "Nilai Tugas Anda = $tugas<br>";
        echo "Nilai UTS Anda = $uts<br>";
        echo "Nilai UAS Anda = $uas<br>";
        echo "<br>";
        echo "Nilai Akhir Anda = $hasil<br>";

        if ($hasil>80)
        echo("Anda Dinyatakan Lulus Dengan Predikat <b>A</b>");
        elseif ($hasil=70 or $hasil>70)
        echo("Anda Dinyatakan Lulus Dengan Predikat<b>B</b>");
        elseif ($hasil=60 or $hasil>60)
        echo("Anda Dinyatakan Lulus Dengan Predikat<b>C</b>");
    ?>
    </body>
</html>
