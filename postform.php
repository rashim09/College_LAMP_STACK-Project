<?php

function insertdata() {
    
include('connection.php');
$mysqli=OpenCon();

$Title = $mysqli->real_escape_string($_POST['title']);
$price = $mysqli->real_escape_string($_POST['price']);
$description=$mysqli->real_escape_string($_POST['description']);
$email =    $mysqli->real_escape_string($_POST['email']);
$Agreement = $mysqli->real_escape_string($_POST['chk1']);
$subcategory = $mysqli->real_escape_string($_POST['subcategory']);
$location = $mysqli->real_escape_string($_POST['location']);


$query   = "INSERT into Posts ( Title, Price,Description,Email,Agreement,SubCategory_ID,Location_ID) VALUES('" . $Title . "','" . $price . "','" . $description . "','" . $email . "','" . $Agreement . "','" . $subcategory . "','" . $location . "')";
$success = $mysqli->query($query);
echo $success;
 
if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
    echo "error in connecton";
 
}else
    {
    header("Location:userprofile.php");
    echo '<script language="javascript">';
    echo 'alert("POST successfully submitted")';
    echo '</script>';

}
CloseCon($mysqli);
}


function validateform1() {
    $errcount=false;
    
    global $errcount,$emailErr ,$titleErr,$descriptionErr,$confemailErr ,$passwordErr,$subcategoryErr,$locationErr,$priceErr,$chkErr,
$email,$price,$title ,$confemail,$description,$chk1,$location,$subcategory ;
    
    if (empty($_POST["title"])) {
    $titleErr = "Title is required";
    $errcount=true;
  } else {
    $title = test_input($_POST["title"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$title)) {
      $titleErr = "Only alphabets and white space allowed";
      $errcount=true;
    }
  }
  
  if (empty($_POST["price"])) {
    $priceErr = "Price field value is required";
     $errcount=true;
  } else {
    $price = test_input($_POST["price"]);
      if (!preg_match("/^[0-9]*$/",$price)) {
      $priceErr = "Only numeric numbers are allowed";
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
  
   if (empty($_POST["confemail"])) {
   $emailErr = "ConfirmEmail is required";
    $errcount=true;
 } else {
    $confemail = test_input($_POST["confemail"]);
     //check if e-mail address is well-formed
  if ($confemail!=$email) {
      $confemailErr = "Confirm Email should match email ID";
     $errcount=true;
    }
  }
  
       if (empty($_POST["description"])) {
         $descriptionErr="Description is required";
         $errcount=true;
     }else{
     $description = test_input($_POST["description"]);  
  }
     
     if(empty($_POST['chk1']) || $_POST['chk1'] != '1'){
     $chkErr = "Please Agree terms and conditions";
     $errcount=true;
     } 
     
     
    if($errcount==false){
      return insertdata();
    
  }
}






function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>

