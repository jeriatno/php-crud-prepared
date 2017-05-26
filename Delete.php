<?php

 include 'ConnectDB.php';

$id = $_GET['id'];

if(isset($id)){
 $sql  = "DELETE FROM mahasiswa WHERE id = ? ";
 $data = $connect->prepare($sql);

 $data->bind_param('i', $id);

 if( $data->execute() ){
     header('Location: Read.php');
 }else{
     echo "Delete Data Error!!";
 }
}
?>
