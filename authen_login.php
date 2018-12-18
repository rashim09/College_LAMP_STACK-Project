<?php     
 require('connection.php');
 $mysqli=OpenCon();
if (isset($_POST['uname']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $mysqli->real_escape_string($_POST['uname']);
$password = md5($_POST['password']);

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM userdetails WHERE username='".$username."' and password='".$password."'";
 
$result = $mysqli->query($query) ;
$count = mysqli_fetch_row($result);

if (!empty($count)){


//redirect to userpage
header("Location:userprofile.php");
//header("Refresh:0; url=login.php");
//echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
//echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "Invalid Login Credentials";
}


CloseCon($mysqli);
}
?>
