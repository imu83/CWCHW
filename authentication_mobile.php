<?php
include_once 'Utility/Functions.php';
$parameterList = array (
		"uid",
		"upass" 
);

$validList = ValidateParamaters ( $parameterList );

if (sizeof ( $validList ) == sizeof ( $parameterList )) {
	
	SetupConnectionToDB ();
	$db_tbl_name = 'users';
	
	$myQuery = "SELECT * FROM {$db_tbl_name} where userID = '{$validList[0]}' and userPassword = '{$validList[1]}'";
	$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	if (mysql_num_rows ( $resultSet ) > 0) {
		mysql_free_result ( $resultSet );
		
		/* Redirect browser */
		header ( "Location: Authorized.php?uid={$validList[0]}" );
		exit ();
	} else {
		header ( "Location: UnAuthorized.php" );
		exit ();
	}
}

?>