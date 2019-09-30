<?php
	include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hospitals Location</title>
    <link rel="stylesheet" type="text/css" href="css/s11.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <style>
        body
        {
            background: #7D8D9E;
            background-size: auto;
            font-family: "calibri", Garamond, 'Comic Sans MS';
            font-size: large;
            
        }
        table, th, td {
          height: 20px;
          border: 2px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }
    </style>
</head>
    <div id="header"><a href="home2.php" style="text-decoration: none; color: white;">
        <h2 class = '' align = "center">
        <a>Orders Status</a>
            </h2>
            </a>
        </div>
	<?php
			$qry = "SELECT * FROM orders";
			$res = $con->query($qry);
			$result = "";
			if ($res->num_rows>0) {
				$result .= "<table align='Center'>";
				$result .= "<th>Order ID</th><th>Hospital ID</th><th>Blood Bank</th><th>Blood Type</th><th>Quantity</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr>
									<td>
										".$row['OID']."
									</td>
                                    <td>
										".$row['HID']."
									</td>
                                    <td>
										".$row['BBNO']."
									</td>
									<td>
										".$row['Btype']."
									</td>
                                    <td>
                                        ".$row['Quantity']."
                                    </td>
                                    <button></button>
								</tr>";
				}
				$result .= "</table>";
			}
			echo $result;
	       ?>
</body>
</html>