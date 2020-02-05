<?php
$mysqli = new mysqli("localhost", "root", "", "tap");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT name, city, club, school, interests, why FROM applicants WHERE Sr = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $city, $club, $school, $interest, $why);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>City</th>";
echo "<th>Club</th>";
echo "<th>School</th>";
echo "<th>Interest</th>";
echo "<th>Why</th>";
echo "<th>Grade</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $name . "</td>";
echo "<td>" . $city . "</td>";
echo "<td>" . $club . "</td>";
echo "<td>" . $school . "</td>";
echo "<td>" . $interest . "</td>";
echo "<td>" . $why . "</td>";
echo '<td><form action="addgrade.php" method="post">
        <select name="grade">
        <option>A</option>
        <option>B</option>
        <option>C</option>        
        </select>
        <button type="submit" class="btn btn-primary">+</button>
      </form></td>';
echo "</tr>";
echo "</table>";

echo ""
?>