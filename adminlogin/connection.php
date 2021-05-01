<?php

    $conn=mysqli_connect("localhost","root","","onesmarter-staffing");
    if (!$conn) {
        # code...
        die("connection failed: ". mysqli_connect_error());
    }
?>