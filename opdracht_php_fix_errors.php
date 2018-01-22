<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <title><?php echo "PHP addignment by: Eelke_van_Dijk (fix PHP syntax errors)" ?></title> <!--haakjes weggehaald-->
  </head>

  <body>
      <?php
        $ages = array(10,50,39,40,67,99,7,2,10,88);//array van gemaakt
        $sum = 0;

        function getAverageAge($input) {
          global $sum, $ages;
          for($i=2; $i<count($input); $i++) {
           $sum += $input[$i];
          }

           return $sum / count($ages);
        }

        echo getAverageAge($ages);
		?>
  </body>
</html>