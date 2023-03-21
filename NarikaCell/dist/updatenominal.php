<?php
include 'koneksi.php';

$sql = "UPDATE pulsa SET nominal='$_POST[NOM]' where nomer= '$_POST[NomerHp]'  "; 
if ($conn->query($sql)){
    echo "Data Successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: pilihanpembayaran.php?NomerHp=$_POST[NomerHp]");
?>