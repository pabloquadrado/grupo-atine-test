<?php

use App\NumberRenderer;

require '../vendor/autoload.php';

?>

<h1> Challenge </h1>

<h3>
    Write a program that prints all the numbers from 1 to 100.
    For multiples of 3, instead of the number, print "Three".
    For multiples of 5 print "Five".
    For numbers which are multiples of both 3 and 5, print "ThreeAndFive"
</h3>

<?php

$numberRenderer = new NumberRenderer();

for ($iterator = 1; $iterator <= 100; $iterator++) {
    echo $numberRenderer->render($iterator);

    echo '<br/>';
}