<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入成功</title>
</head>
<style>
.a{
  text-align:center;
  margin: auto; 
}
</style>
<body>
   <h1 id="a">歡迎光臨!!!</h1>  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
<script>
  var accessToken = sessionStorage.token;
  if((typeof(accessToken) == 'undefined')){
    alert("請重新登入!!!");
    setTimeout(function(){window.location.href='http://localhost/test01/login';},1000);
  }
  else{
    alert("歡迎光臨!!!");  
    $('#a').empty().append(sessionStorage.name);   //登入成功,呈現使用者名稱   
  }  
</script>
</html>