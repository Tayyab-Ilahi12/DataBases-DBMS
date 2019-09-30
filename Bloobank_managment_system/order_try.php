<?php
    

    include "connect.php";
                        

                if(isset($_POST['submit']))
                {
                    $order_id = $_POST['txtOID'];
                        $hospital_id = $_POST['txtHID'];
                        $BB_number = $_POST['txtBBNO'];
                        $Btype = $_POST['txtBtype'];
                        $Quantity = $_POST['txtquantity'];
            
                        $qry = "INSERT INTO orders (OID,HID,BBNO,Btype,Quantity) VALUES('{$order_id}','{$hospital_id}','{$BB_number}', '{$Btype}', '{$Quantity}')";
                    
                        if ($con->query($qry)) {
                            $msg = "Order Placed";
                        }
                        else
                            $msg = "Error!";

                        //echo $msg;

                        header("Location:order.php?Message=$msg");
                }
                        
                    ?>