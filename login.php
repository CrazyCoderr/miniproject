<?php
session_start();
$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
$port        = "port = 5432";
$dbname      = "dbname = dcjrfn9ert59om";
$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";
$db = pg_connect( "$host $port $dbname $credentials");
   /* Create a query statement */	
$qry = pg_query($db,"SELECT * FROM logind WHERE email = '$_POST[email]' and password = md5('$_POST[password]') ");
$row= pg_fetch_row($qry);
$_SESSION['user']= $row[0];
if($row > 0)
 {  header("location: dashboard.html"); }
else 
 { $message = "Email and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
include_once("signup.html"); }

pg_close($db);
?>

<?php
$host        = "host = ec2-54-205-187-125.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dbd2u0mqavsijh";
   $credentials = "user = hdyundzmldxrzc password= c4e7157567aff1598b6b75c9373abd02f8bbdb2e10fa7abefbd07925e5d267bb ";

   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql =<<<EOF
   CREATE TABLE IF NOT EXISTS booking
   (USERNAME CHAR(100) ,
    NO TEXT  NOT NULL UNIQUE Primary Key,
    FROM TEXT, TO TEXT,BY TEXT,D DATE); 
EOF;

ret=pg_query($sql);

   pg_close($db);


?>
