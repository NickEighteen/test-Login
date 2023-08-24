<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>登入系統</title>
    <style>
    .center
    {
     text-align:center;
     margin: auto;
    }
    </style>		
</head>
<body class="center">
    <!--將使用者資料上傳-->
    <form action='api/uplod.php' method='post'>
        <H1>會員登入系統</H1>
        帳號: <input type="text" id="Sname" name="Sname" placeholder="請輸入帳號"><br>
        密碼: <input type="password" id="pd" name="pd" placeholder="請輸入密碼"><br>
        <input type="submit" value="登入" name="login">  <input type="reset" value="重新輸入">
    </form>        
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>    
</html>