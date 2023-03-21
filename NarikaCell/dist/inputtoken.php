<?php
include 'koneksi.php';//menyisipkan file koneksi.php

$sql = "INSERT INTO token VALUE('$_POST[NomerID]','$_POST[NomerID]','$_POST[NomerID]')";
if ($conn->query($sql)) {
  echo "Record baru berhasil ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: menunominaltoken.php?NomerID=$_POST[NomerID]");
?>