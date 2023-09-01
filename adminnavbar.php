<nav>
        <ul>
        <li><a href="showOrder.php">Pending Orders</a></li>
        <li><a href="addProduct.php">Add Product</a></li>
        <li>
            <form method="post">
                <input type="submit" name="logout" value="Log out">
            </form>
        </li>
        </ul>
      </nav>

<?php
    if(isset($_POST['logout']))
    {        
         header("location: ./login.php");
        }
        ?>
</html>