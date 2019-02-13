<html>	
	<head>
		<title>Largest Number</title>
	</head>
	<body>
	<form action="<?php $_PHP_SELF ?>" method="POST">
	<pre>
		Enter first no  :  <input type="number" name="num1">
			
		Enter second no :  <input type="number" name="num2">
			
		Enter third no  :  <input type="number" name="num3">
			
				
					<button type="submit" value="name" style="height:40px; width:100px">Find</button>
	</pre>
	</form>				
		    
	</body>
</html>	

<?php 
				$n1=$_POST['num1'];
				$n2=$_POST['num2'];
				$n3=$_POST['num3'];
				
				function largest($a,$b,$c){
					if(($a>$b)&&($a>$c)){
						return $a;
					}
					else if(($b>$a)&&($b>$c)){
						return $b;
					}
					else{
						return $c;
					}
				}
				
					echo "Largest number is : ".largest($n1,$n2,$n3);	
			?>