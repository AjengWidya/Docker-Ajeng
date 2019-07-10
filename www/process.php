<?php
    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    $proses = $_POST['proses'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];

    if($proses == "Update") {
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
                prodi = '$prodi'
                ";
    }
    $result = mysqli_query($conn, $query);

    if($result){
        header('location: index.php');
    } else {
        echo mysqli_error($conn);
    }
?>