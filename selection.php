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
            <td rowspan="2"><img src="image.jpg" alt="cart" height="100" width="100" align="left"></td>
            <td colspan="3" ><h1> One Stop Shopping Center</h1></td>
        </tr>
          <tr>
          <td style="text-align:center">
           <a href="login.php"> Login| </a>
           <a href="Help.html"> Help | </a>
           <a href="HomePage.php"> HomePage </a>
           <td style="text-align:center">
            <a href="userform.php">Sign UP for New POST</a>
                   </td>
        </tr>

      </table>
      <hr/>
      <table align='center' border="2" cellpadding="1" cellspacing="1">
          <thead>
			<tr>
				<th>POST ID</th>
				<th>TITLE</th>
				<th>PRICE</th>
				<th>DESCRIPTION</th>
                                <th>EMAIL</th>
                                <th>Category</th>
				<th>SubCategory</th>
                                <th>Country</th> 
                                <th>City</th> 
                                
			</tr>
		</thead>
                    
<?php
include ('connection.php');
$mysqli=OpenCon();
error_reporting(0);

    if (!empty($_GET['SubCategoryName']) || !empty($_GET['RegionName']) || !empty($_GET['LocationName'])){
    
    $id=$mysqli->real_escape_string($_GET['SubCategoryName']);
    $idr=$mysqli->real_escape_string($_GET['RegionName']); 
    $idl=$mysqli->real_escape_string($_GET['LocationName']);
     
        // makes sure nobody uses SQL injection
        //function check($id) {
         GlOBAL $mysqli;
   
        $query = "SELECT Posts.Post_ID,Posts.Title, Posts.Price, Posts.Description ,Posts.Email,Category.CategoryName,SubCategory.SubCategoryName,Region.RegionName,Location.LocationName FROM Posts  "
        . "LEFT JOIN SubCategory ON Posts.SubCategory_ID=SubCategory.SubCategory_ID "
        . "LEFT JOIN Category ON SubCategory.Category_ID=Category.Category_ID "
        . "LEFT JOIN Location ON Posts.Location_ID=Location.Location_ID " 
        . "LEFT JOIN Region ON Location.Region_ID=Region.Region_ID 
            WHERE SubCategoryName='$id'OR RegionName='$idr'OR LocationName='$idl' " or die(mysql_error());
        
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
    else{
        echo 'No Output to show';
    }
    
?>
      </body>
      </html>



