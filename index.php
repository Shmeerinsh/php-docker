<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
<?php

    include 'includes/newclass.inc.php';

    echo"Šome text";
    echo "<br>";

    $person = new Person();
    $person->setName("Rauls");
    echo $person->getName();
    echo $person


    //Employee Access

    $Employee = new Employee();
    $Employee->setAccess("Pass");
    echo $Employee->getAccess();
    echo $Employee


$connect = mysqli_connect(
    'db',
    'lamp_demo',
    'password',
    'lamp_demo'
);

$query = 'SELECT *
    FROM blog';
$result = mysqli_query($connect, $query);

echo '<h1>MySQL Content:</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p>'.$record['content'].'</p>';
    echo 'Posted: '.$record['date'];
    echo '<hr>';
}

?>
</body>
</html>