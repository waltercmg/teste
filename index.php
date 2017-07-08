<?php
$conn = pg_connect("dbname=postgres");

$result=pg_query($conn, "SELECT * FROM jogador;");
  if  (!$result) {
   echo "query did not execute";
  }
  if (pg_num_rows($result) == 0) {
   echo "0 records";
  }
  else {
   while ($row = pg_fetch_array($result)) {
     echo $row['nome']."<br>";
   }
  }
echo "terminou";
?>