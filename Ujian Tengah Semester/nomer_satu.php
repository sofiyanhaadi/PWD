<html lang="en">
<head>
    <title>L200190199 | Nomor Satu</title>
</head>
<body>
    Toko Alat Tulis
    <form action="pesan.php" method="post">
        <select name="alat">
            <option value="Ballpoint">Ballpoint</option>
            <option value="Buku Tulis">Buku Tulis</option>
            <option value="Pensil" selected>Pensil</option>
        </select>
        Harga : <input type="text" name="harga">
        Jumlah Pesanan : <input type="text" name="pesanan">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $alat = $_POST['alat'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['pesanan'];
            $totalhrg = $harga * $jumlah;
            echo "</br>";
            echo "Anda memesan $jumlah $alat dengan total harga $totalhrg </br>";
            echo "Terima kasih atas kesediaan anda memesan barang kami!";
        }
    ?>
</body>
</html>