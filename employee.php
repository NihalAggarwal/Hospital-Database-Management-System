<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="index.css"> 
    <style type=text/css>
    </style>
</head>


    
<body>

   <div id="mainHeader">
   <div id="header1">
  
    <li><a href='doctor.php'>doctor info</a></li>
    <li><a href='other_staff.php'>General staff</a></li>
    
</body>
</style>
</html>
<?php
// include("connect.php");
$conn=oci_connect("Harsh","Vrunda@9977","localhost/xe");
if (!$conn)
        echo 'Failed to connect to Oracle';

if (isset($_POST['submit']))
      {
          
             $emp_id = $_POST['emp_id'];
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $mname=$_POST['mname'];
             $age=$_POST['age'];
         
             $gender=$_POST['gender'];
             $contact=$_POST['contact_number'];
            //  $emergency_contact=$_POST['emergency_contact'];
             $address=$_POST['address'];
             $salary=$_POST['salary'];
             $DOB=$_POST['DOB'];
             $jd=$_POST['jd'];
             
             

             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
      
             $q="Insert into employee(emp_id,fname, mname,lname,DOB,gender,jd,contact,address,salary) values('$emp_id','$fname','$mname','$lname',date '$DOB','$gender',date '$jd','$contact','$address',$salary)";
             echo $q;
             $stid = oci_parse($conn, $q);
             oci_execute($stid);  // data not committed
             
            
      }
      if (isset($_POST['Update']))
      {
          
             $emp_id = $_POST['emp_id'];
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $mname=$_POST['mname'];
             $age=$_POST['age'];
         
             $gender=$_POST['gender'];
             $contact=$_POST['contact_number'];
            //  $emergency_contact=$_POST['emergency_contact'];
             $address=$_POST['address'];
             $salary=$_POST['salary'];
             $DOB=$_POST['DOB'];
             $jd=$_POST['jd'];
             
             

             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
      
             $q="Insert into employee(emp_id,fname, mname,lname,DOB,gender,jd,contact,address,salary) values('$emp_id','$fname','$mname','$lname',date '$DOB','$gender',date '$jd','$contact','$address',$salary)";
             echo $q;
             $stid = oci_parse($conn, $q);
             oci_execute($stid);  // data not committed
             
            
      }

      if (isset($_POST['delete']))
      {
          
             $emp_id = $_POST['emp_id'];
             //$fname=$_POST['fname'];
             //$lname=$_POST['lname'];
             //$mname=$_POST['mname'];
             //$age=$_POST['age'];
         
             //$gender=$_POST['gender'];
             //$contact=$_POST['contact_number'];
            //  $emergency_contact=$_POST['emergency_contact'];
             //$address=$_POST['address'];
             //$salary=$_POST['salary'];
            // $DOB=$_POST['DOB'];
            // $jd=$_POST['jd'];
             
             

             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
      
             $q=" delete from employee where emp_id = '$emp_id' ";
             
             echo $q;
             $stid = oci_parse($conn, $q);
             oci_execute($stid);  // data not committed
             
            
      }

oci_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<div id="mainHeader">
<div id="header1">
   
   
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee informationt</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
  <style type="text/css">
  body{
  background-image:url('h.png'); 
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

<table cellpadding=20>

<center><h3 class="heading"> Employee Information.</h3></center>
<form action="" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>First Name : </td> 
      <td> <input id="fname" type='text'  name="fname" placeholder="Enter your First Name" ><br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Last Name :  </td>
      <td> <input id="lname" type='text'  name="lname" placeholder="Enter your last Name"  ><br><br> </td> 
    </tr>
     <tr>
      <td>Age:  </td>
      <td> <input id="age" type='text'  name="age" placeholder="Enter your age"  ><br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Salary  </td>
      <td> <input id="salary" type='text'  name="salary" placeholder="Enter The Salary " ><br><br> </td> 
    </tr>
    <tr>
          <td>gender</td>
          <td><input type="radio" name="gender" value="M" checked> Male
              <input type="radio" name="gender" value="F"> Female
              <input type="radio" name="gender" value="O"> Other
          </td>
    <!-- </tr>
    <tr> -->
          <td>contact</td>
          <td><input type="text" name="contact_number" placeholder="xxxxxxxxxx" maxlength="10" ></td>
          
    </tr>
     <tr>
          <td>emp_id</td>
          <td> <input type="text" name="emp_id" value=""  maxlength="11" require> </td>
          <td>JD</td>
          <td> <input type="date" name="jd" value=""  maxlength="21"> </td>
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
          <td><textarea name="address" cols="40" rows="5" placeholder="Enter your Address"  maxlength="20"></textarea></td>
    <!-- </tr>
	<tr> -->
          <td>mname</td>
          <td><input type="text" name="mname" placeholder="Middle Name" value="" maxlength="20" ></td>

          <td>DOB</td>
          <td> <input type="date" name="DOB" value=""  maxlength="20"> </td>

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
    <td><input class="btn" type="reset" name="reset" value="Update"></td>
    <td><input class="btn" type="submit" name="delete" value="Delete"></td>
    </tr>
</form>
<hr>
</body>
</html>
