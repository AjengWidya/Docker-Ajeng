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
    <h1>Daftar Mahasiswa</h1>

    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'user', 'test', 'akademikDb');


    $query = 'SELECT * From Mahasiswa';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>';
    while($element = mysqli_fetch_assoc($result)){
        echo '<tr>';

        echo '<td>' . $element['nim'] . '</td>';
        echo '<td>' . $element['nama'] . '</td>';
        
        echo '<td>'.
                '<a href="read.php?nim='.$element['nim'].'"><span class="glyphicon glyphicon-search"></span></a>&nbsp;&nbsp;'.
                '<a href="update.php?nim='.$element['nim'].'"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;'.
                '<a href="delete.php?nim='.$element['nim'].'"><span class="glyphicon glyphicon-trash"></span></a>'.
            '</td>';
        
        echo '</tr>';
    }
    echo '</table>';

    /* Libération du jeu de résultats */
    $result->close();

    mysqli_close($conn);

    ?>

    <a href='create.php'><button type="button" class="btn btn-info">Tambah Data</button></a>
    </div>
</body>
</html>
