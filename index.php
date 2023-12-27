<?php
/*Write a program which checks different numbers equivalent to a variable and gives number as output.
 Perform it using ifelse statement.*/
$a = 5; //a is a variable and 5 is an integer value assigned to it.

if($a==1) //First condition
echo "The number is One"; //If first condition is true it will print this statement.
else if ($a==2)  //if first condition is not true the this codition will be checked.
echo "The number is Two"; //and this statement will be printed.
else if ($a==3)
echo "The number is Three";
else if ($a==4)
echo "The number is Four";
else if ($a==5)
echo "The number is Five<br>";
else                          //If all the above conditions aren't true then the message in else statement will be printed.
echo "Your number is greater than 5.";

?>



<?php
/*Write a program which checks different numbers equivalent to a variable and gives number as output.
 Perform it using switch statement.*/
$b = 6;

switch ($b){   //variable(expression) is assigned to switch statement.
    case "1":  //This is first case and the value assigned to it is called the label of this case.
        echo "The number is One";  //If case 1 is true then this statement will be printed.
        break;            //after the case one being true the break keyword will breaks out of the switch block and other cases will not be checked.
    case "2":
        echo "The number is Two";
        break;
    case "3":
        echo "The number is Three";
        break;
    case "4":
        echo "The number is Four";
        break;
    case "5":
        echo "The number is Five";
        break;
    default:    //If there is no matching case then this statement will be executed.
    echo "Your number is greater than 5.";
    

}
?>


<?php
//Write a program to print table of 2.

$c =2;
echo "<br> The table of 2 <br>";
for($i=1; $i<=10; $i++){
$table = $c * $i;
echo "{$c} * {$i} = {$table} <br>";
}
?>