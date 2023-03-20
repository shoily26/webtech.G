<?php

/*if(isset($POST['Upload-Img']))
{
	
	$file_name =$_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type =$_FILES['image']['type'];
	
	move_uploaded_file($file_temp, "image/" . $file_name);
}*/
            
if(isset($_POST['name'] ))
{
$data=$_POST['name'];

$fp = fopen('data.txt', 'a');

fwrite($fp, $data);

fclose($fp);
}
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Registration</title>
</head>



<body style="background-color:lavender;">
	<form  method="post"  > 
    <fieldset>

    <legend>Registration</legend>

    Name: <input type="text" name="name" placeholder= "Enter your name" ><br><br><hr>

    E-Mail: <input type="email" name="email" placeholder = "Eter your email"><br><br><hr>

    Password: <input type="password" name="pass" placeholder="Enter your password"><br><br><hr>

    Your Image: <input type="file"  name="image" ><br><br><hr>

    <center> 
    	<input type="submit" value="Submit"> 
    </center>

    </fieldset>


	</form>

</body>

</html>

