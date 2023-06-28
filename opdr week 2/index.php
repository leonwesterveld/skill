<?php
$number_month = date(format: 'm');
echo"het in nu: ";
switch ($number_month){
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "Augustus";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;          
}
print '</br> jij koos: ';

$name_month = $_POST["date"];;
switch ($name_month){
    case "1":
        echo "January";
        break;
    case "2":
        echo "February";
        break;
    case "3":
        echo "March";
        break;
    case "4":
        echo "April";
        break;
    case "5":
        echo "May";
        break;
    case "6":
        echo "June";
        break;
    case "7":
        echo "July";
        break;
    case "8":
        echo "Augustus";
        break;
    case "9":
        echo "September";
        break;
    case "10":
        echo "October";
        break;
    case "11":
        echo "November";
        break;
    case "12":
        echo "December";
        break;            
}
print '</br>';

?>