<?php 
 define('HOST','servidorsit.database.windows.net');
 define('USER','isaaccr000');
 define('PASS','Kekiisan1');
 define('DB','Keki');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) 
 or die('unable to connect to db');