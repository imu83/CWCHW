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

$validList = ValidateParamaters ( $parameterList );

if (sizeof ( $validList ) == sizeof ( $parameterList )) {
	SetupConnectionToDB ();
	$db_tbl_name = 'profiles';
	
	$myQuery = "update {$db_tbl_name} set
	userPassword = '{$validList [1]}',
	userFullName = '{$validList [2]}',	 
	userAddress = '{$validList [3]}',
	userCity = '{$validList [4]}',
	userCountry = '{$validList [5]}', 
	userCell = '{$validList [6]}',
	userEmail = '{$validList [7]}'
	where userID = '{$validList [0]}'";
	
	$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	if ($resultSet) {
		$myQuery = "update users set 
		userPassword = '{$validList [1]}'  
		where userID = '{$validList [0]}'";
	
		$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	}
	
	$myQuery = "SELECT * FROM {$db_tbl_name} where userID = '{$validList [0]}'";
	$resultSet = mysql_query ( $myQuery ) or die ( PrintAsJsonFailedWithMessage ( mysql_error () ) );
	
	PrintAsJsonWithTableNameSingleObject ( $resultSet, $db_tbl_name );
	
	mysql_free_result ( $resultSet );
}

?>