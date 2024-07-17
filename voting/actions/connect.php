<?php

$con=mysqli_connect("localhost","root","demo123","votingsystem");
if($con)
{
    echo "Connection successful";
}
else{
    die(mysqli_error($con));
}
?>