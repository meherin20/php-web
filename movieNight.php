<?php
function movieNight($attendees, $seatCapacity, $ticketPrice)
{
    $totalScreens = ceil($attendees / $seatCapacity);

    $totalSeats = $totalScreens * $seatCapacity;

    $emptySeats = $totalSeats - $attendees;

    $wastedMoney = $emptySeats * $ticketPrice;

    echo "<h2>Movie Night Output</h2>";

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Total Screens</th>
            <th>Empty Seats</th>
            <th>Wasted Money</th>
          </tr>";

    echo "<tr>
            <td>$totalScreens</td>
            <td>$emptySeats</td>
            <td>" . number_format($wastedMoney) . "</td>
          </tr>";

    echo "</table>";

    echo "<br><a href='index.html'>Go Back</a>";
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $attendees = (int)$_POST["attendees"];
    $capacity  = (int)$_POST["capacity"];
    $price     = (int)$_POST["price"];

    movieNight($attendees, $capacity, $price);
} else {
    echo "Please submit the form from <a href='index.html'>index.html</a>.";
}
?>
