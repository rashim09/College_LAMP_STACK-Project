<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Homepages.css">
</head>

<body>
<div class="container">
    <div class="header">
        <img src="image.jpg" alt="logo">
        <h1>  One Stop Shopping Center</h1>
       <hr>
    </div>
    </div>
<br>
<nav class="navbar navbar-inverse">
<ul class="nav navbar-nav">
    <li><a href="allposts.php">All Posts</a></li>

</ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="userform.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
   
</ul>
</nav>
<form action="browse.php" method="GET">
    Search Category: <input type="text" name="search" />
   
    <input type="reset" value="Reset" />
    <input type="submit" value="Submit"  /><br/>
    <br>

</form>
<article>
    <div class="Category">
        <h2 id="Category">Categories </h2>
        <section>
            <table>
                <thead>
                <tr>
                    <th colspan="5"> Different Categories Available </th>
                </tr>
                <thead>

                <tbody>

                <tr id="row1">

                    <td><b>For Sales</b></td>
                    <td><b>Services</b></td>
                    <td><b> Jobs</b></td>
                    <td><b>Country</b></td>
                    <td><b>Locations</b></td>


                </tr>

                <tr class="section">

                    <td ><a href="selection.php?SubCategoryName=Books" >Books</td>
                    <td><a href="selection.php?SubCategoryName=Computers"> Computers</td>
                    <td><a href="selection.php?SubCategoryName=Full_Time">Full_Time</td>
                    <td><a href="selection.php?RegionName=USA">USA </td>
                    <td><a href="selection.php?LocationName=Sanjose">Sanjose</td>

                </tr>

                <tr class="section" >
                    <td><a href="selection.php?SubCategoryName=Electronics">Electronics</td>
                    <td><a href="selection.php?SubCategoryName=Finance">Finance</td>
                    <td><a href="selection.php?SubCategoryName=Part_Time">Part_Time</td>
                    <td><a href="selection.php?RegionName=India">India</td>
                    <td><a href="selection.php?LocationName=Delhi">Delhi</td>

                </tr>
                <tr class="section">
                    <td><a href="selection.php?SubCategoryName=Household">Household </td>
                    <td><a href="selection.php?SubCategoryName=Medical">Medical</td>
                    <td><a href="selection.php?SubCategoryName=Volunteering">Volunteering</td>
                    <td><a href="selection.php?RegionName=Sweden">Sweden</td>
                    <td><a href="selection.php?LocationName=Stockholm">Stockholm </td>

                </tr>


                </tbody>
            </table>
        </section>
    </div>
</article>

    <footer>
        <button onclick="location.href=`Aboutus.php`" class="btn btn-info">About us </button> 
        <button onclick="location.href=`Help.html` " class="btn btn-info">Help</button>
        <button onclick="location.href=`TermsandCondition.php`" class="btn btn-info">Terms and Condition</button> 
    </footer>

</div>
</body>
</html>


