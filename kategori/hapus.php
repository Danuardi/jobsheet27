<?php
$id = isset($_GET['id']) ? $_GET['kategori'] : null;
require_once('koneksi.php');
$sql = "DELETE FROM kategori WHERE id='$id';";

if(mysqli_query($con,$sql)){
    echo 'berhasil hapus data';
}else{
    echo 'gagal hapus data';
    msyqli_close($con);

}
?>