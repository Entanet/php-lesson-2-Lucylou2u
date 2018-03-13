<html>
<head>
    <title>Lesson 1</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<?php
    $name = "Lucy Lou";
    $age = 150;
    $gender = "female";
    $postcode = "SC0 0TER";
    $move = "Crash";  

    if($age > 60){
        $description = "Master";
    }elseif($age > 20){
        $description = "Padwan";
    }else{
        $description = "Youngling";
    }

?>

<body>

    <h1>Profile #1</h1>

    <table class="u-full-width">
        <tbody>
        <tr>
            <th>Name</th>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?= $age ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <th>Postcode</th>
            <td><?= $postcode ?></td>
        </tr>
        <tr>
            <th>Special Move</th>
            <td><?= $move ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?= $description ?></td>
        </tr>
        </tbody>
    </table>

</body>



</html>










