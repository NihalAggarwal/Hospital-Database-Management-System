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
// include("connect.php");
$conn=oci_connect("Harsh","Vrunda@9977","localhost/xe");
if (!$conn)
        echo 'Failed to connect to Oracle';

if (isset($_POST['submit']))
      {
             $emp_id = $_POST['emp_id'];
             $dept_id = $_POST['dept_id'];
             $qualification=$_POST['qualification'];
             
             
      
             $q="Insert into doctor(emp_id,dept_id, qualification) values('$emp_id','$dept_id','$qualification')";
             echo $q;
             $stid = oci_parse($conn, $q);
             oci_execute($stid);
               // data not committed
             
            
      }
     

oci_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
  <style type="text/css">
  body{
  background-image:url('backgroundimg.jpeg'); 
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
<center><h3 class="heading"> Doctor Information.</h3></center>
<form action="" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>Doctor Id : </td> 
      <td> <input id="emp_id" type='text'  name="emp_id" placeholder="Enter doctor Id" required> </td> 
    
    </tr>
     <tr>
      <td>Department Id:  </td>
      <td> <input id="dept_id" type='text'  name="dept_id" placeholder="Enter department Id" required > </td> 
   
    </tr>
     <tr>
      <td> Qualification: </td>
      <td> <input id="qualification" type='text'  name="qualification" placeholder="Enter Id of head of department " required> </td>
          
    </tr>
    
      </table>
 <br>
       
          <tr>
    <td><input class="btn" type="submit" name="submit" value="Submit"></td>
    <td><input class="btn" type="reset" name="reset" value="Update"></td>
    <td><input class="btn" type="delete" name="delete" value="Delete"></td>
    </tr>
</form>
<hr>
</body>
</html>
