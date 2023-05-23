<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $id = $_POST['id'];
        $kategori = $_POST['komentar'];
        $sql ="INSERT INTO komentar (id, kategori)
                VALUES ('$id','$kategori')";
        require_once('koneksi.php');
        if (mysqli_query($con, $sql)){
            echo 'berhasil menambahkan siswa';
        }else{
            echo 'gagal menambahkan siswa';
        }
        msyqli_close($con);
}
?>