<?php
include("connection.php");
$ser=$_GET['srl'];
echo $ser;
$query="delete from product_directory where serial='$ser'";
$data=mysqli_query($conn,$query);

if($data){

    echo "<script>alert('Product Deleted Successfully')</script>";
    echo "<script>window.open('edit.php','_self')</script>";
}

else{

    echo "<script>alert('Product Not Deleted')</script>";


}
?>