<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<?php
  // include "Navbar.php";
?>

<?php

      if(isset($_GET['status'])){
        if($_GET['status'] == 0){
            echo "Login failed";
        } 
        //else {
        //     echo "Failed to save bill details";
        // }
      }
    ?>


<div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                           <h1 class="title">𝐋𝐨𝐠𝐢𝐧 𝐏𝐚𝐠𝐞</h1>
                           <hr />
                       </div>
                </div>
                <form action = "authenticator.php" method = "POST">

<div class="form-group">  
  <label for="username" class="cols-sm-2 control-label">Username:</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon iconbk"><i class="fa fa-fw fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your username here" value=""/>
          </div>
    </div>
</div>

<div class="form-group">  
  <label for="password" class="cols-sm-2 control-label">Password:</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon iconbk"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="password" id="password"  placeholder="Enter the password here" value=""/>
          </div>
    </div>
</div>

<!-- <div class="form-group">  
  <label for="employee_name" class="cols-sm-2 control-label">Employee name:</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon iconbk"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="employee_name" id="employee_name"  placeholder="Enter your name here" value=""/>
          </div>
    </div>
</div> -->

<div class="form-group ">
        <button type="submit" class="btn btn-success btn-lg btn-block login-button">Login</button>
    </div>

</form>
    </body>
    </html>