<?php
include_once 'Utility/Functions.php';

$parameterList = array (
		"uid" 
);

$validList = ValidateParamaters ( $parameterList );

if (sizeof ( $validList ) == sizeof ( $parameterList )) {
	
	SetupConnectionToDB ();
	$db_tbl_name = 'profiles';
	
	$myQuery = "select userID, userPassword, userFullName, userAddress, userCity, userCountry, userCell, userEmail, userAddDate from {$db_tbl_name}  
	where userID = '{$validList [0]}'";
	
	$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	if (mysql_num_rows ( $resultSet ) > 0) {
		PrintAsJsonWithTableNameSingleObject ( $resultSet, $db_tbl_name );
	} else {
		PrintAsJsonFailed ();
	}
}
?>