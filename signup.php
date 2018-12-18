<?php

function insertdata(){
include ('connection.php');
$mysqli=OpenCon();


$user_name = $mysqli->real_escape_string($_POST['uname']);
$first_name = $mysqli->real_escape_string($_POST['fname']);
$last_name = $mysqli->real_escape_string($_POST['lname']);
$email =     $mysqli->real_escape_string($_POST['email']);
$password = md5($_POST['password']);


$query   = "INSERT into userdetails (username,firstname, lastname, email,password) VALUES('" . $user_name . "','" . $first_name . "','" . $last_name . "','" . $email . "','" . $password . "')";
$success = $mysqli->query($query);
echo $success;
 
if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
    echo "error in connecton";
}else
    {  
 
 //redirect to userpage
echo "<script type='text/javascript'>alert('Successfully Registered');
window.location='login.php';
</script>";
}
CloseCon($mysqli);
}


function validateform(){
    $errcount=false;
global $unameErr ,$emailErr ,$fnameErr,$lnameErr ,$passwordErr,
$uname , $email, $fname , $lname,$password ,$errcount;


  if (empty($_POST["uname"])) {
    $unameErr = "Name is required";
    $errcount=true;
  } else {
    $uname = test_input($_POST["uname"]);
    // check if username only contains letters,numbers and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$uname)) {
      $unameErr = "Only alphanumeric characters and white space allowed";
      $errcount=true;
    }
  }
  
   if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
    $errcount=true;
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only alphabets and white space allowed";
      $errcount=true;
    }
  }
  
     if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
    $errcount=true;
  } else {
    $fname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only alphabets and white space allowed";
      $errcount=true;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $errcount=true;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $errcount=true;
    }
  }
  
    if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    $errcount=true;
  } else {
    $password = test_input($_POST["password"]);
  }
  
  if($errcount==false){
      return insertdata();
    
  }
  
else
    {
    return '<span class="error">Please correct form errors</span>';
}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
