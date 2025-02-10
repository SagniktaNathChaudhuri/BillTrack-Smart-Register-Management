<style>


body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
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

<div class="navbar">
  <a class="active" href="template.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="display_data.php"><i class="fa fa-align-justify"></i> View Register</a> 
  <a href="report.php"><i class="fa fa-calendar-check-o"></i> Report</a> 
  <a href="logout_page.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>