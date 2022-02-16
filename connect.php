<?php
	if(isset($_POST['s']))
	{	
		$n=$_POST['nm'];
		$e=$_POST['em'];
		$p=$_POST['pass'];
		$conn = new mysqli("localhost","root","","restaurant1");
		$sql="insert into form(name,email,password)values('$n','$e','$p')";
	// Check connection
		if ($conn->query($sql) === TRUE) 
		{
			header("location:index.html");
  		} 
	}
?>

