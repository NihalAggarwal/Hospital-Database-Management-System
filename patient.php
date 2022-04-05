<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patient Info</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
    
<style type="text/css">

body{
  background-image:url("hos.jpg");}
</style>

    
</head>
<body>
<?php
// include("connect.php");
$conn=oci_connect("c##projectfinal","projectbest","localhost/xe");
if (!$conn)
        echo 'Failed to connect to Oracle';

if (isset($_POST['submit']))
      {
          
             $pat_id = $_POST['pat_id'];
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $mname=$_POST['mname'];
             $age=$_POST['age'];
         
             $gender=$_POST['gender'];
             $contact=$_POST['contact_number'];
             $emergency_contact=$_POST['emergency_contact'];
             $address=$_POST['address'];

             
             

             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
      
             $q="Insert into patient(pat_id,fname, mname,lname,gender,contact,age,emergency_contact,address) values('$pat_id','$fname','$mname','$lname','$gender','$contact','$age','$emergency_contact','$address')";

             $stid = oci_parse($conn, $q);
             oci_execute($stid);  // data not committed
             
            
      }

oci_close($conn);
?>


<center><h3 class="heading"> Patient Information.</h3></center>
<form action="" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>First Name : </td> 
      <td> <input id="fname" type='text'  name="fname" placeholder="Enter your First Name" required><br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Last Name :  </td>
      <td> <input id="lname" type='text'  name="lname" placeholder="Enter your last Name" required ><br><br> </td> 
    </tr>
     <tr>
      <td>Age:  </td>
      <td> <input id="age" type='text'  name="age" placeholder="Enter your age" required ><br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Contact  </td>
      <td> <input id="contact" type='text'  name="contact_number" placeholder="Enter your contact number " required><br><br> </td> 
    </tr>
    <tr>
          <td>gender</td>
          <td><input type="radio" name="gender" value="M" checked> Male
              <input type="radio" name="gender" value="F"> Female
              <input type="radio" name="gender" value="O"> Other
          </td>
    <!-- </tr>
    <tr> -->
          <td>emergency_contact</td>
          <td><input type="text" name="emergency_contact" placeholder="xxxxxxxxxx" maxlength="10" required></td>
          
    </tr>
     <tr>
          <td>pat_id</td>
          <td> <input type="text" name="pat_id" value="" required maxlength="11"> </td>
    <!-- </tr>
    <tr> -->
          <!-- <td>address</td>
          <td><input type="text" name="addreesss" value="" ></td>
    </tr>    -->
    <!-- <tr> 
          <td>Doctor Id</td>
          <td><input type="number" name="doctorId"> </td>
    </tr>    -->
    <tr>  
          <td>Address : </td>
          <td><textarea name="address" cols="40" rows="5" placeholder="Enter your Address" required maxlength="20"></textarea></td>
    <!-- </tr>
	<tr> -->
          <td>mname</td>
          <td><input type="text" name="mname" placeholder="Middle Name" value="" maxlength="20" ></td>
    </tr>
    <!-- <tr id="type">
          <td>Patient Type</td>
          <td> <input type="radio" name="patType" value="in" checked> Indoor
          <input type="radio" name="patType" value="out"> Outdoor
          <input type="radio" name="patType" value="reffered"> referred </td>
    </tr> -->
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