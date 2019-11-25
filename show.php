<?php
    session_start();
    header('Content-type: text/html; charset=UTF8');
?>
<!DOCTYPE html>
<head>
<title>註冊</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .row.content {
        height: 1500px
    }
</style>
</head>
<body>
<div class="container">
<h2>我的留言板</h2> 
<button type="button" class="btn btn-primary"  onclick="window.location.href='add.php'">新增留言</button>
<button type="button" class="btn btn-primary"  onclick="window.location.href='show.php'">檢視留言</button>
<button type="button" class="btn btn-primary"  onclick="window.location.href='index.php'">登出</button>
</div> 
<hr> 
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-9">
        <?php
           try {
              include("connect.php");   
           }
           catch (PDOException $e){
               echo "fail: ".$e->getMessage();
           }
          class data{
              public function showData(){
                 echo "<span>".$this->author."於".$this->time."留言</span>";
                 echo "<p>留言主題：".$this->title." ip位置：".$this->ip."</p>";
                 echo "<p>留言內容：</p>";
                 echo "<p>".$this->liuyan."</p>";
                 echo "<hr>";
              }
          }
            $id = $_SESSION["username"];
            $sql = "SELECT * FROM `tbl_ms1` WHERE user = '$id'";  
            $sth = $conn->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS,"data");

           foreach($rows as $row){
                 $row->showData();
            }
             $conn = null;
        ?>
        </div>
    </div>
</div>
<script type="text/javascript"> 
      function logout(){        
          session.invalidate();
      }
</body>
</html>