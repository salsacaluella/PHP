

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-field {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 150px;
            text-align: right;
            margin-right: 10px;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            height: 100px;
        }
    
    </style>
</head>
<body>
    <?php 
$nama = $_GET['name'];
$kelamin = $_GET['kelamin'];
$agama = $_GET['agama'];
$alamat = $_GET['alamat'];
$tempat = $_GET['tempat'];
$tanggal = $_GET['tanggal'];
$hobi = $_GET['hobi'];
$ctct = $_GET['ctct'];
$usia = $_GET['umur'];
$skola = $_GET['skola'];
 

echo "Nama : " . $nama;
echo "<br/>";
echo "Jenis Kelamin : ".$kelamin;
echo "<br/>";
echo "Agama : ".$agama;
echo "<br/>";
echo "Alamat : ".$alamat;
echo "<br/>";
echo "Tempat Lahir : ".$tempat;
echo "<br/>";
echo "Tanggal Lahir : ".$tanggal;
echo "<br/>";
echo "Hobi : ".$hobi;
echo "<br/>";
echo "Cita Cita : ".$ctct;
echo "<br/>";
echo "Usia : " . $usia;
echo "<br/>";
echo "Asal Sekolah : ".$skola;
echo "<br/>";
?>
</body>
</html>