<?php
$title ="Reading Data from the data base";
include '../layout/header.php';
include 'db.php';
$sql="select*from studentinfo";
$result=$conn->query($sql);
if($result->num_rows > 0){
    echo"<table class='table'>
        <tr>
        <th>ID</th><th>First Name</th><th>Last Name</th><th>Grop ID</th><tr>";
    while ($row=$result ->fetch_assoc()){
    echo"
        <tr>
        <td><a  href='updatesingle.php? id =$row[id]'>$row[id]</a></td>
        <td>$row[fname]</td>
        <td>$row[lname]</td>
        <td>$row[city]</td>
        <td>$row[groupid]</td>
        </tr>
    ";
}
echo "</table>";
}
else
    {
        echo "No Results";
    }

$conn->close();

include '../layout/footer.php';
?>
