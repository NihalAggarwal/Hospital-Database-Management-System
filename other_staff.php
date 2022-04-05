<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>department Info</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
    
<style type="text/css">

body{
  background-image:url("img1.jpg");}
</style>

    
</head>
<body>
<?php
// include("connect.php");
$conn=oci_connect("Harsh ","Vrunda@9977","localhost/xe");
if (!$conn)
        echo 'Failed to connect to Oracle';

if (isset($_POST['submit']))
      {
          
             $emp_id = $_POST['emp_id'];
             $charge_per_hour=$_POST['charge_per_hour'];
             $type=$_POST['type'];
             
             

             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
      
             $q="Insert into other_staff(emp_id, charge_per_hour,type) values('$emp_id',$charge_per_hour,'$type')";
             echo $q;
             $stid = oci_parse($conn, $q);
             oci_execute($stid);  // data not committed
             
            
      }

oci_close($conn);
?>


<center><h3 class="heading"> Other Staff Information.</h3></center>
<form action="" name="RegForm" method="POST" name="employee" onsubmit="return checkForInvalid()">
<table cellpadding=1>
     <tr>
          <td>emp_id</td>
          <td> <input type="text" name="emp_id" value="" required maxlength="11"> </td>
          
          <td>charge_per_hour</td>
          <td> <input id="charge_per_hour" type='text'  name="charge_per_hour" placeholder="Enter hours!" required > </td> 
          <td>type</td>
          <td> <input type="text" name="type" value="" required maxlength="11"> </td>

      </table>

 <br>
       
          <tr>
    <td><input class="btn" type="submit" name="submit" value="Submit"></td>
    <td><input class="btn" type="reset" name="reset" value="Reset"></td>
    </tr>
</form>
<hr>
</body>
</html>
