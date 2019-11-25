<?php
    class ddbb{
        function connect(){
           @$link = mysqli_connect(db_host,db_user,db_pwd);//連線資料庫
           mysqli_set_charset($link,db_charset);//設定資料庫字型格式
           mysqli_select_db($link,db_dbname) or die('資料庫開啟失敗');//選擇資料庫
          if(mysqli_connect_errno()) {
              die('資料庫連線失敗 ： '.mysqli_connect_errno());
          }
          return $link;
        }
        function insert($link,$sql){
           if(mysqli_query($link, $sql)) {
                echo "<script language='javascript'> alert('註冊成功！');location='index.php';</script>";
           }  else{
                echo "Error insert data: " . $link->error;
           }
        }
        function CheckUser($link,$sql){
           $result = mysqli_query($link,$sql);
           $row = mysqli_num_rows($result);
           if($row != 0){
               return true;
           } else {
               return false;
           }
        }
        function insertl($link,$sql){
           if(mysqli_query($link,$sql)){
               echo "<script language='javascript'> alert('留言成功!');location='show.php'; </script>";
           } else {
               echo "Error insert data: " . $link->error;
           }
        }
        function printl($link,$sql){
            $result = mysqli_query($link,$sql);
            $data = array();
            while ($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            if($data) {
                return $data;
            } else {
                return false;
            }
        }
    }
?>