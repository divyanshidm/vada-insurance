<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Profile</title>
<style type="text/css">

body{
background-color:#FFFFCC;
}

#left{
border: 1px solid black;
align:left;

}



#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:90px;
}

#logo1{
width:102%;
border:solid 2px black;
text-align:center;
background-color:green;
margin-top:-7px;
margin-left:-10px;
}

#logo2{
border:solid 1px black;
width:100%;
text-align:center;
}

#logo3{
text-align:left;
}

#logo5{
width:33.33%;
}

#photo{
border:1px solid black;
margin-left:1200px;
width:80px;
height:100px;
}

</style>

</head>

<body>

<div id="logo1">
<table id="logo2" >
  <tr>
    <td  id="logo3">&nbsp;
    	<img src="logo1.PNG" height="100" width="145">
    </td>
    <td id="logo4">
    	<br>
    	<font size=6.5 color=#FFFFFF face="Times New Roman">
    	<b>Welcome</b><br>VADA Insurance
     	</font>
    </td>
<td id="logo5"></td> 
 </tr>
</table>
</div>


<?php include("clone_cust_session.php") 
?>
<h3><strong>Profile</strong></h3>

<div id="left">
<h4><strong><u>Personal Details</u></strong></h4>
<table>
<tr><td>Name: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT FIRST_NAME FROM customer WHERE CUSTOMER_ID=$temp_cid "))['FIRST_NAME'];

	?></td>
	<td rowspan="5"> <div id="photo"><?php $open = opendir($dir);
	while(($file = readdir($open)) != FALSE)
	{
		if($file!="."&&$file!=".."&&$file!="Thumbs.db")
		{
			echo "<img border='1' width='80' height='100' src='$dir/$file'><br />";
		}
	}
	?></div>
</tr>
<tr><td>Customer ID: </td><td><?php echo $temp_cid; ?></td></tr>
<tr><td>Sex: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT SEX FROM customer WHERE CUSTOMER_ID=$temp_cid "))['SEX'];

	?></td></tr>
<tr><td>DOB: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT DOB FROM customer WHERE CUSTOMER_ID=$temp_cid "))['DOB'];

	?></td></tr>
<tr><td>Phone: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT PHONE_NUMBER FROM customer WHERE CUSTOMER_ID=$temp_cid "))['PHONE_NUMBER'];

	?></td></tr>
</table>

<h5><strong><u>Address</u></strong></h5>
<table>
<tr><td>House number: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT HOUSE_NUMBER FROM customer WHERE CUSTOMER_ID=$temp_cid "))['HOUSE_NUMBER'];

	?></td></tr>
<tr><td>Street: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT STREET FROM customer WHERE CUSTOMER_ID=$temp_cid "))['STREET'];

	?></td></tr>
<tr><td>City: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT CITY FROM pin_city WHERE PINCODE=$temp_pin "))['CITY'];

	?></td></tr>
<tr><td>State: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT STATE FROM pin_state WHERE PINCODE=$temp_pin "))['STATE'];

	?></td></tr>
<tr><td>PIN code: </td><td><?php echo $temp_pin; ?></td></tr>
<tr><td></td><td></td></tr>
</table>
</div>

<div id="foot"><br />&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>
