<?php
function pizzaCalc($students, $slicesPerStudent, $slicesPerPizza)
{
    $pizzaPrice = 1050;

    $neededSlices = $students * $slicesPerStudent;

    $totalPizzas = (int) ceil($neededSlices / $slicesPerPizza);

    $totalSlices = $totalPizzas * $slicesPerPizza;

    $leftoverSlices = $totalSlices - $neededSlices;

    $wastedMoney = ($leftoverSlices / $slicesPerPizza) * $pizzaPrice;

    return [$totalPizzas, $leftoverSlices, $wastedMoney];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $cases = [
        [ (int)$_POST["students1"], (int)$_POST["sps1"], (int)$_POST["spp1"] ],
        [ (int)$_POST["students2"], (int)$_POST["sps2"], (int)$_POST["spp2"] ],
        [ (int)$_POST["students3"], (int)$_POST["sps3"], (int)$_POST["spp3"] ],
    ];

    echo "<!DOCTYPE html><html><head><title>Pizza Party Output</title>
    <style>
      table { border-collapse: collapse; width: 70%; margin: 20px auto; }
      th, td { border: 1px solid #000; padding: 10px; text-align: center; }
      th { background: #eee; }
      h2 { text-align: center; }
      a { display:block; text-align:center; margin-top:20px; }
    </style>
    </head><body>";

    echo "<h2>Pizza Party Output</h2>";

    echo "<table>";
    echo "<tr>
            <th>Total Pizzas</th>
            <th>Leftover Slices</th>
            <th>Wasted Money (BDT)</th>
          </tr>";

    foreach ($cases as $c) {
        [$pizzas, $leftover, $wasted] = pizzaCalc($c[0], $c[1], $c[2]);

        $wastedFormatted = (fmod($wasted, 1.0) == 0.0) ? number_format($wasted, 0) : number_format($wasted, 1);

        echo "<tr>
                <td>$pizzas</td>
                <td>$leftover</td>
                <td>$wastedFormatted</td>
              </tr>";
    }

    echo "</table>";
    echo "<a href='indexPizza.html'>Go Back</a>";

    echo "</body></html>";
} else {
    echo "Please open <a href='indexPizza.html'>indexPizza.html</a> and submit the form.";
}
?>
