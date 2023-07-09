<?php


class SecretBox
{
    public $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function check($x)
    {
        if ($x == $this->number) {
            return 'pas';
        } elseif ($x < $this->number) {
            return 'kurang';
        } else {
            return 'lebih';
        }
    }
}

class Person
{
    //Properties
    public $name;
    public $min;
    public $max;

    //Construct
    public function __construct($name)
    {
        $this->name = $name;
    }

    //Methods
    public function guess($min, $max)
    {
        $number = rand($min, $max);
        return $number;
    }

    public function acceptResponse($response, $prevNum)
    {
        $arrayMin = [];
        $arrayMax = [];

        if ($response == "kurang") {
            $arrayMin[] = $prevNum;
            $min = $prevNum;
            $max = max($arrayMax);

            return array($min, $max);
        } elseif ($response == "lebih") {
            $arrayMax[] = $prevNum;
            $min = max($arrayMin);
            $max = $prevNum;

            return array($min, $max);
        } else {
            return $response;
        }
    }
}



?>


<html>

<head>
    <title>Secret Box</title>
</head>

<body>
    <?php
    $secretNumber = rand(1, 100);
    $box = new SecretBox($secretNumber);
    $bayu = new Person('Bayu');

    echo "Secret Number : " . $secretNumber . "<br /><br />";

    $finish = false;
    $i = 1;
    $min = 1;
    $max = 100;
    $end = 5;

    while (!$finish) {
        echo $min . " " . $max;
        $guess = $bayu->guess($min, $max);
        $response = $box->check($guess);
        $bayu->acceptResponse($response, $guess);

        $min = $bayu->acceptResponse($response, $guess)[0];
        $max = $bayu->acceptResponse($response, $guess)[1];

        $finish = ($response === 'pas');

        echo "Tebakan " . ($i++) . ": " . $guess;
        echo "<br />";
        echo "Response : " . $response;
        echo "<br /><br />";
    }

    ?>
</body>

</html>