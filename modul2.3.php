<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 0 auto; padding: 20px; background-color: #85abaf; }
h2 { text-align: center; margin-bottom: 30px; }

label { display: block; margin-bottom: 5px; }

input[type="text"], input[type="date"], input[type="number"] { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 16px; }

input[type="radio"] { margin-right: 10px; }

input[type="submit"] { background-color: #2d8c42; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }

input[type="submit"]:hover { background-color: #45a049; transform: rotate(360deg);
                transition: 1s;}


    </style>
</head>
<body>
    <h2>Data Biodata</h2>
    <form action="tampil-modul.php">
        <label for="nama">Nama : </label>
        <input type="text" placeholder="Masukkan nama" name="name">
        <br>
        <label for="kelamin">Jenis Kelamin : </label>
        <input type="radio" value="Laki laki" name="kelamin">Laki-laki
        <input type="radio" value="Perempuan" name="kelamin">Perempuan
        <br>
        <br>
        <label for="agama">Agama : </label>
        <input type="text" placeholder="Masukkan agama" name="agama">
        <br>
        <label for="alamat">Alamat : </label>
        <input type="text" placeholder="Masukkan alamat" name="alamat">
        <br>
        <label for="tempat lahir">Tempat Lahir : </label>
        <input type="text" placeholder="Masukkan kota, provinsi" name="tempat">
        <br>
        <label for="tanggal lahir">Tanggal Lahir : </label>
        <input type="date" name="tanggal">
        <br>
        <label for="hobi">Hobi : </label>
        <input type="text" placeholder="Masukkan hobi" name="hobi">
        <br>
        <label for="ctct">Cita-cita : </label>
        <input type="text" placeholder="Masukkan cita-cita" name="ctct">
        <br>
        <label for="usia">Umur : </label>
        <input type="number" placeholder="Masukkan umur" name="umur">
        <br>
        <label for="skola">Asal Sekolah : </label>
        <input type="text" placeholder="Masukkan sekolah" name="skola">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>