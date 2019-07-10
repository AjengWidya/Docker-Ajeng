<?php
    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    
    $nim = $_GET['nim'];

    $query = "SELECT * FROM Mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);
    $nim = $data["nim"];
    $nama = $data["nama"];
    $gender = $data["gender"];
    $prodi = $data["prodi"];
?>

<html>
<head>
    <title>Hello...</title>

    <meta charset="utf-8"> 

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>

        <table class="table table-condensed">
        <tbody>
            <tr>
                <td>NIM</td>
                <td><?php echo $nim;?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $gender;?></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><?php echo $prodi;?></td>
            </tr>
        </tbody>
        </table>

        <a href='index.php'><button type="button" class="btn btn-info">Kembali</button></a>
    </div>
</body>
</html>