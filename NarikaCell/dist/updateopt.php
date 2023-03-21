<?php
include 'koneksi.php';

$sql = "UPDATE pulsa SET operator='$_POST[OPT]' where nomer= '$_POST[NomerHp]'  "; 
if ($conn->query($sql)){
    echo "Data Successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: menunominal.php?NomerHp=$_POST[NomerHp]");
?>