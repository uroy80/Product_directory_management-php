<html lang="en">
<head>
    <title>Product Data Insertion</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<form action="" method="GET" id="frm">
    <table width="500" border="2" bgcolor="#7fffd4" align="center" id="tbl">
        <tr>
            <td>
                <b>Serial</b>
            </td>
            <td>
                <input type="number" name="sr" placeholder="Serial Number">
            </td>
        </tr>
        <tr>
            <td>
                <b>Product Name</b>
            </td>
            <td>
            <input type="text" name="nm" placeholder="Product Name">
            </td>
        </tr>
        <tr>
            <td>
                <b>Price</b>
            </td>
            <td>
                <input type="text" name="pr" placeholder="Price">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
        <button type="submit" name="submit" value="SUBMIT">SUBMIT</button>
            </td>
        </tr>
    </table>

</form>
<?php

include("connection.php");
error_reporting(0);


if($_GET['submit']) {
    $serial = $_GET['sr'];
    $name = $_GET['nm'];
    $price = $_GET['pr'];



    if ($serial != "" && $name != "" && $price != "") {

        $query = "insert into product_directory values('$serial','$name','$price')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<br>Data Successfully Inserted<br>";
        } else {
            echo "Data Not Inserted";
            die("Data Not Inserted because" . mysqli_error($conn));

        }
echo "Inserted Data Details : <br>********<br>";
        echo $serial;
        echo $name;
        echo $price;
    } else {

        echo "All Fields Are Required";
    }

}
?>
</body>


</html>

