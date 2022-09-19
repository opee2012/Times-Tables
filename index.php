<!DOCTYPE html>
<html>
    <head>
        <title>Times Table Assignment</title>
    </head>
    <body>
        <?php
        $randNum = rand(1,12);
        echo "<h1>Times Table from 1 to $randNum</h1>";
        echo "<table border='1px' style='border-collapse: collapse'>";
        
        echo "<tr style='font-weight: bold;'>";
            echo "<td></td>";
            for ($col=1; $col <= $randNum; $col++) {
                echo "<td style='text-align: center'>$col</td> \n";
            }
        echo "</tr>";

        for ($row=1; $row <= $randNum; $row++) { 
            echo "<tr> \n";

            echo "<td style='font-weight: bold; text-align: center'>$row</td>";

            for ($col=1; $col <= $randNum; $col++) { 
                $product = $col * $row;
                echo "<td style='text-align: center'>$product</td> \n";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </table>
    </body>
</html>