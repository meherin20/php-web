<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sundarban";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("UPDATE sales_data SET CategoryName='Low Performing' WHERE Revenue < 40000");

$conn->query("UPDATE sales_data SET Revenue = Revenue * 1.10 WHERE Revenue > 70000");

echo "<h2>1) Total Revenue Per Category</h2>";

$result1 = $conn->query("SELECT CategoryName, SUM(Revenue) AS TotalRevenue
                         FROM sales_data
                         GROUP BY CategoryName");

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
<th>Category Name</th>
<th>Total Revenue</th>
</tr>";
while($row = $result1->fetch_assoc()){
    echo "<tr>
    <td>{$row['CategoryName']}</td>
    <td>{$row['TotalRevenue']}</td>
    </tr>";
}
echo "</table>";


echo "<h2>4) Product Seller Label</h2>";
$sql4 = "SELECT s.ProductName, s.CategoryName, s.Revenue,
        CASE 
            WHEN s.Revenue > (
                SELECT AVG(Revenue)
                FROM sales_data
                WHERE CategoryName = s.CategoryName
            )
            THEN 'Top Seller'
            ELSE 'Regular Seller'
        END AS SellerLabel
        FROM sales_data s";

$result4 = $conn->query($sql4);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
<th>Product</th>
<th>Category</th>
<th>Revenue</th>
<th>Label</th>
</tr>";
while($row = $result4->fetch_assoc()){
    echo "<tr>
            <td>{$row['ProductName']}</td>
            <td>{$row['CategoryName']}</td>
            <td>{$row['Revenue']}</td>
            <td>{$row['SellerLabel']}</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>
