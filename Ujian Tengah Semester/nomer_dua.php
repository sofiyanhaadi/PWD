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

        function newDate($tgl) {
            $newDate = date("j F Y", strtotime($tgl));
            return $newDate;
        }
        function usia($tgl){
            $pars = explode("-", $tgl);
            $umur = 2021 - intval($pars[2]);
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
        <tr>
            <td><?= $NIK[0] ?></td>
            <td><?= $Nama[0] ?></td>
            <td><?= $TmpLahir[0].", ".newDate($TglLahir[0]) ?></td>
            <td><?= usia($TglLahir[0]) ?></td>
        </tr>
        <tr>
            <td><?= $NIK[1] ?></td>
            <td><?= $Nama[1] ?></td>
            <td><?= $TmpLahir[1].", ".newDate($TglLahir[1]) ?></td>
            <td><?= usia($TglLahir[1]) ?></td>
        </tr>
        <tr>
            <td><?= $NIK[2] ?></td>
            <td><?= $Nama[2] ?></td>
            <td><?= $TmpLahir[2].", ".newDate($TglLahir[2]) ?></td>
            <td><?= usia($TglLahir[2]) ?></td>
        </tr>
    </table>
</body>
</html>