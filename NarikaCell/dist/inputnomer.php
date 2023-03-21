<?php
include 'koneksi.php';//menyisipkan file koneksi.php

$sql = "INSERT INTO pulsa VALUE('$_POST[NomerHp]','$_POST[NomerHp]','$_POST[NomerHp]','$_POST[NomerHp]')";
if ($conn->query($sql)) {
  echo "Record baru berhasil ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: menuoperator.php?NomerHp=$_POST[NomerHp]");
?>