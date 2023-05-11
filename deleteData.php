<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data Mahasiswa</title>
</head>
<body>
    <?php
    require 'conection.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET['NIM']) {
        $NIM = $_GET['NIM'];
        $sql = "DELETE FROM mahasiswa WHERE NIM = '$NIM'";
        $hasil = $conection->query($sql);
        if ($hasil) {
            echo "Data berhasil dihapus";
        } else {
            echo "Error: " . $sql . "<br>" . $conection->error;
        }
    }
    ?>
</body>
</html>
