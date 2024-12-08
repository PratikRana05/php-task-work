//program to demonstrate the usage of logical operation with conditional statement


<?php
$age = 19;
$isCitizen = true;

if ($age >= 18 && $isCitizen) {
    echo "$age<br>";
    echo "Eligible to vote\n";
} else {
    echo "$age";
    echo "Not eligible to vote\n";
}