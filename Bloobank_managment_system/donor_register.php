<?php
include ('connect.php');
session_start();
?>


<!DOCTYPE html>

<html>
<head>
	<title>Donor Registeration</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/s11.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <style>
            body {
            background: url('images/1.jpg') no-repeat fixed center center;
              background-size: cover;
            font-family: monospace;
            font-size: large;
            font-weight: bold;
        }

    </style>
    
</head>
<body>
<div id="full">
	<div id="inner_full">
		<div id="header"><a href="Login.php" style="text-decoration: none; color: white;">
        <h2 class = '' align = "center">
        <a> Blood Bank management System</a>
            </h2>
            </a>
        </div>
            <div id="body"></div>
			<h1 align = "center">Donor Registration</h1>
			<center><div id="form">
				<form action="register_try.php" method="POST">
			<table  class = "login-block"  >
		<tr>
		<td width="100px" height="50px">Donor ID</td>
		<td width="200px" height="40px"><input type="text" class = "form-control" name="txtdid" required placeholder="Enter ID"></td>
		<td width="200px" height="50px">First Name</td>
		<td width="200px" height="50px"><input type="text" class = "form-control" name="txtfname" required placeholder="First Name"></td>
		</tr>
		<tr>
		<td width="200px" height="50px">Last Name</td>
		<td width="200px" height="50px"><input type = "text"
        name = "txtlname" class = "form-control" placeholder="Last Name"> </td>
		<td width="200px" height="50px">Age</td>
		<td width="200px" height="50px"><input type="text" class = "form-control" name="dage" required placeholder="Age"></td>
		</tr>
		<tr>
		<td width="200px" height="50px">Gender</td>
		<td width="200px" height="50px"><input type="text" class = "form-control" name="dGender" required placeholder="Gender"></td>
        </tr>
		<tr>
		<td width="200px" height="50px">Phone</td>
		<td width="200px" height="50px"><input type="txt" class = "form-control" name="txtphone" required placeholder="Phone"></td>
		</tr>
        <tr>        
			<td width="200px" height="50px">Blood ID</td>
		<td width="200px" height="50px"><input class = "form-control" type="txt" name="txtbid" required placeholder="Blood ID"></td>
		</tr>
			<tr>
				<td colspan="2" align="left">
					<input type="submit" class="btn btn-dark" value="Register">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php
						if (isset($_GET["Message"])) {
							echo $_GET["Message"];
						}
					?>
				</td>
			</tr>
		</table>
	</form>
                </div>
        </body>
</html>