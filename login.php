 <h2>log me in</h2>

<?php
if(isset($_COOKIE["id"]))
	{
		$user = $_COOKIE["id"];
		echo "歡迎再度光臨".$_COOKIE["id"];
		setcookie("id","",time()-3600);
	}
else
	{
		echo "歡迎新朋友";
		$user="";
	}
?>

<form action="check.php" method="POST">
	please input your usrname:<input type="text" name="id" value='<?php echo $_COOKIE["id"]; ?>' required>
	<br>please input your password:<input type="password" name="pwd" required>
	<br><input type="submit" name="">	
</form>