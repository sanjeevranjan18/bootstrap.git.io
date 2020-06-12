<?php

 $username='root';
$password = '';
$server = '127.0.0.1' ;
$db ='resturantlogin' ;

 $con= mysqli_connect($server,$username,$password,$db);
if($con){
	//echo"connection successful";
	?>
	<script>
		alert('connection successful')
	</script>
	<?php
} else{
	echo" no connection";
}










?>