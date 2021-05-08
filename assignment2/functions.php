<?php require_once "inc/header.php"; ?>

<div class="container-fluid py-3">

    <!-- Start Function Number 1 -->
    <h6 class="bg-dark text-white mt-3 p-2"> 1 - write a function getNumMatches that searches for a word in an array of words and returns the number of matches (repetitions). </h6>

    <?php
        $words = ['mohamed', 'kareem', 'mohamed', 'ahmed', 'mohamed', 'kareem', 'hassan', 'hassan'];

        function getNumMatches($array, $word)
        {
            $count = 0;
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] == $word) {
                    $count++;
                }
            }
            return $count;
        }
        $countWord = getNumMatches($words, "mohamed");
        echo "tha count = $countWord";
    ?>
    <!-- End Function Number 1 -->

    <!-- Start Function Number 2 -->
    <h6 class="bg-dark text-white mt-3 p-2"> 2- write a function getPriceWithDiscount that takes the price and returns the price after discount.
discount is 10% for prices less than 1000
and 5% for prices greater than or equal 1000 </h6>

    <?php

        function getPriceWithDiscount($price)
        {
            if ($price < 1000) {
                $discount = $price * 0.10;
                $newPrice = $price - $discount;
            } else if ($price >= 1000) {
                $discount = $price * 0.05;
                $newPrice = $price - $discount;
            }
            return $newPrice;
        }
        $newPrice = getPriceWithDiscount(2000);
        echo "the new price = $newPrice";
    ?>

    <!-- End Function Number 2 -->

</div>


<?php require_once "inc/footer.php" ?>