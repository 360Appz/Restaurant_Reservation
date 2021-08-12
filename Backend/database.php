<?php

session_start();

//POST variables
$reserve_date = $_POST["reservedate"];
$name = $_POST["name"];
$pax = $_POST["pax"];
$phone = $_POST["phone"];

//SESSION Variables
 $_SESSION["reservedate"] = $reserve_date ;
 $_SESSION["name"] = $name ;
 $_SESSION["pax"] = $pax ;
$_SESSION["phone"] = $phone ;


require_once("settings.php");
       $conn = @mysqli_connect($host,$user,$pwd, $sql_db);
   
       if(!$conn)
       {
           echo "<p> Database connection failure </p>";
   
       }
       if($conn)
       {
       $sql_db = mysqli_query($conn, "reservation");
   
          //Create Database (Non-Existent)
                $query_Create = " CREATE TABLE IF NOT EXISTS Reservation(
                                  Reservation_id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                Reservation_Date DATETIME NOT NULL ,
                                Booking_Name VARCHAR(100) NOT NULL,
                                Pax VARCHAR(100) NOT NULL, 
                                Phone_Number VARCHAR(100) NOT NULL )";
   
           $query_Check = mysqli_query($conn, $query_Create);
          
            //Insert data into database
            $reserve_date = $_SESSION["reservedate"];
            $name = $_SESSION["name"];
            $pax = $_SESSION["pax"];
            $phone = $_SESSION["phone"];
          
        
   
            $sql_table = "reservation";


   
           $query_Insert = "INSERT INTO $sql_table(
                
           Reservation_Date,
            Booking_Name,
            Pax, 
            Phone_Number) 
            
VALUES('$reserve_date','$name','$pax', '$phone' )";
     //echo $query_Insert;

     $result = mysqli_query($conn, $query_Insert);


mysqli_close($conn);
        
//Redirects to confirmation page           
header("location: Confirmation.php");
session_destroy();
        }

       ?>