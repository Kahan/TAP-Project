<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 80%;
            margin: 5%
        }
        th,td{
            border: 1px solid;
            text-align: left;
            padding: 15px;
            height: 50px
        }
    </style>
</head>
<body>
<?php

$conn = new mysqli('localhost', 'root', '', 'tap');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$grade = mysqli_real_escape_string($conn, $_REQUEST['grade']);
$club = mysqli_real_escape_string($conn, $_REQUEST['club']);
    // echo '<script>
    // function showCustomer('$city', '$grade', '$club') {
    //     var xhttp;
    //     if (str == "") {
    //         document.getElementById("txtHint").innerHTML = "";
    //         return;
    //     }
    //     xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function () {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("txtHint").innerHTML = this.responseText;
    //         }
    //     };
    //     xhttp.open("GET", "getapplicant.php?q=" + str, true);
    //     xhttp.send();
    // }
    // <script>';

    $sql = "SELECT Sr, name, email, phone, city, club, school, grade FROM applicants WHERE city = ? and grade = ? and club = ? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $city, $grade, $club);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($sr, $name, $email, $phone, $city, $club, $school, $grade);
$stmt->fetch();
$stmt->close();
setcookie('sr', $sr);
echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Phone</th>";
echo "<th>City</th>";
echo "<th>Club</th>";
echo "<th>School</th>";
// echo "<th>Interest</th>";
// echo "<th>Why</th>";
echo "<th>Grade</th>";
echo "<th>Selected</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $name . "</td>";
echo "<td>" . $email . "</td>";
echo "<td>" . $phone . "</td>";
echo "<td>" . $city . "</td>";
echo "<td>" . $club . "</td>";
echo "<td>" . $school . "</td>";
echo "<td>" . $grade . "</td>";
echo '<td><form action="select.php" method="post">
        <select name="select">
        <option>Yes</option>
        <option>No</option>
        </select>
        <button type="submit" class="btn btn-primary">+</button>
      </form></td>';
echo "</tr>";
echo "</table>";

?>
</body>
</html>