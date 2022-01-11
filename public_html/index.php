<?php

require_once realpath("vendor/autoload.php");

use Foo\View\TableView;
use Foo\Controller\ControllerTable;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Src/View/Styles/style.css">
    <title>Store</title>
</head>

<body>
    <header class="mx-5">
        <div class="d-flex align-items-end bd-highlight mb-1 mt-5">

            <div class="me-auto m-1 ms-3  bd-highlight">
                <h2>Product List</h2>
            </div>

            <div class="p-1 bd-highlight">

                <a type="button" class="custom-btn " href="add-product.php">ADD</a>

                <button type="submit" class="custom-btn mx-5" form="view" id="delete-product-btn" name="delete">MASS DELETE</button>

            </div>
        </div>
        <hr>
    </header>

    <form class="d-flex flex-wrap text-center mx-5" id="view" method="post" action="Src/Controller/ControllerTable.php">

        <?php
        $view = new TableView();
        $view->hello();
        ?>

    </form>
    <footer class="bottom mx-5">
        <hr>
        <p class="text-center p-3">Scandiweb Test Assignment</p>
    </footer>
</body>

</html>