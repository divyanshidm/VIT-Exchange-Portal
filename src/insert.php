<?php

$mypic=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$type=$_FILES['upload']['type'];

$regnum=$_POST['regnum'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['confirmpassword'];

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

  $con=mysqli_connect($server, $username, $password1);

  mysqli_select_db($con,$db);

if($regnum && $name && $gender && $address && $email && $mobile && $password && $cpassword)
{
	if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
	{
		if(strlen($mobile)==10)
		{
		if(strlen($password)>=5)
		{
			
			if($password==$cpassword)
			{
	
				$registered=mysqli_query($con,"SELECT regnum FROM users WHERE regnum='$regnum'");
				$count=mysqli_num_rows($registered);
				$remail=mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
				$ecount=mysqli_num_rows($remail);
	
				if($count!=0)
				{
				echo "<b>ERROR:<b> Registration Number Already Taken!";
				
				}
				else {
					if($ecount!=0)
					{
						echo "<b>ERROR:<b> Email Already Taken!";
					}
	
					else{
						if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp") )
						{
						
						$directory = "./profiles/$regnum/images/";
						mkdir($directory, 0777, true);

						move_uploaded_file($temp, "profiles/$regnum/images/$mypic");
						
						echo "This will be you profile picture!<p><img border='1' width='50' height='50' src='profiles/$regnum/images/$mypic'><p>";
						
						$passwordmd5 = md5($password);
						mysqli_query($con,"INSERT INTO users(regnum,name,gender,mobile,address,email,password) VALUES('$regnum','$name','$gender','$mobile','$address','$email','$passwordmd5')");
						
						echo "You have succefully registered!<br/>";
						header("refresh:1, url=index.php");
					}
						else {
						echo "Please load a valid jpeg, jpg or bmp! And size must be less than 10k!";}
					}
						
			}
			}
					
			else
				{echo "<b>ERROR:<b> Password don't match";}
		}
		else 
			{echo "<b>ERROR:<b> Password too short! must be b/w 5 to 15 chars";}
		
		}
		else{
		echo "<b>ERROR:<b> Invalid Mobile Number";}
		
	}
	else{echo "<b>ERROR:<b> Please type a valid email";}
}
else{echo "<b>ERROR:<b> Please Fill The Form";}
mysqli_close($con);
?>


