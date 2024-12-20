<?php
include("connection.php");

$query="SELECT * FROM product_directory";
$data=mysqli_query($conn,$query);



if($data){
    $total=mysqli_num_rows($data);

    if($total>0)
    {


?>


<html lang="en">
<head>
    <title>Edit Page</title>

    <style>
        td{
            padding: 10px;
            text-align: center;
        }
        th{
            padding: 10px;
        }
    </style>
</head>

<body>
    <table border="2" bgcolor="#7fffd4">
        <tr>
            <th>Serial</th>
            <th>Product Name</th>
            <th>Price</th>
            <th colspan="2">Operations</th>
        </tr>

        <?php

        while($result=mysqli_fetch_assoc($data)){

            echo "<tr>
                    <td>".$result['serial']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['price']."</td>
                    <td><a href='update.php?srl=".urlencode($result['serial'])."&nam=".urlencode($result['name'])."&pri=".urlencode($result['price'])."'>Edit</a></td>
                    <td><a href='delete.php?srl=$result[serial]'>Delete</a></td>
                  </tr>";

        }
        
        ?>

    </table>
</body>

</html>

<?php

    }
    else{
        echo "Table has no Records";
    }



    }else{
    echo "Query Failed". mysqli_error($conn);

}


mysqli_close($conn);
?>