<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $id = $_POST['id'];
    $kategori = $_POST['komentar'];
    require_once('koneksi.php');
    $sql = "UPDATE komentar SET id = '$id',komentar = '$komentar'
    WHERE id = '$id';";

    if(mysqli_query($con,$sql)){
        echo"berhasil update data";
    }else{
        echo"gagal update data";
    }
    msyqli_close($con);
}
?>