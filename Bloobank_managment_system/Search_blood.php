<?php
	include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Blood Availability</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="css/s11.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
     <style>
    body {
            background:         #663E35;
            background-size: cover;
            color: black;
            font-size: large;
        }
        table, th, td {
          height: 30px;
          border: 2px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 4px;
          text-align: left;
        }
    </style>
</head>
    
<body>
	<form action="" method="post">
		<div class="Page-header mb-5" align="center">
            <h2>Blood's Information</h2>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <input type="text" name="txtSrch" placeholder="Blood ID" class="form-control" required>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" align="right">
                <input type="submit" value="Search" class="btn btn-primary btn-block">
            </div>
            <div class="col-sm-4"></div>
        </div>
	</form>
	<?php
		if (isset($_POST["txtSrch"])) {
			$blood_type = $_POST["txtSrch"];
			$qry = "SELECT Location,Bloodid,Quantity from blood_loc1,bloodbank where bloodbank.BBNO = blood_loc1.BBNO AND Bloodid = '".$blood_type."'";
			$res = $con->query($qry);
			$result = "";
            $result2 = "";
            $qry2 = "SELECT Bloodid,type from blood";
            $res2 = $con->query($qry2);
           
            if($res2->num_rows>0)
            {
                $result2 .= "<table align = 'right'" ;
               
                while($row2 = $res2->fetch_assoc())
                {
                    $result2 .= "<tr>
                                    <td >
                                        ".$row2['Bloodid']."
                                    </td>
                                    <td>
                                        ".$row2['type']."
                                    </td>
                                </tr>";
                    
                }
                $result2 .= "</table>";
            }
            echo $result2;

			if ($res->num_rows>0 ) {
                $i = 0;
				$result .= "<table align='center'>";
				$result .= "<th>Location</th><th>Bloodid</th><th>Quantity</th>";
				while ($row = $res->fetch_assoc()) 
				{
					//one row
					$result .= "<tr>
									<td>
										".$row['Location']."
									</td>
									<td>
										".$row['Bloodid']."
									</td>
                                    <td>
                                        ".$row['Quantity']."
                                    </td>
								</tr>";
				}
				$result .= "</table>";
			}
           //     echo "Not available";
                echo $result;
		}
	?>
</body>
</html>