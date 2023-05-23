<?php
require_once('koneksi.php');

$query = ("SELECT * FROM post JOIN kategori ON post.id = kategori.id");

$result = mysqli_query($con,$query);

if($result){

    $dataJOined = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $dataJOined[] = $row ;
    }
}else{
    echo "errror" . msyqli_error($con);
}
$jsonOutput = json_encode($dataJOined);

echo $jsonOutput ;

?>