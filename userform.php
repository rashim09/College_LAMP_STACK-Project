<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Homepages.css">

    <style>
       .header{
           margin-top : 30px;}

        .table{
            /*border: 1px solid black;*/
            /*width: 400px;*/
            /*margin:80px;*/
            /*margin-left: 300px;*/
            /*padding-top: 20px;*/
        /*display: inline-block;*/
            position:absolute;
            left: 250px;
            top: 150px;
        }

       input {
           width: 375px;
           height: 25px;
       }
        .error {color: #FF0000;}
    </style>
</head>
<?php


$unameErr = $emailErr =$fnameErr=$lnameErr =$passwordErr="";
$uname = $email = $fname = $lname =$password  ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 include 'signup.php'; 
 validateform();
 
}
?>
<body>
<div class="container">
    <div class="header">
        <img src="image.jpg" alt="logo">
        <h1>  One Stop Shopping Center</h1>
        <hr>
         
        <a href="HomePage.php">Back to Home Page</a><br>
        
        
    </div>

    <p><span class="error">* required field.</span></p>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
        <fieldset class="table">
            <input type="text" id="uname" name="uname" placeholder="User name" required >
            <span class="error">* <?php echo $unameErr;?></span>
            <br><br>
            <input type="text" id="fname" name="fname" placeholder="First name" required >
            <span class="error">* <?php echo $fnameErr;?></span>
            <br><br>
            <input type="text" id="lname" name="lname" placeholder="Last name" required>
            <span class="error">* <?php echo $lnameErr;?></span>
            <br><br>
            <input type="email" id="email" name="email" placeholder="address@email.com" required>
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <input type="password" id="password" name="password"  placeholder="eightcharacter password"required>
            <span class="error">* <?php echo $passwordErr;?></span>
            <br><br>
        <input type="reset" value="Reset" />
        <input type="submit" value="Submit"  />
            <br/>
        <br>
    </fieldset>
    </form>

  
</div>

</body>
</html>