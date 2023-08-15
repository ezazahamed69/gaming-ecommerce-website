<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    <link rel="shortcut icon" href="./fav.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/registration.css">
</head>
<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form action = "registration.php" class="contact100-form validate-form" method="post">
                <span class="contact100-form-title">
                    Register Yourself !!!
                </span>

                <div class="wrap-input100 validate-input" data-validate="Please enter name">
                    <input class="input100" type="text" name="name" placeholder="Name" required>
                    <span class="focus-input100"></span>
                </div>

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
                        <input class="contact100-form-btn form-control submit" type="submit" value="Register">
                    </div>
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn form-control" onclick="goToLogin()">Back to Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
    <script>
        function goToLogin() {
            window.location.href = 'login.php'; 
        }
    </script>
</body>
</html>
