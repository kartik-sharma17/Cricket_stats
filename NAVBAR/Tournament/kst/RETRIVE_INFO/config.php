<?php

 $servername ='sql211.infinityfree.com';
 $password = 'Kartikbhai123';
 $username = 'if0_36067277';
 $databasename = 'if0_36067277_matches';

 $con  = mysqli_connect($servername , $username , $password , $databasename);

if(! $con){
    die("connection fail" . mysqli_connect_errno());
} 
// echo "connection successful";
?>