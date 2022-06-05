<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Matrix</title>
</head>
<body>
   <?php
   echo "<b>The matrix is </b><br>";
   $rows=3;
   $cols=3;
   $m=1;
   $a=array(array());

   for($i=0;$i<$rows;$i=$i+1)
   {
      for($j=0;$j<$cols;$j=$j+1)
      {
         $a[$i][$j]=$m;
         echo $a[$i][$j]." ";
         $m=$m+1;
      }
      echo "<br>";
   }

   echo "The transpose of matrix is <br>";
   for($j=0;$j<$cols;$j=$j+1)
   {
      for($i=0;$i<$rows;$i=$i+1)
      {
         echo $a[$i][$j]." ";
      }
      echo "<br>";
   }
   ?>
</body>
</html>