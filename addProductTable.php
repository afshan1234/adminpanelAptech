<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', 'Root@1234', 'logInSession');
    $query = mysqli_query($conn, 'select * from AddProduct');

    echo '<table border=1>';
    echo '<tr>';
    echo '<td>productName</td>';
    echo '<td>productDescription</td>';
    echo '<td>productPrice</td>';
    echo '</tr>';

    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>" . $row['productName'] . "</td>";
        echo "<td>" . $row['productDescription'] . "</td>";
        echo "<td>" . $row['productPrice'] . "</td>";
        echo "</tr>";
    }
    echo '</table>';
    ?>
</body>

</html>