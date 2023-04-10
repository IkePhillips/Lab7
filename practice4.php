<!DOCTYPE html>
<html>
    <body>
    <?php
        $number = $_POST['size'];
        echo "<table border='1'>";
        echo "<tr><td></td>";
	for($i = 1; $i <= $number; $i++){
            echo "<td>$i</td>";
        }
        echo "</tr>";
	for($i = 1; $i <= $number; $i++){
            echo "<tr><td>$i</td>";
            for($j = 1; $j <= $number; $j++){
                $product = $i * $j;
                echo "<td>$product</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
