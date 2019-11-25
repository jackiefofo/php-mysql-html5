<?php   
    try {
        include("connect.php");   
    }
    catch (PDOException $e){
       echo "fail: ".$e->getMessage();
    }
    $id = $_POST['uid'];
    $password=$_POST['password'];
    $sql = "SELECT COUNT(*) AS Count FROM `tbl_ms` WHERE username = '$id' AND password ='$password'";                                        
    $sth = $conn->prepare($sql);
    $sth->execute();
    $row = $sth->fetch();
    
    if($row['Count'] > 0){
       session_start();
       $_SESSION['username']= $id;
       header("Location:add.php");
    } else {
       echo "<script>alert('登入失敗，賬號或密碼錯誤');location='index.php';</script>";
    }
    
    
   $conn = null;
?>