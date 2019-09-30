<?php
	include "connect.php";
	//echo "You are here, you have a quiz?";

	$Did = $_POST["txtdid"];
	$d_fname = $_POST["txtfname"];
	$d_lname = $_POST["txtlname"];
	$Age = $_POST["dAge"];
    $gender = $_POST["dGender"];
	$phone = $_POST["txtphone"];
	$Bloodid = $_POST["txtbid"];

	$qry = "INSERT INTO donor VALUES('".$Did."','".$d_fname."', '".$d_lname."', '".$Age."', '".$gender."', '".$phone."','".$Bloodid."')";

	//echo $qry;
	//$con->query($qry);

    if ($con->query($qry)) {
		$msg = "Donor Registered";
	}
	else
		$msg = "Error!";

    //echo $msg;

	header("Location:donor_register.php?Message=$msg");

?>
