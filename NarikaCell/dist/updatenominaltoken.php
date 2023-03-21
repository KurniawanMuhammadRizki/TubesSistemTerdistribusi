<?php
include 'koneksi.php';

$sql = "UPDATE token SET nominal='$_POST[NOM]' where noid= '$_POST[NomerID]'  "; 
if ($conn->query($sql)){
    echo "Data Successfully changed";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: pilihanpembayarantoken.php?NomerID=$_POST[NomerID]");
?>