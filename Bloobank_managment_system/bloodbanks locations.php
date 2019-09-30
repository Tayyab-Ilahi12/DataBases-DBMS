<?php
	include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>BloodBanks Location</title>
     <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/s11.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <style>
        body
        {
            background: #AEA647;
            background-size: cover;
            font-family: monospace;
            font-size: x-large;
            font-weight: 900px;
            
        }
        table, th, td {
          height: 20px;
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 3px;
          text-align: left;
        }
        table#t01 {
          width: 100%;    
          background-color: #16C1A4;
        }
    </style>
</head>
    <body>
        <h2 align = "center"></h2>
    <div align = "center">
        <a style="text-decoratio: none; color: white;">
        <a>Blood Bank Locations</a>
	<?php
			$qry = "SELECT * FROM bloodbank";
			$res = $con->query($qry);
			$result = "";

			if ($res->num_rows>0) {
				$result .= "<table id = 'to1' align='Center'>";
                $result .= "<th>BloodBank ID</th><th>Location</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr>
									<td>
										".$row['BBNO']."
									</td>
									<td>
										".$row['Location']."
									</td>
								</tr>";
				}
				$result .= "</table>";
			}
			echo $result;
	?>
        </div>
</body>
</html>