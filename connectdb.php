<?php

try{

$pdo = new 
PDO('mysql:host=localhost;dname=pos_db','root','root');
// echo 'Connection Successfull';

} catch(PDOException $f){

    echo $f->getmessage();
}

?>