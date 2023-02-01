<?php include "header.php" ?>

<h3> Write a simple PHP script to print your information (Name and your groupid). </h3>
    
        <?php //OPENING TAG        
        echo "Rushani Madhumali <br>";
        echo "Group 11";
        ?>

    <h3> 3.2 Write PHP code to display the following message. </h3>
    
        <?php
        echo "Hello world! My name is \"David\"";
        ?>

    <h3> Current Date </h3>
        <?php
        echo date("d.m.Y")
        ?>
 <h3> 3.4 Variable in php </h3>
 <?php $title1 = "php is interesting";
 echo "<h1>" .$title1 . "</h1>";
 ?>


 <h3> 3.5 table and Variable </h3>
 <?php
 $g1 = 5;
 $g2 = 4;
 $g3 = 5;
 echo "
 <table>
 <tr>
 <th> S.N </th> <th> Name </th> <th> Grade </th>
 </tr>

 <tr>
 <td> 1 </td> <td> Pekka </td> <td> $g1 </td>
 </tr>

 <tr>
 <td> 2 </td> <td> Johanna test </td> <td> $g2 </td>
 </tr>

 <tr>
 <td> 3 </td> <td> Johan </td> <td> $g3 </td>
 </tr>
 
 </table>";
 ?>

<h1> add a Screenshot</h1>
 <h3> 4 Screenshot of the development environment</h3>
 <img src="Images/Screenshot1.png" alt="Screenshot of the development environment" width="50%">


<?php include "footer.php" ?>



