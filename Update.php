<?php
include 'ConnectDB.php';

$id = $_GET['id'];

if(isset( $_POST['simpan'] )){
    $stambuk = $_POST['stambuk'];
    $nama = $_POST['nama'];

    $sql2 = "UPDATE mahasiswa
                SET stambuk=?, nama=? WHERE id=? ";

    $data2 = $connect->prepare($sql2);
    $data2->bind_param('ssi', $stambuk, $nama, $id);

    if( $data2->execute() ) {
        header('Location: Read.php');
    }else{
        echo "Edit Data Error!!";
    }
}

// menampilkan data ke form inputan

$sql1 = "SELECT stambuk, nama FROM mahasiswa WHERE id=? ";
$data1 = $connect->prepare( $sql1 );
$data1->bind_param('i',$id);
$data1->execute();
$data1->bind_result($stambuk, $nama);
$data1->fetch();

?>
<!--we have our html form here where new user information will be entered-->
<form action='' method='post' border='0'>
    <table align="center">
        <tr>
            <td>Stambuk</td>
            <td><input type='text' name='stambuk' value='<?php echo $stambuk;  ?>' /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' value='<?php echo $nama;  ?>' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Update' name='simpan' />
            </td>
        </tr>
        </table>
    </form>
