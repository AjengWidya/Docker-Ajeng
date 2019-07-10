<!DOCTYPE html>
<html>
<head>
    <title>Hello...</title>

    <meta charset="utf-8"> 

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];

    $conn = mysqli_connect('db', 'user', 'test', "myDb");

    $query = 'INSERT INTO Mahasiswa SET
                nim = "nim",
                nama = "$nama",
                gender = "$gender",
                prodi = "$prodi"
             ';
    $result = mysqli_query($conn, $query);
    if($result) {
        header('location: index.php');
    }
?>

<body>
    <div class='container'>
        <h1>Tambah Data</h1>

        <form class="form-horizontal" action="#" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nim">NIM:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama Lengkap:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="sel1">Jenis Kelamin:</label>
                <select class="form-control" name="gender">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="sel2">Program Studi:</label>
                <select class="form-control" name="prodi">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                </select>
            </div> 
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</body>
</html>