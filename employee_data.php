<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uiutech_final";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->query("
    UPDATE employee_final
    SET `Performance Rating` = 'C'
    WHERE Salary < 40000 AND `Performance Rating` <> 'D'
");


$conn->query("
    UPDATE employee_final
    SET Salary = Salary + 5000
    WHERE Salary > 50000 AND Salary <= 55000
");

/* 1) Total employees per rating */
echo "<h2>1) Total Employees per Performance Rating</h2>";

$sql1 = "
    SELECT `Performance Rating` AS Rating, COUNT(*) AS Total
    FROM employee_final
    GROUP BY `Performance Rating`
    ORDER BY `Performance Rating`
";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Rating</th><th>Total Employees</th></tr>";

    while ($row = $result1->fetch_assoc()) {
        echo "<tr><td>$row[Rating]</td><td>$row[Total]</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}


/* 4) Department wise employee count */
echo "<h2>4) Employees per Department (Largest First)</h2>";

$sql4 = "
    SELECT `Department Name` AS DeptName, COUNT(*) AS TotalEmployees
    FROM employee_final
    GROUP BY `Department Name`
    ORDER BY TotalEmployees DESC
";

$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Department Name</th><th>Total Employees</th></tr>";

    while ($row = $result4->fetch_assoc()) {
        echo "<tr><td>$row[DeptName]</td><td>$row[TotalEmployees]</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
