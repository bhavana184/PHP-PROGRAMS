<html>
	<head>
		<title>palindrome</title>
	</head>
	<body>
		<form action="<?php $_PHP_SELF ?>" method="POST">
		<pre>
			Enter any string  :  <input type="text" name="n1">
			<input type="hidden" name="hid" >
			
				<button type="submit" NAME="SUBMIT" style="height:30px; width:60px">Next</button>
	</body>
</html>
<?php
 //echo $_POST['hid'];
	if(ISSET($_POST['hid']))
	{
		if($_POST['n1']==="")
			echo "Empty String";
		else
		{
			$str=$_POST['n1'];
			$str2="";
			for($i=strlen($str)-1;$i>=0;$i--){
				$str2=$str2.$str[$i];
			}
			if($str2==$str)
				echo "Palindrome";
			else
				echo "Not Palindrome";
		}
	}
	?>