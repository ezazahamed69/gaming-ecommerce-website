<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="shortcut icon" href="./fav.png" type="image/x-icon">
    <title>Add A Product</title>
    <link rel="stylesheet" href="./assets/css/addproduct.css">
    <link rel="stylesheet" href="./assets/css/navStyle.css">

  </head>
  <body>
  <?php
    include 'adminnavbar.php';
?>
    <div class="container-fluid py-3">

    <header class="text-left">
        
    <h2 class="display-6">Add A Product</h2>
        
    </header>
    </div>
    <section class="container glass my-2 w-50 text-light p-2">
        <div class="text-center">
        <form action="addProduct.php" method="post">
            <fieldset>
                <label>Product Name</label>
                <input type="text" id="product-name" name="product_name" required>
            </fieldset>
            <fieldset>
                <label>Product Price</label>
                <input type="number" id="product-price" name="product_price" min="0" step="0.01" required>
                </fieldset>
            <fieldset>
                <label>Product Category</label>
                <select id="product-category" name="product_category">
                    <option value="games">Games</option>
                    <option value="electronics">Gaming Accessories</option>
                    <option value="jersey">Jersey</option>
            
                </select>
            </fieldset>
            <fieldset>
                <label>Product Description</label>
                <textarea id="product-description" class="form-control" name="product_description" rows="8" required></textarea>  
            </fieldset>
            <fieldset>
            <label>Product Image</label><br>
                <input type="file" id="img" name="img" accept="image/*">
                </fieldset>  
            <input class="button" id="submit" type="submit" value="Add Product">
            </form>
        </div>
        
    </section>
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
