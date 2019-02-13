<html>
	<head>
		<title>Reverse of string</title>
	</head>
	<body>
		<form action="<?php $_PHP_SELF ?>" method="POST">
		<pre>
			Enter any string  :  <input type="text" name="st">
			
			
				<button type="submit" value="name" style="height:30px; width:60px">Next</button>
	</body>
</html>
<?php 	
			if($_POST['st']){
				$str=$_POST['st'];
				$rev=strrev($str);
				echo "The reverse of string $str is $rev";
			}
					
?>
		