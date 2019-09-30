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
            font-family: Montserrat;
            font-size: large;
            
        }
        table, th, td {
          height: 20px;
          border: 2px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 3px;
          text-align: left;
        }
    </style>
</head>
     <h2 align = "center">Hospitals Information</h2>
	<?php
			$qry = "SELECT * FROM hospital";
			$res = $con->query($qry);
			$result = "";
			if ($res->num_rows>0) {
				$result .= "<table align='Center'>";
				$result .= "<th>Hospital ID</th><th>Hospital Name</th><th>Location</th><th width = '100px'>Phone</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr>
									<td>
										".$row['HID']."
									</td>
                                    <td>
										".$row['h_name']."
									</td>
                                    <td>
										".$row['Location']."
									</td>
									<td>
										".$row['Phone']."
									</td>
								</tr>";
				}
				$result .= "</table>";
			}
			echo $result;
	       ?>
</body>
</html>