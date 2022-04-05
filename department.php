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
   
    
    <li><a href='inventory.php'>Inventory</a></li>
    
    
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
          
             $dept_id = $_POST['dept_id'];
             $dept_name=$_POST['dept_name'];
             $dept_head_id=$_POST['dept_head_id'];
             
             
      
             $q="Insert into department(dept_id,d ept_name, dept_head_id) values('$dept_id','$dept_name','$dept_head_id')";
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
    <title>Doctor Info</title>
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

<table cellpadding=12>

<center><h3 class="heading"> Department Information.</h3></center>
<form action="" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>Department Name : </td> 
      <td> <input id="dept_name" type='text'  name="dept_name" placeholder="Enter department Name" required><br><br> </td> 
    
    </tr>
     <tr>
      <td>Department Id  </td>
      <td> <input id="dept_id" type='text'  name="dept_id" placeholder="Enter department Id" required ><br><br> </td> 
   
    </tr>
     <tr>
      <td> Head of department  </td>
      <td> <input id="dept_head_id" type='text'  name="dept_head_id" placeholder="Enter Id of head of department " required><br><br> </td>
          
    </tr>
     <tr>
          
    <tr>  
          
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
