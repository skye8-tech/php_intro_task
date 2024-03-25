<?php
include "connect.php";
$id = $_GET['deleteid'];
$sql = " DELETE FROM `contact` WHERE  `id` = $id ";
$result= $connect -> query($sql);
if($result){
    header('LOCATION: list_contacts.php?r=deleted');

}else{
    header('LOCATION: list_contacts.php?r=error');
}

?>