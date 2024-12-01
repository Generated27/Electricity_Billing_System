<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            header('index.php');    
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-bill System</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><b>E-Billing System</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <?php include("login.php"); ?>
            </div>
        </div>
    </div>

    <div id="headerwrap" class="bgimage">
    <div class="darkhearderwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 signup">
                </div>
                <div class="col-lg-6">
                    <h1>Sign Up</h1>
                    <?php include("signup.php"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>How this Portal works</h1>
            <h3></h3>
        </div>
    </div>
    <div class="row mt centered">
        <div class="col-lg-4">
            <img src="assets/img/ser01.png" width="180" alt="">
            <h4>1 - Login</h4>
            <p></p>
        </div>
        <div class="col-lg-4">
            <img src="assets/img/ser02.png" width="180" alt="">
            <h4>2 - Peruse Bills</h4>
            <p></p>
        </div>
        <div class="col-lg-4">
            <img src="assets/img/ser03.png" width="180" alt="">
            <h4>3 - Transact</h4>
            <p></p>
        </div>
    </div>
</div>
        </div>
    </div>
</body>
</html>

    <?php 
    require_once("footer.php");
    ?>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
    function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }  </script> 

    
</body>

</html>
