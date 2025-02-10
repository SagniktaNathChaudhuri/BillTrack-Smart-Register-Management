<?php
    $billid = $_POST['billid']; //hidden field name
    $bill_no = $_POST['bill_no'];
    $description = $_POST['description'];
    $budget_head = $_POST['budget_head'];
    $bill_date = $_POST['bill_date'];
    $bill_amount = $_POST['bill_amount'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];

//Database connection

    $conn = new mysqli('localhost','root','','etdc');
    
    $s = 0; 
    if($conn->connect_error){
        die('Connect Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("UPDATE register_details SET Bill_No = ?, Description = ?, Budget_Head = ?, Bill_Date = ?, Bill_Amount = ?, Status = ?, Remarks = ? WHERE Bill_Id = ?");
        $stmt->bind_param("ssssissi",  $bill_no, $description, $budget_head, $bill_date, $bill_amount, $status, $remarks, $billid);
        if($stmt->execute()){
            $s = 1;
        }
  
        // echo "registration succecsfully...";
        $stmt->close();
        $conn->close();
    }

    header("location: display_data.php?status=".$s);
?>
