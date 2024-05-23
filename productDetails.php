<html>

<head>
</head>

<body>
    <?php
 $conn = mysqli_connect('localhost','root','Root@1234','loginSession');

 $query = mysqli_query($conn,"select * from product_details");

echo "<table border=1>";
echo "<tr>";
echo "<td>Product ID</td>";
echo "<td>Product Name</td>";
echo "<td>Description</td>";
echo "<td>Price</td>";
echo "<td>Category</td>";
echo "</tr>";

while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$row['product_id']."</td>";
    echo "<td>".$row['product_name']."</td>";
    echo "<td>".$row['product_description']."</td>";
    echo "<td>".$row['product_price']."</td>";
    echo "<td>".$row['product_category']."</td>";
    echo "</tr>";
    }
    echo "</table>";

?>
</body>

</html>