<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='sign_up';

$con =mysqli_connect($HOSTNAME , $USERNAME , $PASSWORD , $DATABASE);

if($con){
    echo "";
}
else{
    die(mysqli_error($con));
}
?>