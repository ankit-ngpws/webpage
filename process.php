		
<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$id 		= $_POST['id'];
	$name 		= $_POST['name'];
	$age		= $_POST['age'];
	$address	= $_POST['address'];
	$salary 	= $_POST['salary'];

		$sql = "INSERT INTO emp (id, name, age, address, salary ) VALUES($id ,'$name',$age,'$address',$salary)";
	
	$result = mysqli_query($con,$sql);
	
	if($result){
			echo 'Successfully saved.';
			
  
			
			
		}else{
			
			echo mysqli_error($con). 'There were erros while saving the data.';
		}
		
}else{
	echo 'No data';
}
