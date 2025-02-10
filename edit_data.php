<?php

$billno = 0;

if(isset($_GET['billid'])){
    $bid = (int)($_GET['billid']);
    //echo "bill id is " . $bid;

    //Database connection
    
    $conn = new mysqli('localhost','root','','etdc');
        
    if($conn->connect_error){
        die('Connect Failed : '.$conn->connect_error);
    }
    $sql = "SELECT * FROM register_details  WHERE Bill_Id = ". $bid;
    $result = mysqli_query($conn,$sql);
    
    $num=mysqli_num_rows($result);

    if($num> 0){
        while($row = mysqli_fetch_assoc($result)){

            $billno = $row['Bill_No'];
            $desc = $row['Description'];
            $budg = $row['Budget_Head'];
            $billdate = $row['Bill_Date'];
            $amount = $row['Bill_Amount'];
            $stat = $row['Status'];
            $rem = $row['Remarks'];  
    

        }
    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 




<style>
body, html{
     height: 100%;
     background-repeat: no-repeat;
     background-color: #d3d3d3;
     font-family: 'Lato', Verdana;
}

.main{
     margin-top: 70px;
}
.form-group{
    margin-bottom: 15px;
}



input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
     background-color: #E1FFE1;
    /* shadows and rounded borders */
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

label{
    margin-bottom: 15px;
    font-size:18px;
}
.main-center{
     margin-top: 30px;
     margin: 0 auto;
     max-width: 330px;
    padding: 40px 40px;

}

.login-button{
    margin-top: 5px;
}

.login-register{
    font-size: 12px;
    text-align: center;
    text-decoration:underline;
    color:#5CB85C;
    font-weight:bold;
}
.iconbk{
    background-color:#5CB85C;
}
</style>        
</head>

<body>

<?php

include "Navbar.php";

?>

    <?php

      if(isset($_GET['status'])){
        if($_GET['status'] == 1){
            echo "Bill details saved successfully";
        } else {
            echo "Failed to save bill details";
        }
      }
    ?>

        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                           <h1 class="title">Edit Bill Register</h1>
                           <hr />
                       </div>
                </div> 
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="update.php" name="myform" id ="template">
                        <input type="hidden" name="billid" id="billid" value="<?php echo $bid; ?>"/>
                        <div class="form-group">
                            <label for="bill_number" class="cols-sm-2 control-label">Bill Number:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-indent fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="bill_no" id="bill_no"  placeholder="Enter the bill number here" value="<?php echo $billno; ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="cols-sm-2 control-label">Description:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-align-justify fa" aria-hidden="true"></i></span>
                                    <textarea name="description" class="form-control" name="description" id="description"  placeholder="Describe about the bill"><?php echo $desc; ?> </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Budget Head:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-caret-square-o-down fa" aria-hidden="true"></i></span>
                                    <SELECT class="form-control" name="budget_head" id = "budget_head" value="<?php echo $budgethead; ?>">
                                        <option value="OE">Office Expense</option>
                                        <option value="SAL">Salaries</option>
                                        <option value="TRANS">Transportation</option>
                                    </SELECT>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bill_date" class="cols-sm-2 control-label">Bill Date:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-calendar fa-lg " aria-hidden="true"></i></span>
                                    <p><input type = "date" class="form-control" name = "bill_date" id = "bill_date" placeholder = "Enter the bill date here" value="<?php echo $billdate; ?>"> </p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bill_amount" class="cols-sm-2 control-label">Bill Amount:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-inr fa-lg" aria-hidden="true"></i></span>
                                    <input type="bill_amount" class="form-control" name="bill_amount" id="bill_amount"  placeholder="Enter the bill amount" value="<?php echo $amount; ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="cols-sm-2 control-label">Status:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-align-justify fa-lg" aria-hidden="true"></i></span>
                                    <textarea name="status" class="form-control" name="status" id="status"  placeholder="Write the status of your bill"> <?php echo $stat; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remarks" class="cols-sm-2 control-label">Remarks:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon iconbk"><i class="fa fa-align-center fa-lg" aria-hidden="true"></i></span>
                                    <textarea name="remarks" class="form-control" name="remarks" id="remarks"  placeholder="Write your valueable remarks"> <?php echo $rem; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="button" class="btn btn-success btn-lg btn-block login-button" onclick="validateform()">Update & Proceed</button>
                        </div>              
                    </form>
                </div>
            </div>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </form>
</body>

<script>
function validateform(){
    //alert('Inside');
    //var returnval= true;
    var bill_no = document.getElementById("bill_no").value;
    if (bill_no.length<5){
        
        alert("Length of bill number is too short");
        document.getElementById("bill_no").focus();
        return false;
    }

    //var returnval= true;
    var description = document.getElementById("description").value;
    //alert(description.trim().length);
    if (description.trim().length == 0){
        
        alert("Description can't be blank");
        document.getElementById("description").focus();
        return false;
    }

    //var returnval= true;
    var bill_date = document.getElementById("bill_date").value;
    if (bill_date.length == 0){
        
        alert("Bill Date can't be blank");
        document.getElementById("bill_date").focus();
        return false;
    }

    //var returnval= false;
    var bill_amount = document.getElementById("bill_amount").value;
    if (bill_amount.trim().length == 0){
        alert("Bill Amount can not be blank");
        document.getElementById("bill_amount").focus();
        return false;

    } else if(isNaN(bill_amount)){
        
        alert("Bill Amount should be numeric");
        document.getElementById("bill_amount").focus();
        return false;
    }


    //return returnval;
    document.getElementById("template").submit();
}
</script>
</html>