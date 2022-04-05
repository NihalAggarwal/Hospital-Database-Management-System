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
  background-image:url("hosp2.jpg");}
</style>

    
</head>
<body>
<?php
error_reporting(0);
// include("connect.php");
$conn=oci_connect("Harsh","Vrunda@9977","localhost/xe");
if (!$conn)
        echo 'Failed to connect to Oracle';



if (isset($_POST['submit']))
      {
            

            $dept_id=$_POST['dept_id'];
            $equip_id=$_POST['equip_id'];
            $equip_name=$_POST['equip_name'];
            $cost=$_POST['cost'];
            $stock=$_POST['stock'];


           
             // Before running, create the table:
             //   CREATE TABLE MYTABLE (col1 NUMBER);
             
            $query="Insert INTO inventory(equip_id,dept_id,equip_name,cost,stock) values ('$equip_id','$dept_id','$equip_name',$cost,$stock)";
             $stid = oci_parse($conn, $query);
            oci_execute($stid);  // data not committed
            if ($stock<3){
                echo "<br>Stocks less than 3.<br>";
            }
             
            
      }


// $conn = oci_connect('projectfinal', 'projectbest', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT * FROM  inventory');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";


// oci_execute($stid);
// echo $stid;
oci_close($conn);


?>
<center><h3 class="heading"> Inventory Information.</h3></center>
<form action="" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>Equipment ID </td> 
      <td> <input id="equip_id" type='text'  name="equip_id" placeholder="Equipment Id" required><br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Equipment Name   </td>
      <td> <input id="equip_name" type='text'  name="equip_name" placeholder="Equipment Name" required ><br><br> </td> 
    </tr>
     <tr>
      <td>Department ID</td>
      <td> <input id="dept_id" type='text'  name="dept_id" placeholder="Dept" required ><br><br> </td> 
      <td>Cost</td>
      <td> <input id="cost" type='text'  name="cost" placeholder="Cost of Equip" required ><br><br> </td> 
      <td>In Stock</td>
      <td> <input id="stock" type='text'  name="stock" placeholder="Enter Number available" required ><br><br> </td> 
 
  
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