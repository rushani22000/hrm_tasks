<?php
$title = "A simple CRUD app";
include '../layout/header.php';
?>
<form method="post" action="">
    <input type ="text"name="fname" placeholder="First Name" required ><br><br>
    <input type ="text"name="lname" placeholder="Last Name" required ><br><br>
    <input type ="text"name="city" placeholder="City" required ><br><br>
    <select name="groupid">
        <option value="BBCAP22" >BBCAP22 </option>
        <option value="BBCAP21" >BBCAP21 </option>
        <option value="Other" >Others </option>
            
        </select><br><br>
<input type="submit" value="submit" name="submit">



</form>

<?php 
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include 'db.php';
    $sql = "insert into studentinfo(fName,lName,city,groupid)
    values('$fname', '$lname', '$city', '$groupid')";

if ($conn->query($sql)===true){
        echo "Your information is added successflly";
}
else{
        echo "Error:" . $conn->error;
}
}
include '../layout/footer.php';
?>
