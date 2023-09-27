<?php

$conn = mysqli_connect('localhost', 'root', '', '4U');
if (!$conn) {
    die('error' . mysqli_connect_error());

} else {
    echo 'good';
}
?>