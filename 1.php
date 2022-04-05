<?php
        $conn = oci_connect("Harsh","Vrunda@9977","localhost/xe");
        if (!$conn)
            	echo 'Failed to connect to Oracle';
        else
		echo 'Succesfully connected with Oracle DB';

        oci_close($conn);
?>

