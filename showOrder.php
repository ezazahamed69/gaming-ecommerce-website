<?php
include 'config.php';
session_start();
$statement="select * from orders";
$result=mysqli_query($conn, $statement);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./assets/css/showOrderStyle.css">
    <link rel="stylesheet" href="./assets/css/navStyle.css">
    <link rel="stylesheet" href="adminSideNav.css">

    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>

<nav class="navbar">
      <h1 class="navbar-title"><a href="index.php"><i class="bx bxs-dashboard"></i></a> Dashboard</h1>
      </div>
      <div class="user-profile">
        <img src="assets/images/userP.jpg" alt="User Profile" />
        <i class="bx bxs-bell-ring"></i>
      </div>
    </nav>
    <div class="sidebar">
      <ul class="sidebar-menu">
        <li>
          <a href="addproduct.php"><i class="bx bxs-book-add"></i>Add Products</a>
        </li>
        <li> 
          <a href="showOrder.php"><i class="bx bx-edit-alt"></i>Invoice</a>
        </li>
        <li>
        <a href="calender.html"><i class="bx bxs-calendar"></i>Calendar</a>
        </li>
       
        <li>
          <a href="settings.php"><i class="bx bxs-cog"></i>Settings</a>
        </li>
        <li>
        <a href="login.php"><i class="bx bx-log-out-circle"></i>Logout</a>
        </li>
      </ul>
    </div>
    <h3 class="text-center py-5"><b>Recent Orders</b></h3>

<?php


echo "<table>";
echo "<tr>
    <th>Name</th>
    <th>Number</th>
    <th>Email</th>
    <th>Method</th>
    <th>Address</th>
    <th>Total Price</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['number'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['method'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['total_price'] . "</td>";
    // echo "<td>" . $row['qty'] . "</td>";
    echo "</tr>";
}
echo "</table>";


mysqli_close($conn);
  
 ?>


</body>
</html>