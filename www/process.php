<?php
    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    $proses = $_POST['proses'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];

    if($proses == "update") {
       $query = "UPDATE Mahasiswa SET
                nama = '$nama',
                gender = '$gender',
                prodi = '$prodi'
                WHERE nim = '$nim'
                ";
    } else {
        $query = "INSERT INTO Mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                gender = '$gender',
                prodi = '$prodi',
                ";
    }
    $result = mysqli_query($conn, $query);

    if($result) header('location: index.php');
?>