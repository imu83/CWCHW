<html>
<head>
<script type="text/javascript">
function IsValid()
{
	var isvalid = false;	

	var studentid =document.getElementById('txtstudentid');
	var password =document.getElementById('txtpassword');
		
	if(studentid.value!='')
	{		
		isvalid = true;
		}
	if(password.value!='')
	{
		isvalid = true;
		}
	else {		
		alert('please fill the mandatory');
		isvalid = false;
	}
	return isvalid;
}
</script>
</head>
<body>
	<h2>Your details</h2>
	<form name="formdetails" action="sql.php" method="post"
		onsubmit="return IsValid()">
		<table border='1'><tr><td>
		<div>

			<table>
				<tr>
					<td>ID Number :</td>
					<td><input id="txtstudentid" name="txtstudentid" type="text" /></td>
					<td>*</td>
				</tr>

				<tr>
					<td>Password :</td>
					<td><input id="txtpassword" name="txtpassword" type="text" /></td>
					<td>*</td>
				</tr>
				<tr>
					<td>dob :</td>
					<td><input name="txtdob" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>firstname :</td>
					<td><input name="txtfirstname" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>lastname :</td>
					<td><input name="txtlastname" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>house :</td>
					<td><input name="txthouse" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>town :</td>
					<td><input name="txttown" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>county :</td>
					<td><input name="txtcounty" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>country :</td>
					<td><input name="txtcountry" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td>post code :</td>
					<td><input name="txtpostcode" type="text" /></td>
					<td></td>
				</tr>
				<tr>
					<td><div>
							<input type="submit" value="Save" name="submit" />
						</div></td>

				</tr>
			</table>
		</div>
		<div>
			<?php
			//include_once $_SERVER ['DOCUMENT_ROOT'] . '/AmranProjects/application/Utility/Functions.php';
			include_once '../../Utility/Functions.php';
			
			SetupConnectionToDB ();
			$db_tbl_name = 'students';
			
			$myQuery = "SELECT * FROM {$db_tbl_name}";
			$resultSet = mysql_query ( $myQuery ) or die ( $myQuery . "<br/><br/>" . mysql_error () );
			
			//PrintAsJson($resultSet);
			PrintToHTML($resultSet);
			
			mysql_free_result ( $resultSet );
			
			?>
		</div>
</td></tr></table>
	</form>
</body>
</html>
