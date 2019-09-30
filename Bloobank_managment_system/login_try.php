<?php
    include "connect.php";
    session_start();

    $user = $_POST["txtUser"];
    $pass = $_POST["txtPass"];
    
    $qry = "SELECT * FROM bb_mgr WHERE MgrID = '".$user."'";
    //echo $qry;
    $res = $con->query($qry);

    $msg = "";
    if($res->num_rows > 0)
    {
        //user exists
        $row = $res->fetch_assoc();
        if($row["password"] == $pass)
        {
            $_SESSION["user"] = $user;
            
                header("Location:home2.php");
        }
        else
        {            
            $msg = "Invalid password";
            header("Location:login2.php?Message=$msg");
        }
    }
    else
    {
        $msg = "The Username: ".$user." does not exist!";
        header("Location:login2.php?Message=$msg");
    }
?>