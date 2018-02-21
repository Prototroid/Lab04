<?php
// https://stackoverflow.com/questions/19810815/php-table-text-align-center

//// Inside Exercise_1.php ////

error_reporting(E_ALL);
ini_set("display_errors", 1);


//// Multiplication Table ////

echo "<table>";

for($r = 0; $r < 101; $r++)
{
    echo "<tr>";

    if($r == 0)
    {
        echo '<td style="text-align:center;">   '. " " ."   </td>";
	
    }
    else
    {
	echo '<td style="text-align:center;">   '. $r ."   </td>";
        
    }
   
    for($c = 1; $c < 101; $c++)
    {
        if($r == 0)
    	{
        	echo '<td style="text-align:center;">   '. ($r + 1) * ($c) ."   </td>";
    	}
   	 else
    	{
		echo '<td style="text-align:center;">   '. ($r) * ($c) ."   </td>";
    	}
        
    }

    echo "</tr>";
    
}

echo "</table>";

?>