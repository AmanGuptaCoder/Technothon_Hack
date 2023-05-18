<?php
    
$server= "localhost";
$username="worldeng_health";
$password="0@%i-aEslPQB";
$con= mysqli_connect($server,$username,$password,'worldeng_health');
if(!$con){
    die("Error : Connection not made due to".mqsqli_connect_error());
}

?>
