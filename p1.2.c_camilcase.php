<html>
	<head>
		<title>camel case</title>
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
				$rev=ucwords($str);
				echo "The camel case of string $str is $rev";
			}
?>
		