<html>
<head>
    <title>L200190199 | Nomor Empat</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','','dbutspwd');

        function upload(){
            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name'];

            if ($error == 4){
                echo "<script>
                    alert('Gambar belum diupload');
                </script>";
                return false;
            }

            $ekstensiFile = ['jpeg', 'jpg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));

            // cek ekstensi file gambar
            if(!in_array($ekstensiGambar, $ekstensiFile)){
                echo "<script>
                    alert('Ekstensi harus jpeg jpg png');
                    </script>";
                return false;
            } elseif($ukuranFile > 500000){
                echo "<script>
                    alert('Ukuran terlalu besar');
                    </script>";
                return false;
            } else {
                $namaBaru = uniqid();
                $namaBaru .= ".";
                $namaBaru .= $ekstensiGambar;
                move_uploaded_file($tmpName, "./photo/".$namaBaru);

                return $namaBaru;
            }
        }
        if(isset($_POST['upload'])){
            global $conn;
            $gambar = upload();
            $query_insert = "INSERT INTO data_gambar VALUES ('', '$gambar')";
            if(mysqli_query($conn, $query_insert)){
                echo "<script>
                alert('Gambar berhasil diupload');
                </script>";
            } else {
                echo mysqli_error($conn);
            }
        }
    ?>

    <form action="nomor_empat.php" method="POST" enctype="multipart/form-data">
        Gambar : <input type="file" name="gambar"> <input type="submit" name="upload" value="Upload Gambar">
    </form>

</body>
</html>