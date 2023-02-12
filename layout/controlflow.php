<?php include "header.php" ?>

<h1>About US  </h1>

<?php
$month = date('F');
if ($month == 'August')
    {
    echo "It's August, so it's still holiday.";
    }
else{
    echo "Not August, so at least not in the peak of the heat.";}
?>

<h3>2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>
<?php
$color = 'Red';
if ($color == 'Red'){
    echo "The color is red. ";
    }
else{
    echo "The color is not red.";}
?>

<h3>3.Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
</h3>

<?php
$score = 100;
if ($score > 80)
    {
    echo "Excellent ";
    }
elseif ($score > 70) 
    {
    echo "Great ";
    }
elseif ($score > 60) 
    {
    echo "Good ";
    }  
elseif ($score > 50) 
    {
    echo "Pass ";
    }  
elseif ($score < 50) 
    {
    echo "Fail";
}
?>

<h3>3.4 Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h3>
<br>

<?php
function check_vote() {
    $name = "Name";
    $age = 00;
    if ($age >= 18) {
        echo $name . ", You Are Eligible For Vote";
    } else {
        echo $name . ", You are not eligible for vote. ";
    }
}
check_vote();

?>

<h3>In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….</h3>
<br>
<?php

 function getBrowser()
 {
   $user_agent = $_SERVER['HTTP_USER_AGENT'];
   $browser = "N/A";

   $browsers = [
     '/msie/i' => 'Internet explorer',
     '/firefox/i' => 'Firefox',
     '/safari/i' => 'Safari',
     '/chrome/i' => 'Chrome',
     '/edge/i' => 'Edge',
     '/opera/i' => 'Opera',
     '/mobile/i' => 'Mobile browser',
   ];


   foreach ($browsers as $regex => $value) 
{
     if (preg_match($regex, $user_agent)) 
{
       $browser = $value;
     }
   }
   return $browser;

 }

 echo "You are using: " . getBrowser();

?>








<?php include "footer.php" ?>
