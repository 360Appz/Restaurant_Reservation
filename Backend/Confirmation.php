
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "description" content=" Restaurant Reservation - DigiX"/>
    <meta name = "keyword" content="Restaurant"/>
    <meta name = "author" content=" Joel Yeow"/>
    <title> Confirmation </title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet"/>
    <link href="../styles/styles.css" rel="stylesheet"/>
</head>

<nav class="index_menu">
  <img src="../styles/Images/logo.jpg" ></img>
   <ul>
     <li ><a href = "../index.html">Home</a></li>
     <li> <a  href = "../reservation.html">Reservation</a></li>
   </ul>
 </nav>

 <div class="Background">
 
    <section class="reservation">
        <div class="confirm_container">
        <h3>Restaurant Reservation</h3>
        </div>
        <table>

<?php
error_reporting(0);
require_once("settings.php");
$conn = @mysqli_connect($host,$user,$pwd, $sql_db); 

if(!$conn)
{
  echo "<p> Database connection failure </p>";
}
else
{
  $query = "Select * FROM reservation";
  $result = mysqli_query($conn,$query);

  if(!$result)
  {
    echo "<p> Something is wrong with  " ,$query,"</p>";           
  }
  else
   {
  
      echo "<table>
      <tr>\n
      <th>Reservation Date</th>
      <th>Name</th>
      <th>Pax</th>
      <th>Phone Number</th>
      </tr>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>",$row["reservedate"],"</td>\n";
      echo "<td>",$row["name"],"</td>\n";
       echo "<td>",$row["pax"],"</td>\n";
       echo "<td>",$row["phone"],"</td>\n";
      "</tr>";
     
                   
    }
      echo "</table>\n";
      mysqli_free_result($result);
    }

}
 mysqli_close($conn);
?>

</table>
</section> <!--hh-->

<section class="message">
  <h4>Reservation Successful</h4>
</section>

</div>
<footer class="footerCenter">
    <h3 class = "footertext">Created by Joel Yeow &nbsp; &#169; Copyright 2021 </h3>
  </footer>
</html>