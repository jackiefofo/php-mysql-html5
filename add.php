<?php
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
</style>
</head>
<body>
<div class="container">
<h2>我的留言板</h2> 
<button type="button" class="btn btn-primary"  onclick="window.location.href='add.php'">新增留言</button>
<button type="button" class="btn btn-primary"  onclick="window.location.href='show.php'">檢視留言</button>
<button type="button" class="btn btn-primary"  onclick="window.location.href='index.php'">登出</button>
<form  method = "post" action = "doAdd.php" >
    <h1>Add A Message
    <span>What's New To Share With You。</span>
    </h1>
    <div class="form-group">
        <label for="name">您的名字:</label>
        <input type="text" class="form-control"  name="author"  placeholder="您的全名" required>
    </div>
    <div class="form-group">
        <label for="title">標   題:</label>
        <input type="text" class="form-control"  name="title"  placeholder="請輸入標題" required>
    </div>
    <div class="form-group">
        <label for="message">留   言:</label>
        <textarea class="form-control" rows="5" name="content" placeholder="在此留言" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">留言</button>
    <button type="reset" class="btn btn-primary" name="reset">重置</button>
</form>
   
</div>
</body>
</html>