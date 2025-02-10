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
  include "Navbar.php";
?>


    <div class="container">
        <div class="row main">
            <form action = "display_report.php" method = "GET" >

                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h1 class="title">𝐑𝐞𝐩𝐨𝐫𝐭</h1>
                        <hr />
                    </div>
                </div>


                <div class="form-group">
                    <label for="from_bill_date" class="cols-sm-2 control-label" id="01">From Bill Date:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon iconbk"><i class="fa fa-calendar fa-lg "
                                    aria-hidden="true"></i></span>
                            <p><input type="date" class="form-control" name="from_bill_date" id="from_bill_date"> </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="to_bill_date" class="cols-sm-2 control-label" id="02">To Bill Date:</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon iconbk"><i class="fa fa-calendar fa-lg "
                                        aria-hidden="true"></i></span>
                                <p><input type="date" class="form-control" name="to_bill_date" id="to_bill_date"> </p>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-success btn-lg btn-block login-button">Submit</button>
                        </div>

            </form>

        </div>
    </div>

</body>

</html>