<?php
    $nim = $_GET['nim'];

    $conn = mysqli_connect('db', 'user', 'test', "myDb");

    $query = "DELETE FROM Mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($conn, $query);
    if($result) {
        header('location: index.php');
    }
?>