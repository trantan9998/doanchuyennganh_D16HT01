
<?php
/*
author:dandev
AuthorURI:dandev.net
File:       config.php
File:       index.php
*/
//include database connection file
require_once 'config.php';


// verifying user from database using PDO
$stmt = $DBcon->prepare("SELECT tentaikhoan,matkhau from registers WHERE tentaikhoan='".$_POST['tentaikhoan']."' && matkhau='".$_POST['matkhau']."'");
$stmt->execute();
$row = $stmt->rowCount();
if ($row > 0){
    echo "OK";
} else{
    echo 'ERROR';
}
?>
