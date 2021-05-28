<?php
require_once("connection.php");
if(isset($_GET['Del']))
         {
             $UserID = $_GET['Del'];
             echo $UserID;
             $query = "DELETE FROM `login` WHERE `login`.`User_ID` ='".$UserID."'";
             $result1 = mysqli_query($con, $query);
             echo $result1;

             if($result1)
             {
                 header("location:view.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view.php");
         }
         ?>
