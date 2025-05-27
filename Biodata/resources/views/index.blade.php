<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Bio</title>
</head>
<body>

    <h3>FORM BIO DATA</h3>
    <div>
        <form action="/request" method="GET" enctype="multipart/form-data">

            <input type="file" name="file"><br>

            <label for="nama">Nama</label>
            <input type="text" name="nama" id=""><br>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id=""><br>

            <label for="prodi">Prodi</label>
            <input type="text" name="prodi" id=""><br>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id=""><br>

            <button type="submit">
                Simpan
            </button>
        </form>
    </div>

</body>
</html>
