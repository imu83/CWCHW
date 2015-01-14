<?php
include_once '../Utility/Functions.php';

$parameterList = array (
		"uid" 
);

$validList = ValidateParamaters ( $parameterList );

if (sizeof ( $validList ) == sizeof ( $parameterList )) {
	
	SetupConnectionToDB ();
	$db_tbl_name = 'profiles';
	
	$myQuery = "delete from {$db_tbl_name}  
	where userID = '{$validList [0]}'";
	
	$executionStatus = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	if ($executionStatus) {
		PrintAsJsonSuccess ();
	} else {
		PrintAsJsonFailed ();
	}
}

?>