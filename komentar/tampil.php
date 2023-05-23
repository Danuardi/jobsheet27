<?php
require_once('koneksi.php');

$query = ("SELECT * FROM komentar JOIN post ON komentar.id = post.id");

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