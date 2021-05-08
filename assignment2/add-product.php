<?php require_once "inc/header.php"; ?>
    
    <div class="container-fluid py-3">


        <h6 class="bg-dark text-white mt-3 p-2"> 3- write a script add-product.php containing a form to add new product </h6>

        <form action="handle-add-product.php" method="post">
            <input type="text" name="name" id="" class="form-control mb-3" placeholder="Product Name">
            <input type="number" name="price" id="" class="form-control mb-3" placeholder="Product Price">
            <textarea name="description" id="" class="form-control mb-3" placeholder="Product Description"></textarea>
            <input type="submit" value="submit" class="btn btn-info" name="submit">
        </form>


    </div>

<?php require_once "inc/footer.php" ?>