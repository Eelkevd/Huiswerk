<?php
echo "<table border=\"1\">";
$rows = 10;
$cols = 3;

        for ($r =1; $r <= $rows; $r++){
        	echo'<tr>';
            echo'<td>' .$r. '</td>';
            echo'<td>' .$r*$r. '</td>';
            echo'<td>' .$r*$r*$r. '</td>';
            echo'</tr>';

            //for ($c = 1; $c < $cols; $c++)
             //   echo '<td>' .$c*$r.'</td>';
          // echo '</tr>'; // close tr tag here

        }

  echo "</table>";
?>