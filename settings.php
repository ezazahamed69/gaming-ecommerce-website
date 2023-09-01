<?php 
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
          $name=$_POST['name'];
          $surname= $_POST['surname'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $addressLine=$_POST['addressLine'];
          $postcode=$_POST['postcode'];
          $AddressState=$_POST['AddressState'];
          $area=$_POST['area'];
          $region=$_POST['region'];
          $country=$_POST['country'];
         
          $sql= "INSERT INTO `admininfo`(`name`, `surname`, `mobile`, `addressLine`, `postcode`, `AddressState`, `area`, `email`, `country`, `region`) 
          VALUES ('$name','$surname','$mobile','$addressLine','$postcode','$AddressState','$area','$email','$country','$region')";          
          $conn->query($sql);     
       
        $conn->close();

      } 

?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="settings.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
        <title>Document</title>
</head>

<body>
        <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                        <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                                class="rounded-circle mt-5" width="150px"
                                               img src="assets/images/userP.jpg"><span
                                                class="font-weight-bold">Sarah</span><span
                                                class="text-black-50">sarah@mail.com.my</span><span> </span></div>
                        </div>
                        <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Profile Settings</h4>
                                        </div>
                                        <form method="POST">
                                                <div class="row mt-2">

                                                        <div class="col-md-6"><label class="labels">Name</label><input
                                                                        type="text" class="form-control"
                                                                        placeholder="first name" name="name" value="">
                                                        </div>
                                                        <div class="col-md-6"><label
                                                                        class="labels">Surname</label><input type="text"
                                                                        class="form-control" value="" name="surname"
                                                                        placeholder="surname"></div>
                                                </div>
                                                <div class="row mt-3">
                                                        <div class="col-md-12"><label class="labels">Mobile
                                                                        Number</label><input name="mobile" type="text"
                                                                        class="form-control"
                                                                        placeholder="enter phone number" value=""></div>
                                                        <div class="col-md-12"><label class="labels">Address Line
                                                                        1</label><input name="addressLine" type="text"
                                                                        class="form-control"
                                                                        placeholder="enter address line 1" value="">
                                                        </div>
                                                        <div class="col-md-12"><label
                                                                        class="labels">Postcode</label><input
                                                                        name="postcode" type="text" class="form-control"
                                                                        placeholder="enter address line 2" value="">
                                                        </div>
                                                        <div class="col-md-12"><label class="labels">State</label><input
                                                                        type="text" class="form-control"
                                                                        placeholder="enter address line 2" value=""
                                                                        name="AddressState">
                                                        </div>
                                                        <div class="col-md-12"><label class="labels">Area</label><input
                                                                        type="text" class="form-control"
                                                                        placeholder="enter address line 2" name="area"
                                                                        value="">
                                                        </div>
                                                        <div class="col-md-12"><label class="labels">Email
                                                                        ID</label><input type="text"
                                                                        class="form-control"
                                                                        placeholder="enter email id" name="email"
                                                                        value="">
                                                        </div>
                                                </div>
                                                <div class="row mt-3">
                                                        <div class="col-md-6"><label
                                                                        class="labels">Country</label><input type="text"
                                                                        name="country" class="form-control"
                                                                        placeholder="country" value=""></div>
                                                        <div class="col-md-6"><label
                                                                        class="labels">Region</label><input
                                                                        type="text" class="form-control" name="region"
                                                                        value="" placeholder="region"></div>
                                                </div>
                                                <div class="row mt-3">
                                                <div class="col-md-6"><a class="btn btn-primary" href="index.php" role="button">Back</a></div>

                                                <div class="col-md-6"><button
                                                                class="btn btn-primary profile-button"
                                                                type="submit">Save
                                                                Profile</button></div>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>