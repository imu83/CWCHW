<?php
include_once 'Utility/Functions.php';

$parameterList = array (
		"uid",
		"upass",
		"ufullname",
		"uaddress",
		"ucity",
		"ucountry",
		"ucell",
		"uemail" 
);

$validList = ValidateParamatersPost ( $parameterList );

if (sizeof ( $validList ) == sizeof ( $parameterList )) {
	SetupConnectionToDB ();
	$db_tbl_name = 'profiles';
	
	$myQuery = "insert into {$db_tbl_name}
	(userID, userPassword, userFullName, userAddress, userCity, userCountry, userCell, userEmail)
	VALUES (
	'{$validList [0]}', '{$validList [1]}',
	'{$validList [2]}', '{$validList [3]}',
	'{$validList [4]}', '{$validList [5]}',
	'{$validList [6]}', '{$validList [7]}')";
	
	$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	if ($resultSet) {
		$myQuery = "insert into users
		(userID, userPassword)
		VALUES (
		'{$validList [0]}', '{$validList [1]}')";
		
		$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	}
	
	$myQuery = "SELECT * FROM {$db_tbl_name} where userID = '{$validList [0]}'";
	$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	PrintAsJsonWithTableNameSingleObject ( $resultSet, $db_tbl_name );
	
	mysql_free_result ( $resultSet );
}
?>