<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>latihan php week 8</title>
</head>
<body>
    <div class="container">
    <?php
    require 'conection.php';
    

    $sql = "SELECT * FROM mahasiswa";
    $hasil = $conection->query($sql);
    
    ?>
    <table class = "table table-striped">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>action</th>
        </tr>
        <?php
         
        if ($hasil-> num_rows > 0) {
            $i=1;
            while($baris = $hasil->fetch_assoc()){   
            ?>
            <tr>
                <td><?= $i?></td>
                <td><?=$baris['NIM']?></td>
                <td><?=$baris ['Nama']?></td>
                <td><?=$baris['jenis_kelamin']?></td>
                <td><button><a href="editData.php?NIM=<?= $baris['NIM']?>">EDIT</a></button>
                   <button><a href="deleteData.php?NIM=<?= $baris['NIM']?>">Hapus</a></button>
            </tr>
            <?php
            $i++;
            }
        }
        ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>