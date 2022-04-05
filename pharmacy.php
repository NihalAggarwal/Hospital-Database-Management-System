<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>department Info</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
    
<style type="text/css">


</style>

    
</head>
<body>
<?php
//error_reporting(0);
// include("connect.php");
$conn=oci_connect("Harsh","Vrunda@9977","localhost/xe");
if (!$conn)
        echo 'Failed to connect to Oracle';


if (isset($_POST['submit']))
      {
            

            $medicine_id=$_POST['medicine_id'];
            $medicine_name=$_POST['medicine_name'];
            $medicine_cost=$_POST['medicine_cost'];
            $quantity=$_POST['quantity'];


           
             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
            $query="Insert INTO Pharmacy(medicine_id,medicine_name,medicine_cost,quantity) values ('$medicine_id','$medicine_name',$medicine_cost,$quantity)";
            $stid = oci_parse($conn, $query);
            oci_execute($stid);  // data not committed
            
             
      }


 $conn = oci_connect('Harsh', 'Vrunda@9977', 'localhost/XE');

oci_close($conn);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Info</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
  <style type="text/css">
  body{
  background-image:url('back.jpg'); 
  }
   header
{
       background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)); 
        
        height: 100vh;
        background-size: cover;
        background-position: center;
}
</style>
</head>
<body background="ps1.jpg">

<table cellpadding=12>
<center><h3 class="heading"> Pharmacy Information.</h3></center>
<form action="" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>Medicine ID </td> 
      <td> <input id="medicine_id" type='text'  name="medicine_id" placeholder="Medicine Id" required> </td> 
    <!-- </tr>
    <tr> -->
      <td>Medicine Name   </td>
      <td> <input id="medicine_name" type='text'  name="medicine_name" placeholder="Medicine Name" required > </td> 
    </tr>
      <td>Medicine Cost</td>
      <td> <input id="medicine_cost" type='text'  name="medicine_cost" placeholder="Medicine Cost" required > </td> 
      <td>Quantity</td>
      <td> <input id="quantity" type='text'  name="quantity" placeholder="Enter Number available" required > </td> 
 
  
      </table>
 <br>
       
          <tr>
    <td><input class="btn" type="submit" name="submit" value="Submit"></td>
    <td><input class="btn" type="reset" name="reset" value="Reset"></td>
    </tr>
</form>











<!--Echo HTML tags-->
</body>
</html>