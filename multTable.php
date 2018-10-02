<?php
//multiplication table
$x = 100;
$y = 100;

echo "<table>";

for ($i = 0; $i <= $x; $i++){
    echo "<tr> \n";
    for ($j = 0; $j <= $y; $j++){
      if($i==0 && $j==0){
        echo "<td> &nbsp </td>";
      }
      else if($i==0 && $j!=0){
        echo "<td><b> $j </b></td>";
      }
      else if($i!=0 && $j==0){
        echo "<td><b> $i </b></td>";
      }
      else{
      echo "<td>".$i*$j."</td>\n";
      }
    }
    echo "</tr>";
  }
echo "</table";
?>
