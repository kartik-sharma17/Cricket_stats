<?php

 $servername ='localhost';
 $password = '';
 $username = 'root';
 $databasename = 'form_details';

 $con  = mysqli_connect($servername , $username , $password , $databasename);

if(! $con){
    die("connection fail" . mysqli_connect_errno());
} 
// echo "connection successful";
?>