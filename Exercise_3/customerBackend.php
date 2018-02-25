<html>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani|Play" rel="stylesheet">
</html>

<?php
//
// https://stackoverflow.com/questions/19810815/php-table-text-align-center
// https://stackoverflow.com/questions/8416099/php-testing-if-a-radio-button-is-selected-and-get-the-value
// https://www.w3schools.com/tags/att_td_colspan.asp
// 

//// Inside customerBackend.php ////

error_reporting(E_ALL);
ini_set("display_errors", 1);


//// customerBackend database ////
    
    if(isset($_POST['submit']))
    {
        echo "<body>";

        //// Welcome and password ////
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "<h1> Welcome customer! </h1>";
        echo "<h2> Your username is: ". $username ." </h2>";
        echo "<h2> Your password is: ". $password ." </h2>";
        echo "<br>";

        //// Product Processing ////
            echo "<h3> Your order is processing... </h3>";
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $v1 = 50.00;
            $v2 = 700.00;
            $v3 = 1800.00;

        //// Shipping Processing ////
            $s = 0.00;
            $ship = $_POST['s'];
            $shipping = "";
            if($ship == "s1")
            {
                $s = 0.00;
                $shipping = "Free 7 Day";
            }
            else if($ship == "s2")
            {
                $s = 5.00;
                $shipping = "Three Day";
            }
            else if($ship == "s3")
            {
                $s = 50.00;
                $shipping = "Over Night";
            }

        //// Total Processing ////
            $t1 = $q1 * $v1;
            $t2 = $q2 * $v2;
            $t3 = $q3 * $v3;
            $t = $t1 + $t2 + $t3 + $s;
            echo "<h3> ...Your order is processed! </h3>";
            echo "<br>";

        //// Receipt ////
        echo "<h2> Here is your receipt: </h2>";
        echo "<table border='1'>";

            //// Header ////
            echo "<tr>";
            echo "<td style='text-align:center;'> ". " " ." </td>";
            echo "<td style='text-align:center;'> ". " Quantity " ." </td>";
            echo "<td style='text-align:center;'> ". " Cost Per Item " ." </td>";
            echo "<td style='text-align:center;'> ". " Sub Total " ." </td>";
            echo "</tr>";

            //// Item 1 ////
            echo "<tr>";
            echo "<td style='text-align:center;'> ". " CPU Cooler " ." </td>";
            echo "<td> ". $q1 ." </td>";
            echo "<td> $". $v1 .".00 </td>";
            echo "<td> $". $t1 .".00 </td>";
            echo "</tr>";

            //// Item 2 ////
            echo "<tr>";
            echo "<td style='text-align:center;'> ". " Zotac GeForce GTX 1070 Ti " ." </td>";
            echo "<td> ". $q2 ." </td>";
            echo "<td> $". $v2 .".00 </td>";
            echo "<td> $". $t2 .".00 </td>";
            echo "</tr>";

            //// Item 3 ////
            echo "<tr>";
            echo "<td style='text-align:center;'> ". " Intel Core i9-7980XE " ." </td>";
            echo "<td> ". $q3 ." </td>";
            echo "<td> $". $v3 .".00 </td>";
            echo "<td> $". $t3 .".00 </td>";
            echo "</tr>";

            //// Shipping ////
            echo "<tr>";
            echo "<td style='text-align:center;'> ". " Shipping " ." </td>";
            echo "<td colspan='2'> ". $shipping ." </td>";
            echo "<td> $". $s .".00 </td>";
            echo "</tr>";

            //// Total ////
            echo "<tr>";
            echo "<td style='text-align:center;' colspan='3'> ". " Total Cost " ." </td>";
            echo "<td> $". $t .".00 </td>";
            echo "</tr>";

        echo "</table>";
        echo "<br>";
        
        echo "<h2> Thank you for shopping with us! </h2>";
        echo "</body>";
    }
    
    

?>