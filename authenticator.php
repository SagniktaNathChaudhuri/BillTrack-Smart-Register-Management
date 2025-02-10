<?php
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    //$employee_name = $_POST['employee_name'];

//Database connection

    $conn = new mysqli('localhost','root','','etdc');
    
    $s = 0; 
    if($conn->connect_error){
        die('Connect Failed : '.$conn->connect_error);
    }else{
        // $stmt = $conn->prepare("insert into mass_user(user_name, password, employee_name) values(?, ?, ?)");
        // $stmt->bind_param("sss",  $user_name, $password, $employee_name);
        // if($stmt->execute()){
        //     $s = 1;
        // }

        $sql = "SELECT user_id FROM mass_user WHERE user_name = '". $user_name. "' and password = '". $password."'";
        $result = mysqli_query($conn,$sql);
        
        $num=mysqli_num_rows($result);

        if ($num == 1){
            header("location: template.php");
        }
        else{
            header("location: index.php?status=0");
        }

        // echo "registration succecsfully...";
        $stmt->close();
        $conn->close();
    }

    
?>
