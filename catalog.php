<?php
session_start();

if(isset($_SESSION["login"]))
  {
    echo "登入成功</br><br>";
    $date = strtotime("+7 days",time());
    $uName=$_SESSION["ID"];
    setcookie("ID",$uName,$date);
  }
else {
    echo "非法進入</br>";
    echo "乖乖回首頁</br>";
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>商品清單頁</title>
  <style >
    #a {
      border-radius: 5px;
      padding :3px;
      margin-top: 10px;
      }
    a:link{
      text-decoration:none;
      background-color:#ffffff;
      }
    a:visited {
      color:#ffffff;
      background-color:lightblue;
      }
    a:hover {
      text-decoration:underline;
      background-color:#fafafa;
      color:gray;
      }
    a:active {
      text-decoration:none;
      background-color:gray;
      color:#fafafa;
      }
  </style>

<?php
session_start();
if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"]; 
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "001":
         $_SESSION["Name"] = "初階房";
         $_SESSION["Price"] = "1000";
         break;
      case "002":
         $_SESSION["Name"] = "進階房";
         $_SESSION["Price"] = "10000";
         break;
      case "003":
         $_SESSION["Name"] = "博士房";
         $_SESSION["Price"] = "100000";
         break;   
   }  
   header("Location: addcart.php");
}
?>
</head>

<body bgcolor="#FFFFB5" ;>
<form action="catalog.php" method="POST">
選擇商品: 
<select name="Item" id="a">
  <option value="001" >初階房 - $1000</option>
  <option value="002" >進階房 - $10000</option>
  <option value="003">博士房 - $100000</option> 
</select>
<input type="text" size="5" name="Quantity" value="1" id="a">
<input type="submit" value="訂購" id="a">
</form>
 <a href="catalog.php" >商品目錄</a>
 <a href="cart.php">檢視購物車</a>
</body>
</html>