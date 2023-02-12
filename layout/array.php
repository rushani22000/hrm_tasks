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
<!-- <h5>5.2 The unset() function is used to remove element from the array. The var_dump() 
    function is used to dump information about a variable.  array_values() is an inbuilt
     function that returns all the values of an array and not the keys.
</h5> -->

<?php /*
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
    
*/
?>




<?php include "footer.php" ?>