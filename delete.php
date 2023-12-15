<?php
include "../connection.php";

$mhsNpm = $_POST['mhsNpm'];

//isi query delete
$sql = "";
$result = $connect->query($sql);

echo json_encode(array(
    "success" => $result
));

?>