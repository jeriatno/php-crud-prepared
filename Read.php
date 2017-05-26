<html>
<head>
    <title>Belajar CRUD</title>
</head>
<body>
    <?php
        include 'ConnectDB.php';
        $sql = "SELECT id, stambuk, nama FROM mahasiswa";
        $data = $connect->prepare( $sql );

        $data->execute();
        $data->bind_result($id, $stambuk, $nama);

        $jumlah_data = $data->num_rows;

    ?>


<table border='1' align="center">
    <caption>
        <a href='Create.php'>Tambah Data</a>
    </caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stambuk</th>
        <th>Action</th>
    </tr>
<?php
    while( $data->fetch() ){

        echo '<tr>';
            echo '<td>'.$id.'</td>';
            echo '<td>'.$nama.'</td>';
            echo '<td>'.$stambuk.'</td>';
            echo '<td>';
                echo '<a href="Update.php?id='.$id.'">Edit</a>';
                 echo '|';
                echo '<a href="Delete.php?id='.$id.'">Delete</a>';
            echo '</td>';
        echo '</tr>';

    }
?>
</table>

</body>
</html>
