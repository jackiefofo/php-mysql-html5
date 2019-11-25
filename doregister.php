<?php
try {
    include("connect.php");   
}
catch (PDOException $e){
   echo "fail: ".$e->getMessage();
}
$id = $_POST['uid'];
$password = $_POST['password'];
$checkpwd = $_POST['checkpwd'];

if($password != $checkpwd){
    echo "<script>alert('輸入的密碼和確認的密碼不相等');location='register.php';</script>";
}
$alt = "SELECT username FROM `tbl_ms` WHERE username = '$id' ";
$sth = $conn1->prepare($alt);
$sth->execute();
$row = $sth->fetch();                                    

if($row['username'] != $id){
    $sql = "INSERT INTO `tbl_ms` (`username`, `password`) VALUES ('$id','$password')";
    $conn->exec($sql);
    echo "<script language='javascript'> alert('註冊成功!');location='index.php'; </script>";
} else {
    echo "<script>alert('註冊失敗，該賬號已被註冊！');location='register.php';</script>";
}


    
 $conn = null;     
?>