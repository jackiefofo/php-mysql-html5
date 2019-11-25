<?php
session_start();
$id=$_SESSION['username'];
$title = $_POST["title"];  
$author = $_POST["author"];
$_SESSION["authorl"]=$author;
$content = $_POST["content"];  
$ip = $_SERVER["REMOTE_ADDR"];

try {
    include("connect.php");   
}
catch (PDOException $e){
   echo "fail: ".$e->getMessage();
}
$sql = "INSERT INTO `tbl_ms1` (`user`,`title`,`author`,`ip`,`liuyan`,`time`) values('$id','$title','$author','$ip','$content',now())";
$conn->exec($sql);
echo "<script language='javascript'> alert('留言成功!');location='show.php'; </script>";
$conn = null;     

?>