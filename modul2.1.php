<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'],
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        .kotak {
            max-width: 400px;
            margin: 3px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 80px;
            background-color: salmon;
            border: solid 3px black;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 80px;
        }
        

        ;
    </style>
</head>

<body>
    <?php foreach ($siswa as $ssw) : ?>
        <div class="kotak">
            <?= $ssw["nama"]; ?>
            <br>
            <?= $ssw["kelas"]; ?>
            <?= $ssw["jurusan"]; ?>
            <br>
        </div>
    <?php endforeach ?>

</body>

</html>