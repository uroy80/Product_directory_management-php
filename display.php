<?php

    include("connection.php");
    error_reporting(0);

    $query= "SELECT * FROM product_directory";
    $data= mysqli_query($conn,$query);

    $total=mysqli_num_rows($data);


    if($total!=0){

        ?>
<html lang="en">

<head>
    <title>Display</title>
</head>
<body>


        <table border="2" bgcolor="#7fffd4" id="table">
            <tr>i
                <th>Serial</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
<?php
        while($result=mysqli_fetch_assoc($data))
        {

           echo" <tr>
                    <td>".$result["serial"]."</td>
                    <td>".$result["name"]."</td>
                    <td>".$result["price"]."</td>
                 </tr>";



        }

    ?>

        </table>

</body>
</html>


<?php


    }

    else{

        echo "Table has no records";
    }

    mysqli_close($conn);


    ?>
