<?php
var_dump($_GET);
var_dump($_POST);
mt_srand(10);
 
$count = 0;
 
while($count < 10) {
    echo mt_rand(0, 99)."";
    $count++;
}
?>