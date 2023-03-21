<?php
include 'koneksi.php';

$sql = "UPDATE token SET pembayaran='$_POST[PEM]' where noid= '$_POST[NomerID]'  "; 
if ($conn->query($sql)){
    echo "Data Successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: KonfirmasiToken.php?NomerID=$_POST[NomerID]");
?>