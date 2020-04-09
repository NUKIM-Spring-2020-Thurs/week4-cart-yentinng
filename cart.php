<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>購物車</title>
<style type="text/css">
  #a{
    font-family: DFKai-sb;
  }
  #b{
    font-family: Microsoft JhengHei;
    font-size:20px;
  }
</style>



</head>
<body bgcolor="#FFFFB5" >
  <h1 id="a">購物車</h1>
<table border="0">
  <tr bgcolor="#BFFFFF">
   <td id="b">功能</td>
   <td id="b">編號</td>
   <td id="b">名稱</td>
   <td id="b">價格</td>
   <td id="b">數量</td>
 </tr>
<?php
$flag = false;  $total = 0;

while ( list($arr, $value) = each($_COOKIE) ) {

  if ( isset($_COOKIE[$arr]) && 
                   is_array($_COOKIE[$arr]) ) {
     if ($flag) {  
        $flag = false;
        $color="#FF99CC";
     } else {
        $flag = true;
        $color="#E0B5FF";
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $price = 0;
     $quantity = 0; 
     while ( list($name, $value)=each($_COOKIE[$arr])) {

        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;
     echo "</tr>";
  }
}
if ($total != 0) { 
   echo "<tr bgcolor= #B5FFB5><td colspan=5 align=right >";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
<a href="catalog.php">商品目錄</a>
<a href="cart.php">檢視購物車</a>
</body>
</html>