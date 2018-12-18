<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All POST Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Homepages.css">
</head>
  <body>
      <table align="center">
        <tr>
            <td rowspan="2"><img src="image.jpg" alt="logo" height="100" width="100" align="left"></td>
            <td colspan="3" ><h1> One Stop Shopping Center</h1></td>
        </tr>
          <tr>
          <td style="text-align:center">
             
           <a href="HomePage.php"> Homepage|</a>
           <a href="login.php"> Login|</a>
           <a href="Help.html">Help</a>

          <td style="text-align:center">
                      <a href="userform.php">Sign UP for New POST</a>
                   </td>
        </tr>

      </table>
      <hr/>
      <table align='center' border="1" cellpadding="1" cellspacing="1">
          <thead>
			<tr>
				<th>Post_ID</th>
				<th>Title</th>
				<th>Price</th>
				<th>Description</th>
                                <th>Email</th>
                                <th>Category</th>
				<th>SubCategory</th>
                                <th>Country</th> 
                                <th>City</th> 
                                
			</tr>
		</thead>
                    
<?php
include ('connection.php');
$mysqli=OpenCon();

$search = $_GET['search'];
    // gets value sent over search form
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($search) >= $min_length){ // if query length is more or equal minimum length then
         
     // changes characters used in html to their equivalents, for example: < to &gt;
        
        $search=$mysqli->real_escape_string($_GET['search']);
        // makes sure nobody uses SQL injection
         
       $query = "SELECT Posts.Post_ID,Posts.Title, Posts.Price, Posts.Description ,Posts.Email,Category.CategoryName,SubCategory.SubCategoryName,Region.RegionName,Location.LocationName FROM Posts  "
        . "LEFT JOIN SubCategory ON Posts.SubCategory_ID=SubCategory.SubCategory_ID "
        . "LEFT JOIN Category ON SubCategory.Category_ID=Category.Category_ID "
        . "LEFT JOIN Location ON Posts.Location_ID=Location.Location_ID " 
        . "LEFT JOIN Region ON Location.Region_ID=Region.Region_ID 
            WHERE (`Title` LIKE '%".$search."%') OR (`SubCategoryName` LIKE '%".$search."%') OR (`CategoryName` LIKE '%".$search."%') OR (`Description` LIKE '%".$search."%') OR (`RegionName` LIKE '%".$search."%') OR (`LocationName` LIKE '%".$search."%')" or die(mysql_error());
             $success = $mysqli->query($query);
        
        if(mysqli_num_rows($success) > 0){ // if one or more rows are returned do following
             
            while($row = mysqli_fetch_array($success)){
         
        echo '<tr>
                  
        <td>'. $row['Post_ID']     . '</td>
        <td>'. $row['Title']       . '</td>
        <td>'. $row['Price']       .' </td>
        <td>'. $row['Description'] .'</td>
        <td>'. $row['Email']       .'</td>
        <td>'. $row['CategoryName'].'</td>
        <td>'. $row['SubCategoryName'].'</td>
        <td>'. $row['RegionName'].'</td>    
        <td>'. $row['LocationName'] . '</td> 
        </tr>';  
}

echo "</table>"; //Close the table in HTML

CloseCon($mysqli); //C// posts results gotten from database(title and text) you can also show id ($results['id'])
            }       
        }   
    else{ // if query length is less than minimum
        echo "Search Keyword should be atleast of ".$min_length." characters";
    }
?>

