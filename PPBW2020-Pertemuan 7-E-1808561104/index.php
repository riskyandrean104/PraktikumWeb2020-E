<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
</head>
<body>
    <h1>Menghitung Nilai Akhir Mahasiswa</h1>
    <form action="hasil.php" method="POST">
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input  name="nama" type="text" id="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input name="NIM" type="text" id="NIM"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input name="Tugas" type="text" id="Nilai_tugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input name="UTS" type="text" id="Nilai_uts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input name="UAS" type="text" id="Nilai_uas"></td>
            </tr>
        </table>
        <button type="submit" name="submit" value="Nilai" >SUBMIT</button>
    </form>
</body>
</html>