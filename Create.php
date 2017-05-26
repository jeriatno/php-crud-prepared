<?php
    include 'ConnectDB.php';

    if(isset($_POST['simpan'])){
        $stambuk = $_POST['stambuk'];
        $nama = $_POST['nama'];

        $sql  = "INSERT INTO mahasiswa (stambuk, nama) VALUES (?,?)";
        $data = $connect->prepare($sql);

        $data->bind_param('ss', $stambuk, $nama);

        if( $data->execute() ) {
            header('Location: Read.php');
        }else{
            echo "Tambah Data Error";
        }
    }
?>

<form action='' method='post' border='0'>
    <table align="center">
        <tr>
            <td>Stambuk</td>
            <td><input type='text' name='stambuk' /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' name='simpan' value='Create' />
            </td>
        </tr>
        </table>
    </form>
</body>
</html>
