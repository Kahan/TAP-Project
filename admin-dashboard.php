<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
    $link = mysqli_connect("localhost", "root", "123", "tap");
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

$sql = "INSERT INTO selected (name, email, phone, city, club, school, Sr)
SELECT name, email, phone, city, club, school, Sr
FROM applicants
WHERE selected = 'yes';";

mysqli_query($link, $sql);

echo '
<div class="container">
        <form action="load_school_applicants.php" method="POST" class="form-check form-check-inline"> 
        <div class="form-group">
            <label for="city">Select School:</label>
            <select id="city" class="form-control" name="school">
                <option>ABMPS</option>
                <option>BNMPS</option>
                <option>LNMPS</option>
                <option>MJPMPS</option>
                <option>MLMPS</option>
                <option>NMMPS</option>
                <option>WBMPS</option>
            </select>
        </div>
        

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Next" id="submit" />
        </div>      
        </form>

        
    </div>';


?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



