
<?php

include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET qty = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="shortcut icon" href="fav.png" type="image/x-icon">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
       
        <?php include './assets/css/page.css'; ?>
        <?php include './assets/css/style.css'; ?>
        <?php include 'css/slick.css'; ?>
        <?php include 'css/slick-theme.css'; ?>
        <?php include './assets/css/navStyle.css'; ?>
        
    </style>

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

   <section class="shopping-cart">

      <h1 class="heading py-3">Your Cart</h1>

      <table>

         <thead>
            <th>SL.</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
         </thead>

         <tbody>
            <?php 
            $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
            $grand_total = 0;
            if(mysqli_num_rows($select_cart) > 0){
               while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            ?>
            <tr>
               <td><div><?php echo $fetch_cart['id'] ?></div></td>
               <td><?php echo $fetch_cart['name']; ?></td>
               <td>$<?php echo number_format($fetch_cart['price']); ?>/-</td>
               <td>
                  <form action="" method="post">
                     <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                     <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['qty']; ?>" >
                     <input type="submit" value="update" name="update_update_btn">
                  </form>   
               </td>
               <td>$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['qty']); ?>/-</td>
               <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Are you sure you want to remove the item from the cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></td>
            </tr>
            <?php
            $grand_total += $sub_total;  
               };
            };
            ?>
            <tr class="table-bottom">
            <td><a href="shop.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
               <td colspan="3">grand total</td>
               <td>$<?php echo $grand_total; ?>/-</td>
               <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
            </tr>
         </tbody>

      </table>

      <div class="checkout-btn">
         <a href="checkout.php" class="button-div <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
      </div>

   </section>

</div>
   
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>