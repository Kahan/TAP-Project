<?php
$link = mysqli_connect("localhost", "root", "", "tap");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT Sr, name, city, club, school, interests, why FROM applicants WHERE Sr = ?";

$stmt = $link->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($sr, $name, $city, $club, $school, $interest, $why);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Sr.</th>";
echo "<th>Name</th>";
echo "<th>City</th>";
echo "<th>Club</th>";
echo "<th>School</th>";
echo "<th>Interest</th>";
echo "<th>Why</th>";
echo "<th>Grade</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $sr . "</td>";
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
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
      </form></td>';
echo "</tr>";
echo "</table>";

echo ""
?>