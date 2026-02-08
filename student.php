<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uiuweb_final";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/* Task 2 */
$conn->query("
  UPDATE student_final
  SET LetterGrade = 'C'
  WHERE Grade < 75 AND LetterGrade <> 'D'
");

/* Task 3 */
$conn->query("
  UPDATE student_final
  SET Grade = Grade + 5
  WHERE Grade > 80 AND (Grade + 5) <= 90
");

/* Task 1 */
echo "<h2>1) Total number of students per Letter Grade</h2>";

$sql1 = "
  SELECT LetterGrade, COUNT(*) AS TotalStudents
  FROM student_final
  GROUP BY LetterGrade
  ORDER BY LetterGrade
";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  echo "<table border='1' cellpadding='10' cellspacing='0'>";
  echo "<tr><th>Letter Grade</th><th>Total Students</th></tr>";

  while ($row = $result1->fetch_assoc()) {
    echo "<tr>
            <td>{$row['LetterGrade']}</td>
            <td>{$row['TotalStudents']}</td>
          </tr>";
  }

  echo "</table>";
} else {
  echo "0 results";
}

/* Task 4 */
echo "<h2>4) Students per Course (Most Popular First)</h2>";

$sql4 = "
  SELECT CourseTitle, COUNT(*) AS TotalEnrolled
  FROM student_final
  GROUP BY CourseTitle
  ORDER BY TotalEnrolled DESC
";

$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  echo "<table border='1' cellpadding='10' cellspacing='0'>";
  echo "<tr><th>Course Title</th><th>Total Students</th></tr>";

  while ($row = $result4->fetch_assoc()) {
    echo "<tr>
            <td>{$row['CourseTitle']}</td>
            <td>{$row['TotalEnrolled']}</td>
          </tr>";
  }

  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
