<?php   require_once "inc/header.php";
        require_once "functions.php"; ?>
    
    <div class="container-fluid py-3">

    <h6 class="bg-dark text-white mt-3 p-2"> 3- write a script add-product.php containing a form to add new product </h6>

        <?php 

            if (isset($_POST["submit"])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
            }

            // validate
            $errors = [];
            
            if (empty($name)) {
                $errors[] = "Name is required ";
            } else if (! is_string($name) || is_numeric($name)) {
                $errors[] = "Name must be string ";
            } else if (strlen($name) < 5 || strlen($name) > 255) {
                $errors[] = "Name Lenght must be 5 : 255 char ";
            } 

            if (empty($price)) {
                $errors[] = "Price is required ";
            } else if ( ! is_numeric($price)) {
                $errors[] = "Price must be Number ";
            } else if ($price < 0) {
                $errors[] = "Price must be >= 0 ";
            }

            if (! is_string($description) || is_numeric($description)) {
                $errors[] = "description must be string ";
            }

            if (empty($errors)) {
                $newPrice = getPriceWithDiscount($price);
                echo "
                    name = $name
                    <br>
                    and the Old Price = $price
                    <br>
                    and the price after discount = $newPrice
                    <br>
                    and the description = $description";
            } else {
                print_r($errors);
            }



        ?>


    </div>

<?php require_once "inc/footer.php" ?>