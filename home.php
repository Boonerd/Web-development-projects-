<?php
$firstName = "Clara";
$age = 12;
$height =14.3;
$school = true;
$course =['BBIT', 'ICS'];

echo var_dump($age);
echo "<br>";
echo var_dump($height);
echo "<br>";
echo var_dump($school);
echo "<br>";
echo var_dump($course);
echo "<br>";
// functions
function getProduct(){
    $num1 = 13;
    $num2 = 20;
    echo $num1 * $num2;
}
getProduct();
echo "<br>";
//function with parameters
function myFunction($num1,$num2)
{
    return $num1 * $num2;
}
echo myFunction(5000, 5000);
echo "<br>";
//for loop
for($i =0; $i<6; $i++){
    echo "This round is ".$i."<br>";
}
// conditional statement
if ($age==18
) {
    echo "Your an adult";
}
elseif($age > 18){
    echo "A bit old";
}
else{
    echo "<br>A bit young";
}
$course = ['BBIT','ICS'];
$myFirstArray = array('strathmore','uon','ku');

echo "<br>".$myFirstArray[2];
//assosiative arrays
$mySecondArray = array('John' => 14,'Alice'=>13,'Jane'=>18);
echo "<br>".$mySecondArray['Alice'];
echo "<br>".$mySecondArray['John'];
//loop through array
foreach ($myFirstArray as $university) {
    echo "I go to ".$university."<br>";
}
?>
