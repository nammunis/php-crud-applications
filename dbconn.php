<?php
 define("HOSTNAME", "localhost");
 define("USERNAME", "root");
 define("PASSWORD", "");
 define("DBNAME", "crud_app");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

if(!$connection){
    die("Connections Faild ⚠️");
}else{
    echo "Connected! ✅";
}


?>