<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Newpostform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" href="Homepages.css">
    <style>
        form{
    border:1px solid  #922b21 ;
    
}</style>
</head>

<?php

$emailErr=$titleErr =$passwordErr=$subcategoryErr=$locationErr=$priceErr=$chkErr=$descriptionErr=$confemailErr="";
$title=$price=$email=$confemail=$description=$chk1=$location=$subcategory ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 include 'postform.php'; 
 validateform1();
 
}

?>


<body>
    <div class="container">
<div class="header">
    <img src="image.jpg" alt="logo">
    <h1>  One Stop Shopping Center</h1>
    <hr>
</div>

  <p><span class="error">* required field.</span></p> 
  <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
          
<h2>New POST FORM</h2>
<fieldset class="position applied">
    <div id="subcategory">
        <label for="postioninput">
            Subcategory:
            <select name="subcategory" required>
                <option value="">Please Select</option>
                <option value="1">Books </option>
                <option value="2 ">Electronics </option >
                <option value="3"> Household</option >
                <option value="5">Computers </option >
                <option value="6 ">Financial </option >
                <option value="7"> Medical</option >
                <option value="8 Time">Full Time </option >
                <option value="9 Time ">Part Time </option >
                <option value="10"> Volunteering</option> 
            </select>
            </label>
            <label for="location">
                Location:
                <select name="location" required>
                    <option value="">Please Select</option> 
                    <option value="1">Sanjose</option >
                    <option value="2">Delhi</option >
                    <option value="3">Stockholm</option> 

                </select>
            </label>

    </div>

</fieldset>

<fieldset class="price">
    <label >Price</label> &nbsp    
        <input type="text" id="price" name="price" placeholder="price" required onkeyup="Price">
        <span class="error">* <?php echo $priceErr;?></span>
            
</fieldset>

        <fieldset class="Details">
            <label> TITLE </label>
            <input type="text" id="Title" name="title" placeholder="Title" >
            <span class="error">* <?php echo $titleErr;?></span>
            <br>
            <label> Description.</label>
            <br>
            <textarea id="feedback1" name="description" rows="7" cols="70"></textarea>
            <span class="error">* <?php echo $descriptionErr;?></span>
        </fieldset>

<fieldset class="Email">
    <label> Email</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input type="text" id="email" name="email" placeholder="address@email.com" >
    <span class="error">* <?php echo $emailErr;?></span><br>
    <label>Confirm Email</label>
       
        <input type="text" id="confemail" name="confemail" placeholder="address@email.com" >
    <span class="error">* <?php echo $confemailErr;?></span>
    
</fieldset>

<br>
<label> I agree with all terms and conditions </label>
<input type="checkbox" name="chk1" value="1"> 
<span class="error">* <?php echo $chkErr;?></span><br>


        <fieldset class="submitresetbutton">
            <input type="submit" id="submit" value="Submit ">
            <input type="reset" id="reset" value="Reset">
        </fieldset>
</form>
  
   <center>
        <a href="HomePage.php">Back to Home Page</a><br> <br>
       
    </center>
  
</div>
</body>
</html>

