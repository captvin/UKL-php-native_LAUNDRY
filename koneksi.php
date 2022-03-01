<?php
$conn=mysqli_connect('localhost','root','','londre');

if (mysqli_connect_errno()) {
    printf("conenect failed: %s\n", mysqli_connect_error());
    exit();
}

?>