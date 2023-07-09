<?php
include '../oop/includes/newclass.inc.php';
include '../oop/includes/person.inc.php';
?>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" ;>
    <title></title>
</head>

<body>
    <?php
    echo Person::$drinkingAge;
    Person::setDrinkingAge(18);
    echo Person::$drinkingAge;

    ?>
</body>

</html>