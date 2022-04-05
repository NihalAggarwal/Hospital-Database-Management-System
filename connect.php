<?php
// echo "connect.php page";
$con=oci_connect("Harsh","Vrunda@9977","localhost/xe");
if(!$con)
{ $err=oci_error();
  print("Error in connection to DB: ".$err);
  exit(1);
}
//else print ("Connected to DB : ");
?>
