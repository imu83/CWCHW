<?php

include_once $_SERVER ['DOCUMENT_ROOT'] . '/AmranProjects/application/Utility/Functions.php';
include_once '../../Utility/Functions.php';

SetupConnectionToDB ();

$db_tbl_name = 'students';

if (isset ( $_POST ['txtstudentid'] )) {
	
	if (!empty ( $_POST ['txtstudentid'] )) {
		
		$id = $_POST ['txtstudentid'];
		$password = $_POST ['txtpassword'];
		$dob = $_POST ['txtdob'];
		$firstname = $_POST ['txtfirstname'];
		$lastname = $_POST ['txtlastname'];
		$house = $_POST ['txthouse'];
		$town = $_POST ['txttown'];
		$county = $_POST ['txtcounty'];
		$country = $_POST ['txtcountry'];
		$postcode = $_POST ['txtpostcode'];
		
		$sql = "INSERT INTO {$db_tbl_name} (studentid,password,dob,firstname,
		lastname,house,town,county,country,postcode) 
		VALUES ('$id','$password','$dob','$firstname','
		$lastname','$house','$town','$county','$country','$postcode')";
		
		if (mysql_query ( $sql )) {
			/*echo "New record created successfully";
			echo "<br>";
			echo "<a href='New_Student.php'>Back to main page</a>";*/
			
			/* Redirect browser */
			header("Location: New_Student.php"); 
			exit();
			
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error ( $conn );
		}
	}
}

$myQuery = "SELECT * FROM {$db_tbl_name}";
$resultSet = mysql_query ( $myQuery ) or die ( $myQuery . "<br/><br/>" . mysql_error () );

PrintToHTML ( $resultSet );

mysql_free_result ( $resultSet );

?>