<?php

//Turn on error reporting
ini_set('display_errors');
error_reporting(E_ALL);
include('head.html');
?>

<body>

<div class="container" id="main">

    <pre>
<?php
var_dump($_POST);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$pickup=$_POST['pickup'];
$toppings=$_POST['toppings'];
$size=$_POST['size'];
echo"    <h1>Thank you for your order ".$fname."!</h1>";
echo "<h4> Order Sumary:</h4>";
echo"<p> Name: $fname $lname</p>";
if($_POST['method']=='delivery'){
    echo "<p> Address: $address </p>";
}
echo"<p>Toppings: ".implode(",",$_POST['toppings'])."</p>";


?>
</pre>
</div>
</body>
</html>