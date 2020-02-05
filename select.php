<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$link = mysqli_connect("localhost", "root", "", "tap");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$select = mysqli_real_escape_string($link, $_REQUEST['select']);
$sr = $_COOKIE['sr'];
$sql = "UPDATE applicants SET selected = '$select' WHERE sr = '$sr' ";

if (mysqli_query($link, $sql) === TRUE) {
    echo "<script type='text/javascript'>
            window.location = 'load_selected_applicants.php';
        </script>";
} else {
    echo "Error updating record: " . mysqli_error($link);
}
mysqli_close($link);
?>

</body>
</html>