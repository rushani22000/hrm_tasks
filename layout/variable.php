<?php include "header.php" ?>
<h3> Exercise 3.In-class Task variable and operators</h3>

<h2> Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site.  </h2>

<form action="action.php" method="post">
    <h5>3.2 Apply bootstrap style to the form.</h5><br>
 <div class="row">
    <div class="col">
        <input type="text" name="fname" required placeholder="First Name" class="form-control"> 
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control">
     </div>
    
     <div class="col">
     <input type="date" name="bdate" required placeholder="Birth Date" class="form-control"> 
    </div>

    <div class="col">
     <input type="color" name="color" required placeholder="Select fav color" class="form-control"> 
    </div>
    <br><br>
 </div>
 <input type="submit" value="Submit" >
</form>
<br>
<h5>3.3Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h5>

 

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N </th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <th scope="row">1</th>
      <td>Pekka</td>
      <td>5</td>
      
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Johanna</td>
      <td>4</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Johan</td>
      <td>5</td>
     
    </tr>
  </tbody>
</table>
<br>
<h5>3.4 Write a PHP script with two string variables. Assign any text to these variables. Join them together.
      Print the length of the string.</h5>

 <?php
    $city = "Helsinki ";
    $country = "Finland";
    echo "  $city is capital city in $country  <br> ";
    echo "Helsinki = ". strlen($city)  ;
    echo "<br>";
    echo "Finland = ". strlen($country);
    ?>
<br><br>
<h5>3.5 Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and echo statement to output your answer.</h5>
    <?php
    $a = 298;
    $b = 234;
    $c = 46;
    $d = $a + $b + $c ;
    echo $d;
 echo "<br>"
 ?>
<br>
<h5>3.6 Write a PHP script to detect the browser being used to view your pages. 
    (Use predefined variables: $_SERVER).</h5>
    <?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>


<?php include "footer.php" ?>
