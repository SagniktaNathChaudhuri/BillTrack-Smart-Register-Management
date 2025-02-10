<?php
    $billid = $_GET['billid']; //hidden field name

//Database connection

    $conn = new mysqli('localhost','root','','etdc');
    
    $s = 0; 
    if($conn->connect_error){
        die('Connect Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("DELETE FROM register_details WHERE Bill_Id = ?");
        $stmt->bind_param("i", $billid);
        if($stmt->execute()){
            $s = 1;
        }
  
        // echo "registration succecsfully...";
        $stmt->close();
        $conn->close();
    }

    header("location: display_data.php?status=".$s);
?>
