<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Input Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <?php
        require 'conection.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $NIM = $_POST['NIM'];
            $Nama = $_POST['Nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];

            $sql = "INSERT INTO mahasiswa (NIM, Nama, jenis_kelamin) VALUES ('$NIM', '$Nama', '$jenis_kelamin')";
            $hasil = $conection->query($sql);
            header("refresh:2;url = view.php");
        }
        ?>
        <h1>Form Input Data</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="row-mb-3">
                <label for="NIM" class="col-sm-2 col-form-label">NIM:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="nim" name="NIM"><br><br>
                </div>
            </div>
            <div class="row-mb-3">
                <label class="col-sm-2 col-form-label" for="Nama">Nama :</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="nama" name="Nama"><br><br>
                </div>
            </div>
            <div class="row-mb-3">
                <label class="col-sm-2 col-form-label" for="Jenis_kelamin">Jenis Kelamin :</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="jenkel" name="jenis_kelamin"><br><br>
                </div>
            </div>
            <input type="submit" value="Simpan">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>