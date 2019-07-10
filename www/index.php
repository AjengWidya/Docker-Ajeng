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
    <?php echo "<h1>Hi! I'm happy</h1>"; ?>

    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'user', 'test', "myDb");


    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';

        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }
        echo '<td>
                <a href="read.php"><span class="glyphicon glyphicon-search"></span></a>
                <a href="update.php"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="delete.php"><span class="glyphicon glyphicon-trash"></span></a>
            </td>';
        
        echo '</tr>';
    }
    echo '</table>';

    /* Libération du jeu de résultats */
    $result->close();

    mysqli_close($conn);

    ?>
    </div>
</body>
</html>
