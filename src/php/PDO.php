<?php 
$CV_Connection = new PDO('mysql:host=localhost;dbname=myblog','root','');
    $CV_Connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $CV_Connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);