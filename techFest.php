<?php
function techFestBudget($attendees, $costPerPerson, $venueCapacity)
{
    $totalVenues = (int)ceil($attendees / $venueCapacity);

     $totalSeats = $totalVenues * $venueCapacity;

    $emptySeats = $totalSeats - $attendees;

    $wastedMoney = $emptySeats * $costPerPerson;

    echo "<h2>tech Fest Output</h2>";

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Total Venues</th>
            <th>Empty Seats</th>
            <th>Wasted Money(BDT)</th>
          </tr>";

    echo "<tr>
            <td>$totalVenues</td>
            <td>$emptySeats</td>
            <td>" . number_format($wastedMoney) . "</td>
          </tr>";

    echo "</table>";
    echo "<br><a href='index.html'>Go Back</a>";

}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $attendees = (int)$_POST["attendees"];
    $costPerPerson= (int)$_POST["costPerPerson"];
    $venueCapacity= (int)$_POST["venueCapacity"];

techFestBudget($attendees, $costPerPerson, $venueCapacity);
} else {
    echo "Please submit the form from <a href='index2.html'>index.html</a>.";
}
?>
