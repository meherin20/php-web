<?php

function pizzaParty($students, $slicesPerStudent, $slicesPerPizza)
{
    $pizzaPrice = 1050;

    // total slices needed
    $totalSlicesNeeded = $students * $slicesPerStudent;

    // total pizzas needed (must order whole pizzas)
    $totalPizzas = ceil($totalSlicesNeeded / $slicesPerPizza);

    // total slices available
    $totalSlicesAvailable = $totalPizzas * $slicesPerPizza;

    // leftover slices
    $leftoverSlices = $totalSlicesAvailable - $totalSlicesNeeded;

    // wasted money based on leftover slices
    $wastedMoney = ($leftoverSlices / $slicesPerPizza) * $pizzaPrice;

    echo "<h2>Pizza Party Output</h2>";

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Total Pizzas</th>
            <th>Leftover Slices</th>
            <th>Wasted Money (BDT)</th>
          </tr>";

    echo "<tr>
            <td>$totalPizzas</td>
            <td>$leftoverSlices</td>
            <td>$wastedMoney</td>
          </tr>";

    echo "</table>";

    echo "<br><a href='indexPizza.html'>Go Back</a>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $students = (int) $_POST["students"];
    $slicesPerStudent = (int) $_POST["slicesPerStudent"];
    $slicesPerPizza = (int) $_POST["slicesPerPizza"];

    pizzaParty($students, $slicesPerStudent, $slicesPerPizza);

} else {
    echo "Please submit the form from <a href='indexPizza.html'>indexPizza.html</a>";
}

?>
