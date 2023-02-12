<?php include "header.php" ?>
<br>
<form action=""  method="GET">
    <input type="number" placeholder="Enter your first number" name="num1" required>
    <input type="number" placeholder="Enter your second number" name="num2" required>
    <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Subract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>    
    <input type="submit" name="cal"  value="Calculate">
</form>

<?php
if (isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator =  $_GET["operator"];
     switch ($operator){
        case "add":
            $result = $num1+$num2;
            break;
        case "sub":
            $result = $num1-$num2;
            break;
        case "mul":
            $result = $num1*$num2;
            break;
        case "div":
            $result = $num1/$num2;
            break;
        default:
            $result = "Error:you have not selected the correct operator";
}
}

if (isset($result)){
    echo "<h2> Result: $result</h2>";
}
?>
<br>
<h5> 5.1 Write a php script to display courses as list. </h5>
<?php 
    $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 

    foreach ($courses as $value) {
    echo "<li>".$value . "</li>";
}
?>
<br>
<h5>5.2 The unset() function is used to remove element from the array. The var_dump() 
    function is used to dump information about a variable.  array_values() is an inbuilt
     function that returns all the values of an array and not the keys.
</h5> 

<?php 
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");

unset($courses1["2"]);
var_dump($courses1);
print_r(array_values($courses1));
?>

<h5> 5.3 Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 </h5>
 <?php 
    
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    sort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    ksort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

   
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    krsort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}
    

?>
<br>
<h5> 5.4 Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
 </h5>
 
<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?>


<br>
<h5> 5.5 List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h5>

<?php 
    
    $color['#ffc0cb'] = "Pink";
    $color['#008000'] = "Green";
    $color['#ff0000'] = "Red";
    $color['#0000ff'] = "Blue";
    
    foreach ($color as $x=>$x_values) {
        echo $x . " => ".$x_values."<br>";}

?>
<br>
<h5> 5.6 PHP script to calculate and display average temperature, five lowest and highest temperatures. </h5>
<br>
<?php
    $a=array(78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    );

    
    $sum=array_sum($a);
    $count=count($a);
    echo "Average temperature : ".$sum/$count;

    
    sort($a);

    for ($i=0; $i < 5; $i++) {
        echo $a[$i] . "<br>";}

    
    rsort($a);

    for ($i=0; $i < 5; $i++) {
        echo $a[$i] ."<br>";}

?>





<?php include "footer.php" ?>