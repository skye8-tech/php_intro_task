<?php
$connect = new mysqli("localhost", "root", "" , "contact");
if($connect){
    echo " connected to database";

}else{
    echo "failed to connect to database";
}


?>