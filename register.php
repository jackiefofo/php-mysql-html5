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
   <h2>用戶註冊</h2>
   <form method ="POST" action = "doregister.php" name="dl">
        <div class="form-group">
            <label for="usr">使用者名稱:</label>
            <input type="text" class="form-control" id="usr" name="uid" maxlength="16" placeholder="手機號碼/電子信箱" required>
        </div>
        <div class="form-group">
            <label for="pwd">密     碼:</label>
            <input type="password" class="form-control" id="pwd" name="password" maxlength="16" placeholder="請輸入密碼" required>
        </div>
        <div class="form-group">
            <label for="pwd">確認密碼:</label>
            <input type="password" class="form-control" id="pwd" name="checkpwd" maxlength="16" placeholder="請再輸入密碼" required>
        </div>
        <button type="button" class="btn btn-primary" name="login" onclick="window.location.href='index.php'">登入</button>
        <button type="reset" class="btn btn-primary" name="reset">重置</button>
        <button type="submit" class="btn btn-primary" name="regist">註冊</button>
   </form>
   
</div>
</body>
</html>