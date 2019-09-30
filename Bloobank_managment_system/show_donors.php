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
        <a>Donors</a>
            </h2>
            </a>
        </div>
	<?php
			$qry = "SELECT Did,d_fname,d_lname,Age,Gender,Phone,type FROM donor,blood where donor.bloodid = blood.bloodid";
			$res = $con->query($qry);
			$result = "";
			if ($res->num_rows>0) {
				$result .= "<table align='Center'>";
				$result .= "<th>Donor ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Phone</th><th>Blood ID</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr>
									<td>
										".$row['Did']."
									</td>
                                    <td>
										".$row['d_fname']."
									</td>
                                    <td>
										".$row['d_lname']."
									</td>
									<td>
										".$row['Age']."
									</td>
                                    <td>
                                        ".$row['Gender']."
                                    </td>
                                    <td>
                                        ".$row['Phone']."
                                    </td>
                                     <td>
                                        ".$row['type']."
                                    </td>
								</tr>";
				}
				$result .= "</table>";
			}
			echo $result;
	       ?>
</body>
</html>