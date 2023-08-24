<?php
require("../config.php");
$name=$_POST["Sname"];
$pd=$_POST["pd"];
$login=$_POST["login"];
$sql = "SELECT * from test2  where t_name = '";
$sql.=$name;
$sql.="' and t_pd = '";
$sql.=$pd."'";      //從資料庫根據帳號密碼抓取稱呼
$con=dbconnect();   //跑config.php裡的dbconnect函數來建立資料庫連線
$result = mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
$rows1=mysqli_fetch_row($result);
$call=$rows1[4];
if(isset($login)){   
   $accessToken = generateAccessToken();
}
if($rows){  
    echo "
    <script>
       window.sessionStorage.name = '".$call."'       
       window.sessionStorage.token = '".$accessToken.
    "'</script>";
    header("refresh:1;url=http://localhost/test01/welcome"); //登入成功跳轉至welcome.html頁面
}
else{
    echo "使用者名稱或密碼錯誤";
    echo "
    <script>
    setTimeout(function(){window.location.href='http://localhost/test01/login';},3000);
    </script>
    ";//如果錯誤 3秒後跳轉到登入頁面重試;
}
mysqli_close($con);
?>
