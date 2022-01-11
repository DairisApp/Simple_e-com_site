<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Src/View/Styles/style-add.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="Scripts/TableSelect.js"></script>
    <script defer src="Scripts/Validate.js"></script>
    <title>Store</title>
</head>

<body>
    <header class="mx-5">
        <div class="d-flex align-items-end bd-highlight mb-1 mt-5">

            <div class="me-auto m-1  bd-highlight">
                <h2>Product Add</h2>
            </div>

            <div class="p-1 bd-highlight">

                <button type="submit" class="custom-btn " form="product_form" id="save" name="save">Save</button>

                <a type="button" class="custom-btn mx-5" href="index.php">Cancel</a>

            </div>
        </div>
        <hr>
    </header>


    <form class="container mx-3" id="product_form" action="Src/Controller/ControllerTable.php" method="post">

        <div class="form-group mx-sm-3 mb-4">
            <label class="col-sm-1 col-form-label" for="sku">SKU:</label>
            <!--
         --><input id="sku" name="sku"></input>
            <!--
        --><small class="d-none" id="sku-value">SKU cannot be blank</small>
            <!--
         --><small class="d-none" id="sku-data">SKU must be numeric</small>
        </div>

        <div class="form-group mx-sm-3 mb-4">
            <label class="col-sm-1 col-form-label" for="name">Name:</label>
            <!--
         --><input name="name" id="name"></input>
            <!--
         --><small class="d-none" id="name-value">Name cannot be blank</small>
            <!--
         --><small class="d-none" id="name-data">Name must be text</small>
        </div>

        <div class="form-group mx-sm-3 mb-4">
            <label class="col-sm-1 col-form-label" for="price">Price($):</label>
            <!--
         --><input type="text" name="price" id="price"></input>
            <!--
       --><small class="d-none" id="price-value">Price cannot be blank</small>
            <!--
         --><small class="d-none" id="price-data">Price must be numeric</small>
        </div>

        <div class="form-group mx-sm-3 mb-4">
            <label class="col-sm-1 col-form-label" for="productType">Product Type</label>
            <!--

         --><select name="productType" id="productType" autocomplete="off" onchange="TypeSelect();">
                <option selected="selected" id="DVD" value="DVD">DVD</option>
                <option id="Furniture" value="Furniture">Furniture</option>
                <option id="Book" value="Book">Book</option>
            </select>
        </div>

        <div id="typeDiv">
            <div class="form-group mx-sm-3 mb-4">
                <label class="col-md-1 col-form-label" for="DVD">Size (MB):</label>
                <!--
             --><input name="size" id="size"></input>
                <!--
             --><small class="d-none" id="size-value">Size cannot be blank</small>
                <!--
         --><small class="d-none" id="size-data">Size must be numeric</small>
            </div>
            <small class="text-info mx-3">Please Provide The Size of the DVD!</small>

        </div>
    </form>

    <footer class="fixed-bottom mx-5">
        <hr>
        <p class="text-center p-3">Scandiweb Test Assignment</p>
    </footer>
</body>

</html>