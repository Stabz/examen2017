


<?php

/**
 * Created by PhpStorm.
 * User: Dmitro
 * Date: 14-12-2017
 * Time: 09:10
 */

if (!isset($_COOKIE['logged']))
    header("Location: Login.php");  //It redirects the user to your login page

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">


</head>

<body>
<?php


include ('Config.php');





?>

<h1> Order table </h1>
<table id="customTable">
    <thead>
    <tr>
        <th> -Navn- </th>
        <th> -Beskrivelse- </th>
        <th> -Pris- </th>
        <th> -Nøgle ord- </th>
        <th> -Billede- </th>
        <th> -Pakke Beskrivelse-</th>
    </tr>
    </thead>


    <?php


    // Choose content to acquire from specific table
    $sql = "SELECT tours.tourName, tours.description, tours.price, tours.keywords, tours.graphic, packages.packageDescription FROM (tours INNER JOIN packages on tours.packageId = packages.packageId)";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>". $row[tourName]."</td>". "<td>". $row[description]."</td>"."<td>". $row[price]."$ </td>"."<td>". $row[keywords]. "</td>"."<td>"." <img src='http://localhost:8888/exam2017/billeder/".$row[graphic]."' alt='billede'> </img></td>"."<td>". $row[packageDescription]. "</td></tr>";

        }


    } else {
        echo "0 results";
    }
    ?>

</table>


</body>
</html>

