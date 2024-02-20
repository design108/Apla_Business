<?php
$con=new mysqli("localhost","root","","aapla_businessdb24");  //connect to database
if($con->connect_error) die("Connection Failed:".$conn->connect_error);   //check connection
