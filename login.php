<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LoginPage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Homepages.css">
   
</head>

<body>
<div class="container">
    <div class="header">
        <img src="image.jpg" alt="logo">
        <h1>  One Stop Shopping Center</h1>
        <hr>
    </div>

    
    <form method="post" action="authen_login.php">
        <center><h1>Login Page</h1></center>
        <table align="center">
            
            <tr>
                <td align="center"> Username:
                    <input type="text" name="uname" required/></td>
            </tr>
            <tr>
                <td align="center">Password:
                    <input type="password" name="password"  required/></td>
            </tr>
           
            <tr>
                <td align="center" colspan=2>
                    <input type="submit" value="Login" name="login" />
                    <input type="reset" value="clear" name="clear" />
                </td>
            </tr>
        </table>
    </form>


    <center>
        <a href="HomePage.php">Back to Home Page</a><br> <br>
        <a href="userform.php">Not a member,Register Now</a>
    </center>


</body>
</html>



