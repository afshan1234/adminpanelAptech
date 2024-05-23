<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add Product</h1>
    <form method="post" action="addProductCode.php" enctype="multipart/form-data">
        <label for="addProd">Product Name:</label>
        <input type="text" name="addProd"> <br />

        <label for="addDesc">Product Description:</label>
        <textarea name="addDesc"></textarea><br />

        <label for="prodPrice">Product Price:</label>
        <input type="text" name="prodPrice"> <br />

        <!-- <label for="prodImg">Product Image:</label>
        <input type="file" name="prodImg"> <br /> -->

        <input type="submit" Value="Add Product">
    </form>

</body>

</html>