<?php
$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

 $sql = ["CREATE TABLE IF NOT EXISTS logind (USERNAME VARCHAR(100) PRIMARY KEY, EMAIL TEXT  NOT NULL UNIQUE,PASSWORD TEXT);"];
 
$ret = pg_query($db, $sql);
   if(!$ret) {
      echo "Error";
   }
  else {
      echo "Table created successfully\n";
   }
   pg_close($db); 

include_once("Homepage.html");

?>
