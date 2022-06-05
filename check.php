<!DOCTYPE html>
<head>
    <title>Check</title>
</head>
<body>

<?php
echo " REFRESH PAGE <br>";
$name="counter.txt";

$file = fopen($name,"r");
$count= fscanf($file,"%d");

fclose($file);
$count[0]+=1;

$file = fopen($name,"w");
fprintf($file,"%d",$count[0]);

fclose($file);
echo "Total number of views: ".$count[0];
?>

</body>
</html>

<!-- echo name | open count | close count | open print | close echo  -->

<!-- file banana -->
echo "Refresh page <br>";
$name="count.txt";

<!-- scan krna -->
$file=fopen($name,"r");        same 
$count=fscanf($file,"%d");   

<!-- count badhana -->
fclose($file);                same 1
$count[0]+=1;

<!-- print krna file me -->
$file=fopen($name,"w");      same
fprintf($file,"%d",$count[0]);

<!-- screen print -->
fclose($file);                same 1
echo "Visitors: ".$count[0]; 
