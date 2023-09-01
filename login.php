<?php
include 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css">
    <link rel="shortcut icon" href="./fav.png" type="image/x-icon">
    <title>User Login</title>
</head>

<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="post">
                <span class="contact100-form-title">
                    User Login Dashboard
                </span>

                <div class="wrap-input100 validate-input" data-validate="Please enter email">
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter password">
                    <input class="input100" type="text" name="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="btn-div">
                    <div class="container-contact100-form-btn">
                        <input class="contact100-form-btn" type="submit" name="login" value="login">
                    </div>
                    <div class="container-contact100-form-btn">
                        <input class="contact100-form-btn" type="submit" name="adminlogin" value="Admin login">
                    </div>
                </div>
                <div class="container-contact100-form-btn">
                        <input class="contact100-form-btn" type="submit" id="reg" value="Register">
                    </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
        <script>
        // JavaScript code to handle button click
        const regButton = document.getElementById('reg');
        
        regButton.addEventListener('click', function() {
            window.location.href = 'regform.php';
        });
    </script>


    <?php 
if(isset($_POST['login']))
{        
    $query = "SELECT * FROM `users` WHERE `email`='$_POST[email]' AND `password`='$_POST[password]'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['AdminName'] = $_POST['email'];
        header("location: http://localhost/gaming-ecommerce-website/home.php");
    }
    else{
        echo "<script> alert('Invalid Credentials'); </script>";
    }
}   

if(isset($_POST['adminlogin']))
{        
    $query = "SELECT * FROM `admin` WHERE `username`='$_POST[email]' AND `pass`='$_POST[password]'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['AdminName'] = $_POST['name'];
        header("location: ./index.php");
    }
        else{
            
            echo "<script> alert('Invalid Credentials'); </script>";
                 }
}  

?>


</body>

</html>