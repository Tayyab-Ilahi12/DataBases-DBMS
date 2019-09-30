<?php
 include ('connect.php');
session_start();
?>


<!DOCTYPE html>

<html>
<head>
	<title>Order Blood</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/s11.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <style>
            body {
            background: url('images/1.jpg') no-repeat fixed center center;
            background-size: cover;
            font-family: monospace;
            font-size: x-large;
            font-weight: bold;
        }

    </style>
    
</head>
<body>
<div id="full">
	<div id="inner_full">
		<div id="header"><a href="login2.php" style="text-decoration: none; color: white;">
        <h2 class = '' align = "center">
        <a>Blood Bank management System</a>
            </h2>
            </a>
        </div>
            <div id="body"></div>
			<h1 align = "center">Place Order</h1>
			<center><div id="form">
        <form action="order_try.php" method="POST">
			<table  class = "login-block"  >
            <?php
                $qry = "select * from orders";
                $select_all_id = mysqli_query($con, $qry);
                while($row=mysqli_fetch_assoc($select_all_id))
                {
                    $order_id = $row['OID']+1;
                }
                ?>
        <tr>
		    <td width="200px" height="70px">Order ID</td> 
            <td width="200px" height="40px"><input type="text" value = "<?php echo $order_id; ?>" class = "form-control" name="txtOID" required placeholder="Order ID"></td>
		</tr>
		<tr>
		    <td width="100px" height="70px">Hospital ID</td>
            <td width="200px" height="40px"><input type="text" class = "form-control" name="txtHID" required placeholder="Hospital ID"></td>
		</tr>
		<tr>
		<td width="200px" height="50px">Blood Bank</td>
		<td width="200px" height="50px"><input type = "text"
        name = "txtBBNO" class = "form-control" placeholder="Blood Bank"> </td>
		</tr>
		<tr>
		<td width="200px" height="50px">Blood Type</td>
		<td width="200px" height="50px"><input type="txt" class = "form-control" name="txtBtype"  placeholder="Blood Type"></td>
		</tr>
        <tr>        
			<td width="200px" height="50px">Quantity</td>
		<td width="200px" height="50px"><input class = "form-control" type="txt" name="txtquantity"  placeholder="Qunatity"></td>
		</tr>
			<tr>
				<td height = "100px" colspan="4" align="right">
					<input name = "submit" type="submit" class="btn btn-dark" value="Place Order">
				</td>
			</tr>
			<tr>
				<td colspan="2">
                    	<?php
						if (isset($_GET["Message"])) {
							echo $_GET["Message"];
						}
                        else
                        {
                            echo " ";
                        }
					?>
				</td>
			</tr>
		</table>
	</form>
                </div>
        </body>
</html>