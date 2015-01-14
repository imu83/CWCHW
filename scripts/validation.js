function IsValid()
{
	var isvalid = false;	

	var userID =document.getElementById('userID');
	var password =document.getElementById('password');
		
	if(userID.value!='')
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