<?php
include 'koneksi.php';

$sql = "UPDATE pulsa SET pembayaran='$_POST[PEM]' where nomer= '$_POST[NomerHp]'  "; 
if ($conn->query($sql)){
    echo "Data Successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: KonfirmasiPulsa.php?NomerHp=$_POST[NomerHp]");
?>