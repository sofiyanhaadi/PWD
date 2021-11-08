<html lang="en">
<head>
    <title>L200190199 | Nomer Dua</title>
</head>
<body>
    <?php
        $NIK = array("M001", "M002", "M003");
        $Nama = array("Septiana", "Rizki", "Clarisa");
        $TmpLahir = array("Solo", "Jakarta", "Surabaya");
        $TglLahir = array("01-04-1988", "30-03-1985", "12-12-1990");

        function newDate($tgl) { //fungsi untuk konversi bulan menjadi teks
            $newDate = date("j F Y", strtotime($tgl));
            return $newDate;
        }
        function usia($tgl){ // fungsi untuk mendapatkan umur
            $pars = explode("-", $tgl);
            $umur = date("Y") - intval($pars[2]);
            return $umur;
        }
    ?>
    <table border="1" cellspacing="0">
        <tr>
            <td>NIK</td>
            <td>Nama</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>Usia</td>
        </tr>

        <?php 
            for($i=0; $i < count($NIK); $i++){ // perulangan untuk menampilkan data dalam bentuk tabel
        ?>
        <tr>
            <td><?= $NIK[$i] ?></td>
            <td><?= $Nama[$i] ?></td>
            <td><?= $TmpLahir[$i].", ".newDate($TglLahir[$i]) ?></td>
            <td><?= usia($TglLahir[$i]) ?></td>
        </tr>
        <?php 
            } 
        ?>
    </table>
</body>
</html>