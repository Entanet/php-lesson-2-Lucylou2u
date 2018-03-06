<html>
<head>
    <title>Lesson 1</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<?php
    $name = "Mike";
    $age = 33;
    $gender = "Male";
    $postcode = "TF32NS";
    $move = "Stone Cold Stunner"; 

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
        </tbody>
    </table>

</body>



</html>










