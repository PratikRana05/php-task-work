<!-- Create a PHP script to display the day of the week based on a numeric input
using a switch statement.
 -->

 <?php
$dayNumber = 4;
switch ($dayNumber) {
    case 1:
        echo "It's Sunday\n";
        break;
    case 2:
        echo "It's Monday\n";
        break;
    case 3:
        echo "It's Tuesday\n";
        break;
    case 4:
        echo "It's Wednesday\n";
        break;
    case 5:
        echo "Its Thursday\n";
        break;
    case 6:
        echo "It's Friday\n";
        break;
    case 7:
        echo "It's Saturday\n";
        break;
    default:
        echo "Invalid day\n";
}