<?php 
include 'config.php'; 
?>
<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="admin.css" />
    
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Admin Dashboard</title>
  </head>
  <body>
    <nav class="navbar">
      <h1 class="navbar-title"><i class="bx bxs-dashboard"></i> Dashboard</h1>
      <div class="search-bar">
        <input type="text" placeholder="Search..." />
        <button>Search</button>
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
    <div class="content">
      <h2 class="sales-table-header">Sales Table</h2>
      <table class="sales-table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2023-09-01</td>
            <td>Product A</td>
            <td>5</td>
            <td>$250</td>
          </tr>
          <tr>
            <td>2023-10-01</td>
            <td>Product B</td>
            <td>5</td>
            <td>$250</td>
          </tr>
          <tr>
            <td>2023-11-01</td>
            <td>Product C</td>
            <td>5</td>
            <td>$250</td>
          </tr>
          <tr>
            <td>2023-10-01</td>
            <td>Product D</td>
            <td>5</td>
            <td>$250</td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </body>
</html>
