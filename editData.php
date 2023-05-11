<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <?php
        require 'conection.php';

        if ($_GET["NIM"]) {
            $NIM = $_GET["NIM"];
            $query = "SELECT * FROM mahasiswa WHERE NIM = '$NIM' LIMIT 1";
            $hasilSelect = $conection->query($query);
            $data = $hasilSelect->fetch_object();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $NIM = $_POST['NIM'];
            $Nama = $_POST['Nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];

            $sql = "UPDATE mahasiswa set NIM = '$NIM', Nama='$Nama', jenis_kelamin='$jenis_kelamin' WHERE NIM ='$NIM'";
            $hasil = $conection->query($sql);
        }
        ?>
        <h1>Form Edit Data</h1>
        <form method="POST">
            <div class="row-mb-3">
                <label class="col-sm-2 col-form-label" for="NIM">NIM:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="nim" name="NIM" value="<?= $data->NIM ?>"><br><br>
                </div>
            </div>
            <div class="row-mb-3">
                <label class="col-sm-2 col-form-label" for="Nama">Nama :</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="nama" name="Nama" value="<?= $data->Nama ?>"><br><br>
                </div>
            </div>
            <div class="row-mb-3">
                <label class="col-sm-2 col-form-label" for="Jenis_kelamin">Jenis Kelamin :</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="jenkel" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>"><br><br>
                </div>
            </div>
            <input type="submit" value="Simpan">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>