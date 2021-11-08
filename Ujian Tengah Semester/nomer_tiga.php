<html>
<head>
    <title>L200190199 | Nomer Tiga</title>
</head>
<body>
    <?php
        function cekGanjil($angka){
            if ($angka % 2 == 0){
                return "genap";
            }else {
                return "ganjil";
            }
        }

        $count = 0;
        $jml = 0;
        for($i=1; $i<=100; $i++){
            if (cekGanjil($i) == "ganjil"){
                $count+=1;
                $jml+=$i;
            }
        }

        echo "Banyaknya bilangan ganjil antara 1 dan 100 adalah $count dengan jumlah $jml";
    ?>
</body>
</html>