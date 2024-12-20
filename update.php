<?php

include("connection.php");
error_reporting(0);

$a=$_GET['srl'];
$b=$_GET['nam'];
$c=$_GET['pri'];


?>

<html lang="en">
<head>
    <title>
        Data Edition Page
    </title>

    <style>
        #sbt{
            text-align: center;
        }
    </style>
</head>

<body>
<form action="" method="get">
<table width="500" border="2" bgcolor="#7fffd4">
    <tr>
        <th>Serial</th>
        <td>
            <input type="text" name="sr" value="<?php echo $a; ?>">
        </td>
    </tr>
    <tr>
        <th>Product Name</th>
        <td>
            <input type="text" name="nm" value="<?php echo $b; ?>" >
        </td>
    </tr>
    <tr>
        <th>Price</th>
        <td>
            <input type="text" name="pr" value="<?php echo $c; ?>">
        </td>
    </tr>

    <tr>
        <td colspan="2" id="sbt">
        <input type="submit" name="submit" value="Update">
        </td>
    </tr>
</table>
</form>

<?php
if($_GET['submit']){

    $ser=$_GET['sr'];
    $nme=$_GET['nm'];
    $prc=$_GET['pr'];


    $query="UPDATE product_directory SET name='$nme',price='$prc' WHERE serial='$ser'";
    $data=mysqli_query($conn,$query);
    if($data){
        echo "<font color='green'>Record Updated Successfully<br> <a href='display.php'>Click here to see the updated product list !!</a>";
    }
    else{

        echo "<font color='red'>Record Not Updated</font>";
    }

}

else{
    echo "<font color='blue'>Click on Update button to update record.";
}
?>
</body>
</html>
